<?php
namespace backend\controllers;

use backend\models\Brand;
use backend\filters\RbacFilter;
use backend\models\Goods;
use backend\models\GoodsCategory;
use backend\models\GoodsCount;
use backend\models\GoodsGallery;
use backend\models\GoodsIntro;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Request;
use yii\web\UploadedFile;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class GoodsController extends Controller{
    public $enableCsrfValidation = false;

       //显示商品列表
    public function actionIndex(){

       //获取所有的数据
        $query=Goods::find();
        $pager=new Pagination([
            'defaultPageSize'=>5,
            "totalCount"=>$query->count(),
        ]);

        //判断搜索条件
           // $sn=\Yii::$app->request->get("sn")

            if (\Yii::$app->request->get("name")){
                $name=\Yii::$app->request->get("name");
                $query->where(["like","name",$name]);
            }
            if (\Yii::$app->request->get("sn")){
                $sn=\Yii::$app->request->get("sn");
                $query->andwhere(["like","sn",$sn]);
            }
            $rows=$query->limit($pager->limit)->offset($pager->offset)->all();

       //获取品牌表中所有的数据
        $data=Brand::find()->all();
        //用一个数组保存id和name的关系
        $arr=[];
        foreach ($data as $val){
            $arr[$val->id]=$val->name;
        }
    //获取商品分类表中id和name的对应关系
        $datas=GoodsCategory::find()->all();
        //用一个数组保存id和name的关系
        $arrs=[];
        foreach ($datas as $val){
            $arrs[$val->id]=$val->name;
        }

       //加载显示页面
        return $this->render("index",["rows"=>$rows,"arr"=>$arr,"arrs"=>$arrs,"pager"=>$pager]);
        //var_dump(\Yii::$app->request->get());

    }

    /**
     * 添加数据
     */
    public function actionAdd()
    {
        //实列化GoodsCount
        //$goodsCount = new GoodsCount();
        //实列化
        $goodsintro = new GoodsIntro();
        //实列化Request类
        $request = new Request();
        //实列化Goods类
        $model = new Goods();
        //判断是否post提交
     if ($request->isPost){
         //加载数据
         $model->load($request->post());
         //获取当前时间
         $model->create_time=time();
         //获得时间的年月日
         $str=date("Y-m-d",time());
         $arr=explode("-",$str);
         $time=implode("",$arr);

        //验证数据
         if($model->validate()){

             //添加数据到count
             if (GoodsCount::findOne(["day"=>$str])){
                 $goodsCount=GoodsCount::findOne(["day"=>$str]);
                 $goodsCount::updateAll(["count"=> $goodsCount->count+1],["day"=>$str]);
             }else{
                 $goodsCount=new GoodsCount();
                 $goodsCount->count=1;
                  $goodsCount->day=$str;
               //保存数据
                 $goodsCount->save();
             }
             //可以使用str_pad来进行操作.
             //拼接货号
             $sn=$time."0000";

                 $model->sn=$sn+$goodsCount->count;


             //加载数据
             $model->save();


             //将数据保存到content
             $goodsintro->goods_id=$model->id;
             $goodsintro->content=$model->content;
             //保存
             $goodsintro->save();
             //提示添加信息
             \Yii::$app->session->setFlash("success","添加成功");
             //跳转到首页
             return $this->redirect(["goods/index"]);
         }else{
             var_dump($model->getErrors());
         }


     }
        //获取品牌表的数据
        $data=Brand::find()->all();
        //定义一个空数组保存id和name的对应关系
        $arr=[];
        foreach ($data as $val){
            $arr[$val->id]=$val->name;
        }

        //加载显示页面
        return $this->render("add",["model"=>$model,"data"=>$arr]);

    }

    /**
     * 相册列表
     */

    public function actionGallery($id){
        //实列化Request
        $request=new Request();
        //添加完相册之后生成静态文件保存，根据id获取商品信息
        //$goods=Goods::findOne(["id"=>$id]);


        //实列化GoodsGallery
        $rows=GoodsGallery::find()->where(["goods_id"=>$id])->all();
       //遍历获取第一张图片
    /*    $arr=[];
        foreach ($rows as $row){
            $arr[]=$row;
            break;
        }
        if (!$arr[0]){
            $arr[0]=$goods->logo;
        }
        //保存生成的静态页面
        $content=$this->renderPartial("content",["rows"=>$rows,"arr"=>$arr[0],"goods"=>$goods]);
        //将静态文件保存
        file_put_contents("../../frontend/web/content/".$id.".html",$content);*/

      return $this->render("show",["rows"=>$rows,"id"=>$id]);

    }
    //获取商品点击数据
    public function actionClick(){
        $id=\Yii::$app->request->get("id");
        $goods=Goods::findOne(["id"=>$id]);
        $goods::updateAllCounters(["view_times"=>1],["id"=>$id]);
        return \yii\helpers\Json::encode($goods->view_times);
    }
    //生产静态页面
    public function actionContent($id){
        //获取商品的信息
        $goods=Goods::findOne(["id"=>$id]);
        //$goods::updateAllCounters(["view_times"=>1],["id"=>$id]);
        //根据id获取商品的相册
        $rows=GoodsGallery::find()->where(["goods_id"=>$id])->all();
        //遍历获取第一张图片
        $arr=[];
        foreach ($rows as $row){
            $arr[]=$row;
            break;
        }
        //保存生成的静态页面
        $content=$this->renderPartial("content",["rows"=>$rows,"arr"=>$arr[0],"goods"=>$goods]);
        $filename="@frontend/web/content/";
        //\Yii::getAlias($filename);
        //将静态文件保存
        file_put_contents(\Yii::getAlias($filename).$id.".html",$content);
        //提示修改信息
        \Yii::$app->session->setFlash("success","静态页面已经生成");
        //跳转回首页
       // return $this->redirect(["goods/index"]);


    }
    /**
     * 修改数据
     */

    public function actionEdit($id){
        //实列化Request
        $request=new Request();
        //实列化Goods
        $model=Goods::findOne(["id"=>$id]);
        //实列化GoodsIntro
        $goodsIntro=GoodsIntro::findOne(["goods_id"=>$id]);
        //判断是否是post提交
        if($request->isPost){
          //加载数据
            $model->load($request->post());
            //验证数据
            if ($model->validate()){
                //保存数据
                $model->save(false);
                //将文章详情保存
                $goodsIntro->content=$model->content;
                //保存
                $goodsIntro->save();
                //提示添加信息
                \Yii::$app->session->setFlash("success","修改成功");
                //跳转回首页
                return $this->redirect(["goods/index"]);

            }else{
                var_dump($model->getErrors());

            }

        }

        //获取品牌表的数据
        $data=Brand::find()->all();
        //定义一个空数组保存id和name的对应关系
        $arr=[];
        foreach ($data as $val){
            $arr[$val->id]=$val->name;
        }

       //将商品的详情赋值给model
        $model->content=$goodsIntro->content;
            //加载显示页面
        return $this->render("edit",["model"=>$model,"data"=>$arr]);



    }

    /**
     * 删除
     *
     */
    public function actionDelete($id){
        //实列化Goods
        $model=Goods::findOne(["id"=>$id]);
        //删除
        $model->delete();
       //将总记录数减一
        $str=date("Y-m-d",time());
        if (GoodsCount::findOne(["day"=>$str]))
        {
            $goodsCount=GoodsCount::findOne(["day"=>$str]);
            $goodsCount::updateAll(["count"=> $goodsCount->count-1],["day"=>$str]);
        }
        //将商品的详情删除
        if (GoodsIntro::findOne(["goods_id"=>$id])){
            GoodsIntro::findOne(["goods_id"=>$id])->delete();
        }
          echo Json::encode(["msg"=>"删除成功"]);
    }
    /**
     * 处理图片
     *
     */
    public function actionUpload(){
        //接收图片
        $img=UploadedFile::getInstanceByName("file");
        //保存图片
        $file="/upload/".uniqid().$img->extension;
        if ($img->saveAs(\Yii::getAlias("@webroot").$file,0)){
            //使用七牛云
            $accessKey ="OwBCqvTwgJ0EC0zJSPLEY67wnvA_XEdyGwLPGA0u";
            $secretKey = "e_JpkrUSDpLIcFnFxltPsyvmJzDTcJq0MpQUY4ad";
             $bucket = "zhengtao";
             $domin="p1fy60m44.bkt.clouddn.com";
           // 构建鉴权对象
         $auth = new Auth($accessKey, $secretKey);
          // 生成上传 Token
          $token = $auth->uploadToken($bucket);
          // 要上传文件的本地路径
          $filePath =\Yii::getAlias('@webroot').$file;
          // 上传到七牛后保存的文件名
           $key = $file;
         // 初始化 UploadManager 对象并进行文件的上传。
           $uploadMgr = new UploadManager();
         // 调用 UploadManager 的 putFile 方法进行文件的上传。
        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
        //echo "\n====> putFile result: \n";
     if ($err !== null) {
      return Json::encode(["errors"=>1]);
} else {
         $url="http://{$domin}/{$key}";

    return Json::encode(["url"=>$url]);
}
            //上传成功返回图片地址
        }else{
            return Json::encode(["errors"=>1]);
        }

    }
    //加载Ueditor
    public function actions(){
        return [
            'ueditor'=>[
                'class' => 'common\widgets\ueditor\UeditorAction',
                'config'=>[
                    //上传图片配置
                    'imageUrlPrefix' => "", /* 图片访问路径前缀 */
                    'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
                ]
            ]
        ];
    }

      //保存相册图片
    public function actionSave(){
        //接收传过来的url和id
        $id=$_GET["id"];
        $url=$_GET["url"];
        //实列化GoodsGallery
        $goodsgallery=new GoodsGallery();
        $goodsgallery->goods_id=$id;
        $goodsgallery->path=$url;
        //保存数据
        $goodsgallery->save();

        echo Json::encode(["id"=>$goodsgallery->id]);



    }

    /**
     * 删除相册
     */
    public function actionDel($id){

     //根据id获取记录
        $model=GoodsGallery::findOne(["id"=>$id]);
        //删除
       $model->delete();

    }

    //配置过滤器
   public function behaviors()
    {
        return [
            "rbac"=>[
                'class'=>RbacFilter::className(),
                'only'=>['index','add','edit','delete'],//除了这些操作，其他操作生效
            ]

        ];
    }

}