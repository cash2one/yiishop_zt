<?php
namespace backend\controllers;

use backend\models\User;
use yii\web\Controller;
use yii\web\Request;

class UserController extends Controller{
    //显示用户
    public function actionIndex(){
        //获取用户表的所有数据
        $rows=User::find()->all();
        //显示列表页面
        return $this->render("index",["rows"=>$rows]);


    }

    /**
     * 添加用户
     */

    public function actionAdd(){
        //实列化Request
        $request=new Request();
        //实列化用户
        $model=new User();
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
                //提示添加成功信息
                \Yii::$app->session->setFlash("success","添加成功");
                //跳转到首页
                return $this->redirect(["user/index"]);
            }

        }
        //显示添加页面
        return $this->render("add",["model"=>$model]);


    }


    /**
     * 修改用户
     */


    public function actionEdit($id){
        //实列化Request
        $request=new Request();
        //根据id获取相应的记录
        $model=User::findOne(["id"=>$id]);
        //判断是不是post提交
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
                //提示添加成功信息
                \Yii::$app->session->setFlash("success","修改成功");
                //跳转到首页
                return $this->redirect(["user/index"]);
            }

        }
        //显示修改页面
        return $this->render("edit",["model"=>$model]);


    }

    /**
     * 删除
     */
    public function actionDelete($id){
         //根据id获取相应的记录
        $model=User::findOne(["id"=>$id]);
        //删除
        $model->delete();


    }


}