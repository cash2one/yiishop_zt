<?php
/**
 * Created by PhpStorm.
 * User: KOBE
 * Date: 2018/2/6
 * Time: 13:07
 */

namespace frontend\controllers;


use frontend\models\ImageForm;
use yii\web\Controller;
use yii\web\Request;

class CeshiController extends Controller
{
    public function actionImage()
    {
        //实列化requset
        $request = new Request();
        //判断是否是post提交
        $model = new ImageForm();
        if ($request->isPost) {
            //加载数据
            $model->load($request->post());
            //处理图片
            $model->imgFile = \yii\web\UploadedFile::getInstance($model, 'imgFile');
            if ($model->validate()) {
                $file = '/upload/' . uniqid() . '.' . $model->imgFile->extension;
                //保存图片
                $model->imgFile->saveAs(\Yii::getAlias('@webroot') . $file);
                echo $file;


            }


        }

        return $this->render('index',['model'=>$model]);
    }

}