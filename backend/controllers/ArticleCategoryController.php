<?php
namespace backend\controllers;

use backend\models\ArticleCategory;
use yii\web\Controller;
use yii\web\Request;

class ArticleCategoryController extends Controller{
    //显示列表
    public function actionIndex(){
        //获取表单所有数据
        $rows=ArticleCategory::find()->all();
        //加载显示页面
        return $this->render("index",["rows"=>$rows]);
    }

  /**
   * 添加文章类型
   */

    public function actionAdd(){
        //实列化Request
        $request=new Request();
        //实列化文章Article_category
        $model=new ArticleCategory();
        //判断是否是post提交
        if ($request->isPost){
            //加载数据
            $model->load($request->post());
            //验证数据
            if ($model->validate()){
                //保存数据
                $model->save();
                //提示信息
                \Yii::$app->session->setFlash("success","添加成功");
                //跳转回首页
                return $this->redirect(["article-category/index"]);
            }
            else{
                var_dump($model->getErrors());
            }

        }

        //显示添加页面
        return $this->render("add",["model"=>$model]);

    }

    /**
     * 修改数据
     */

    public function actionEdit($id){
        //根据id获取相应的记录
        $model=ArticleCategory::findOne(["id"=>$id]);
        //实列化Request类
        $request=new Request();
        //判断是否是post提交
        if ($request->isPost){
            //加载数据
            $model->load($request->post());
            //验证数据
            if ($model->validate()){
                //保存数据
                $model->save();
                //提示信息
                \Yii::$app->session->setFlash("success","修改成功");
                //跳转回首页
                return $this->redirect(["article-category/index"]);
            }
            else{
                var_dump($model->getErrors());
            }

        }
        //显示修改页面
        return $this->render("edit",["model"=>$model]);

    }

    /**
     * 删除数据
     */
    public function actionDelete(){
        //接收id
        $id=$_GET["id"];
        //根据id获取相应的记录
      $model=ArticleCategory::findOne(["id"=>$id]);
      //跟新数据
        $model::updateAll(["status"=>-1],["id"=>$id]);


    }

}