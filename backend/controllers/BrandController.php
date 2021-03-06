<?php
namespace backend\controllers;

use backend\filters\RbacFilter;
use backend\models\Brand;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Request;
use yii\web\UploadedFile;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class BrandController extends Controller
{
    public $enableCsrfValidation = false;

    //显示列表首页
    public function actionIndex()
    {
        //获取表中所有数据
        $rows = Brand::find()->all();

        //显示列表
        return $this->render("index", ["rows" => $rows]);

    }

    /**
     * 添加数据
     */

    public function actionAdd()
    {
        //实列话Request 类
        $request = new Request();
        //实列化Brand
        $model = new Brand();
        //判断是否是post提交
        if ($request->isPost) {
            //加载数据
            $model->load($request->post());
            //处理图片
            //$model->imgFile=UploadedFile::getInstance($model,"imgFile");
            if ($model->validate()) {
                /* //保存图片位置
                 $file = '/upload/' . uniqid() . '.' . $model->imgFile->extension;
                 if ($model->imgFile->saveAs(\Yii::getAlias('@webroot') . $file)) {
                     //文件上传成功
                     $model->logo = $file;
                 }*/
                //保存数据
                $model->save(false);
                //提示成功信息
                \Yii::$app->session->setFlash("success", "添加成功");
                //跳转到首页
                return $this->redirect(["brand/index"]);

            } else {
                //打印错误信息
                var_dump($model->getErrors());
            }


        }

        //显示添加页面
        return $this->render("add", ["model" => $model]);

    }

    /**
     * 修改
     */

    public function actionEdit($id)
    {
        //根据id获取相应的记录
        $model = Brand::findOne(["id" => $id]);
        //实列化Request类
        $request = new Request();
        //判断是否是post提交
        if ($request->isPost) {
            //加载数据
            $model->load($request->post());
            //处理图片

            $model->imgFile = UploadedFile::getInstance($model, "imgFile");

            if ($model->validate()) {

                //保存图片位置
                if ($model->imgFile) {
                    $file = '/upload/' . uniqid() . '.' . $model->imgFile->extension;

                    if ($model->imgFile->saveAs(\Yii::getAlias('@webroot') . $file)) {
                        //文件上传成功
                        $model->logo = $file;
                    }
                }

                //保存数据
                $model->save(false);
                //提示成功信息
                \Yii::$app->session->setFlash("success", "修改成功");
                //跳转到首页
                return $this->redirect(["brand/index"]);

            } else {
                //打印错误信息
                var_dump($model->getErrors());
            }

        };
        //展示修改页面
        return $this->render("edit", ["model" => $model]);


    }

    /**
     * 删除
     */
    public function actionDelete()
    {
        //接收id
        $id = $_GET["id"];
        //根据id获取相应的记录

        $model = Brand::findOne(["id" => $id]);

        //修改该记录
        $model::updateAll(["status" => -1], ["id" => $id]);

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

    //配置过滤器
    public function behaviors()
    {
        return [
            "rbac"=>[
                'class'=>RbacFilter::className(),
                'except'=>['upload'],//除了这些操作，其他操作生效
            ]

        ];
    }

}