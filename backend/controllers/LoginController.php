<?php
namespace backend\controllers;


use backend\models\LoginForm;
use frontend\models\User;
use yii\captcha\CaptchaAction;
use yii\web\Controller;
use yii\web\Request;

class LoginController extends Controller{

    //验证登录
    public function actionIndex(){
        //实列化Request类
        $request=new Request();
        //实列化表单模型
        $model=new LoginForm();
        //判断是否是post提交
        if ($request->isPost){
            //加载数据
            $model->load($request->post());
            //判断是否登录成功
            if ($model->login($model->remember)){

               //登录成功
                \Yii::$app->session->setFlash("success","登录成功");
                //跳转到用户中心
                return $this->redirect(["user/index"]);

            }

        }
        //显示添加页面
        return $this->render("index",["model"=>$model]);


    }

    /**
     * 注销
     */

        //注销
        public function actionLogout(){
            \Yii::$app->user->logout();
            echo '已注销';
            return $this->redirect(["login/index"]);
        }


 /**
  * 添加用户
  */

   /*  public function actionAddUser(){
         //实列化Request
         $request=new Request();
         //实列化用户
         $model=new \backend\models\User();
         //判断是否post提交
         if ($request->isPost){
           //加载数据
             $model->load($request->post());
             //验证
             if ($model->validate()){
                 //将密码加密保存到数据库
                 $password=$model->password_hash;
                 $model->password_hash=\Yii::$app->security->generatePasswordHash($password);
                 //保存
                 $model->save();
             }

         }
         //显示添加页面
         return $this->render("add",["model"=>$model]);


     }*/
    //验证码
    public function actions(){
        return [
            'captcha'=>[
                'class'=>CaptchaAction::className(),
                //验证码设置
                'height'=>34,
                'minLength'=>3,
                'maxLength'=>4,
                'padding'=>0
            ]
        ];
    }

}