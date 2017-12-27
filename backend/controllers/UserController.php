<?php
namespace backend\controllers;

use backend\models\EditForm;
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
        //实列化权限组件
        $authManager=\Yii::$app->authManager;
        $arr=$authManager->getRoles();
        $rows=[];
        foreach ($arr as $val){
            $rows[]=$val;
        }
        //取出角色name和description的关系
        $roles=[];
        foreach ($rows as $val){
            $roles[$val->name]=$val->description;
        }
        //判断是否post提交
        if ($request->isPost){
            //加载数据
            $model->load($request->post());

            //验证
            if ($model->validate()){
                //将密码加密保存到数据库
                $rows=$model->role;
                $password=$model->password_hash;
                $model->password_hash=\Yii::$app->security->generatePasswordHash($password);
                //给auth_key赋值随机数,用作自动登录
                $arr=["a","b","c",1,2,3,4,5];
                shuffle($arr);
                $str="";
                for($i=1;$i<=3;++$i){
                    $str.=$arr[$i];
                }
                $model->auth_key=$str;
                //保存
                $model->save();
                //获取用户得id
                $id=$model->id;
                //给用户赋予角色
                if ($rows){
                    foreach ($rows as $val) {
                        $role=$authManager->getRole($val);
                        $authManager->assign($role,$id);
                    }
                }


                //提示添加成功信息
                \Yii::$app->session->setFlash("success","添加成功");
                //跳转到首页
                return $this->redirect(["user/index"]);
            }

        }
        //显示添加页面
        return $this->render("add",["model"=>$model,"data"=>$roles]);


    }


    /**
     * 修改用户
     */


    public function actionEdit($id){
        //实列化Request
        $request=new Request();
        //根据id获取相应的记录
        $model=User::findOne(["id"=>$id]);
        //实列化权限组件
        $authManager=\Yii::$app->authManager;

        //获取用户得角色
        $roles=$authManager->getRolesByUser($id);
       //用数组保存角色的名称
        $role=[];
        foreach ($roles as $key=>$v){
            $role[]=$key;
        }
        //将用户的角色赋值给relation
        $model->role=$role;

        //判断是不是post提交
        if ($request->isPost){
            //加载数据
            $model->load($request->post());
            //验证
            if ($model->validate()){
                //保存用户的角色
                $rows=$model->role;
                //保存
                $model->save();
                //清除该用户的所有角色
                $authManager->revokeAll($id);
                //再给用户赋予角色
                if($rows){
                    foreach ($rows as $val) {
                        $role=$authManager->getRole($val);
                        $authManager->assign($role,$id);
                    }
                }
                //提示添加成功信息
                \Yii::$app->session->setFlash("success","修改成功");
                //跳转到首页
                return $this->redirect(["user/index"]);
            }

        }
        $arr=$authManager->getRoles();
        $rows=[];
        foreach ($arr as $val){
            $rows[]=$val;
        }
        //取出角色name和description的关系
        $roles=[];
        foreach ($rows as $val){
            $roles[$val->name]=$val->description;
        }
        //显示修改页面
        return $this->render("edit",["model"=>$model,"data"=>$roles]);


    }

    /**
     * 删除
     */
    public function actionDelete($id){
         //根据id获取相应的记录
        $model=User::findOne(["id"=>$id]);
        //删除该用户所有的角色
        //实列化权限组件
        $authManager=\Yii::$app->authManager;
        //清除该用户的所有角色
        $authManager->revokeAll($id);
        //删除
        $model->delete();


    }

    //测试登录页面
    public function actionShow(){
        if(\Yii::$app->user->isGuest){
            //如果用户未登陆，则提示请先登陆
            echo '未登录';

        }else{
            //如果用户已登陆，显示欢迎信息
            echo '已登陆';
            //打印登陆用户信息
            var_dump(\Yii::$app->user->identity);
        }
    }
     //修改密码
    public function actionUpdate(){
        //获取登录人的id
        $id=\Yii::$app->user->identity->id;
        //实列化Request
        $request=new Request();
        //根据id获取相应的记录
        $user=User::findOne(["id"=>$id]);
        //实列化EditForm
        $model=new EditForm();

        //判断是不是post提交
        if ($request->isPost){
            //加载数据
            $model->load($request->post());
            //验证
            if ($model->validate()){
                $user->password_hash=\Yii::$app->security->generatePasswordHash($model->re_password);
                //保存
               $user->save();
                //提示添加成功信息
                \Yii::$app->session->setFlash("success","修改成功");
                //跳转到首页
                return $this->redirect(["user/index"]);
            }

        }
        //显示修改页面
        return $this->render("update",["model"=>$model]);


    }

}