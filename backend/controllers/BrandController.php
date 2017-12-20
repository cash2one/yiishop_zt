<?php
namespace backend\controllers;

use backend\models\Brand;
use yii\web\Controller;
use yii\web\Request;
use yii\web\UploadedFile;

class BrandController extends Controller{
     //显示列表首页
    public function actionIndex(){
        //获取表中所有数据
        $rows=Brand::find()->all();

        //显示列表
        return $this->render("index",["rows"=>$rows]);

    }

    /**
     * 添加数据
     */

    public function actionAdd(){
        //实列话Request 类
        $request=new Request();
        //实列化Brand
        $model=new Brand();
        //判断是否是post提交
        if ($request->isPost){
          //加载数据
            $model->load($request->post());
            //处理图片
            $model->imgFile=UploadedFile::getInstance($model,"imgFile");
            if ($model->validate()){
                //保存图片位置
                $file = '/upload/' . uniqid() . '.' . $model->imgFile->extension;
                if ($model->imgFile->saveAs(\Yii::getAlias('@webroot') . $file)) {
                    //文件上传成功
                    $model->logo = $file;
                }
                //保存数据
                $model->save(false);
                //提示成功信息
                \Yii::$app->session->setFlash("success","添加成功");
                //跳转到首页
                return $this->redirect(["brand/index"]);

            }else{
                //打印错误信息
                var_dump($model->getErrors());
            }


        }

        //显示添加页面
        return $this->render("add",["model"=>$model]);

    }

    /**
     * 修改
     */

    public function actionEdit($id){
        //根据id获取相应的记录
        $model=Brand::findOne(["id"=>$id]);
        //实列化Request类
        $request=new Request();
        //判断是否是post提交
        if ($request->isPost){
            //加载数据
            $model->load($request->post());
            //处理图片

                $model->imgFile=UploadedFile::getInstance($model,"imgFile");

            if ($model->validate()){

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
                \Yii::$app->session->setFlash("success","修改成功");
                //跳转到首页
                return $this->redirect(["brand/index"]);

            }else{
                //打印错误信息
                var_dump($model->getErrors());
            }

        };
        //展示修改页面
        return $this->render("edit",["model"=>$model]);


    }

    /**
     * 删除
     */
    public function actionDelete(){
        //接收id
        $id=$_GET["id"];
        //根据id获取相应的记录
        echo $id;
        $model=Brand::findOne(["id"=>$id]);

        //修改该记录
        $model::updateAll(["status"=>-1],["id"=>$id]);

    }

}