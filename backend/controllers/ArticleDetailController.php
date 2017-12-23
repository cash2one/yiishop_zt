<?php
namespace backend\controllers;

use backend\models\Article;
use backend\models\ArticleDetail;
use yii\web\Controller;
use yii\web\Request;

class ArticleDetailController extends Controller{
    //显示详情列表首页
    public function actionIndex(){
        $row=ArticleDetail::findOne(["article_id"=>5]);

        echo $row->content;
        exit;

        //获取detail表中所有数据
        $model=ArticleDetail::find()->all();
        //显示详情表
        return $this->render("index",["model"=>$model]);

    }
    /**
     * 添加页面
     */
    public function actionAdd(){
        //实列化Request
        $request=new Request();
        //实列化活动记录
        $model=new ArticleDetail();
        if ($request->isPost){



        }

        //显示添加页面
        $article=Article::find()->all();
        //获取id和name的对应关系
        $data=[];
        foreach ($article as $val){
            $data[$val->id]=$val->name;
        }
        //将数据传入到添加页面
        return $this->render("add",["model"=>$model]);

    }


}