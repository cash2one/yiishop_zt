<?php
namespace backend\controllers;

use backend\filters\RbacFilter;
use backend\models\Article;
use backend\models\ArticleCategory;
use backend\models\ArticleDetail;
use yii\data\Pagination;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Request;

class ArticleController extends Controller{
    //显示页面
    public function actionIndex(){

        $query=Article::find();
        //设置每页显示多少条以及总条数
       $pager=new Pagination([
           "defaultPageSize"=>3,
           "totalCount"=>$query->count(),

       ]);
       $rows=$query->limit($pager->limit)->offset($pager->offset)->all();
        //将文章分类的名和id传入进去
        $all=ArticleCategory::find()->all();

        //定义一个数组保存id和name的对应关系
        $arr=[];
        foreach ($all as $row){
            $arr[$row->id]=$row->name;
        }
        //加载显示页面
        return $this->render("index",["rows"=>$rows,"arr"=>$arr,"pager"=>$pager]);
    }

    /**
     * 添加内容
     */

    public function actionAdd(){
       //实列化Request
        $request=new Request();
        //实列化Article
        $model=new Article();
        //实列化Article_detail
        $article=new ArticleDetail();

        //判断是否是post提交
        if ($request->isPost){
            //加载数据
            $model->load($request->post());
            //获取当前时间
            $model->create_time=time();
            //再次验证数据
            if ($model->validate()){
                //保存数据
                $model->save();
                //保存detail表content
                $article->content=$model->content;
                //保存数据
                $article->save();
                //提示添加成功信息
                \Yii::$app->session->setFlash("success","添加成功");
                //跳转回列表首页
                return $this->redirect(["article/index"]);
            }else{
                var_dump($model->getErrors());
            }



        }
        //将文章分类的名和id传入进去
        $all=ArticleCategory::find()->all();

        //定义一个数组保存id和name的对应关系
        $arr=[];
        foreach ($all as $row){
            $arr[$row->id]=$row->name;
        }


        //加载显示页面
        return $this->render("add",["model"=>$model,"arr"=>$arr]);

    }

    /**
     * @return array修改
     */

    public function actionEdit($id){
        //实列化Request
        $request=new Request();
        //实列化Article
        $model=Article::findOne(["id"=>$id]);
        //实列化Article_category
        $article=ArticleDetail::findOne(["article_id"=>$id]);
        //判断是否是post提交
        if($request->isPost){
            //加载数据
            $model->load($request->post());
            //再次验证数据
            if ($model->validate()){
                //保存数据
                $model->save();
                //保存detail表content
                $article->content=$model->content;
                //保存数据
                $article->save();
                //提示添加成功信息
                \Yii::$app->session->setFlash("success","修改成功");
                //跳转回列表首页
                return $this->redirect(["article/index"]);
            }else{
                var_dump($model->getErrors());
            }

        }
        //将文章详情的值赋值给article

        //将文章分类的名和id传入进去
        $all=ArticleCategory::find()->all();

        //定义一个数组保存id和name的对应关系
        $arr=[];
        foreach ($all as $row){
            $arr[$row->id]=$row->name;
        }
        //将详情内容赋值给文章
        $model->content=$article->content;

        //加载显示页面
        return $this->render("edit",["model"=>$model,"arr"=>$arr]);

    }

    /**
     * @return array删除
     *
     */
    public function actionDelete($id){
        //根据id获取文章记录
        $model=Article::findOne(["id"=>$id]);
        //跟新数据
        if ($model::updateAll(["status"=>-1],["id"=>$id])||$model->status==-1){
            return Json::encode(["id"=>1]);
        };

    }

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