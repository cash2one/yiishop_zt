<?php
namespace backend\controllers;



use backend\models\EditForm;
use backend\models\QjForm;
use yii\rbac\Permission;
use yii\web\Controller;
use yii\web\Request;

class RbacController extends Controller{
    //显示现权限
    public function actionIndex(){
     //获取表中的数据
        //实列化权限组件
        $authManager=\Yii::$app->authManager;
        $arr=$authManager->getPermissions();
        $rows=[];
        foreach ($arr as $val){
            $rows[]=$val;
        }


        //将数据传入到显示列表
        return $this->render("show",["rows"=>$rows]);

    }

    //添加权限
    public function actionAdd(){
        //实列化Request
        $request=new Request();
        //实列化表单组件
        $model=new QjForm();
        //实列化权限组件
        $authMamager=\Yii::$app->authManager;
        //制定场景
        $model->scenario=QjForm::SCENARIO_ADD_PERMISSION;
       //判断是否是post提交
        if ($request->isPost){
         //加载数据
            $model->load($request->post());
            //验证
            if ($model->validate()){
                //创建一个权限
                $permission=new Permission();
                //赋值
                $permission->name=$model->name;
                $permission->description=$model->description;
                //添加
                $authMamager->add($permission);
                //显示添加成功信息
                \Yii::$app->session->setFlash("success","添加成功");
                //跳转回权限-角色首页
                return $this->redirect(["rbac/index"]);

            }


        }
        //显示添加页面
        return $this->render("add",["model"=>$model]);
    }



    //修改权限
    public function actionEdit($name){
        //实列化Request
        $request=new Request();
        //实列化authManager
        $authManager=\Yii::$app->authManager;

         //创建一个（添加用户）权限
        $permission = new Permission();
        //先获取(从数据中查出)该权限
        $permission = $authManager->getPermission($name);
        //实列化表单模型
        $model=new QjForm();
        //指定场景
        $model->scenario=QjForm::SCENARIO_EDIT_PERMISSION;
        //判断是不是post提交
        if ($request->isPost){
            //加载数据
            $model->load($request->post());
            //验证数据
            if ($model->validate()){
                //修改
                $permission->name=$model->name;
                $permission->description = $model->description;
                //保存
                $authManager->update($name,$permission);
                //提示修改结果信息
                \Yii::$app->session->setFlash("success","修改成功");
                //跳转回首页
                return $this->redirect(["rbac/index"]);

            }


        }
        //给表单中的属性赋值
        $model->name=$permission->name;
        $model->description=$permission->description;
        //显示修改页面
        return $this->render("edit",["model"=>$model]);


    }
/**
 * 删除数据
 */
     public function actionDelete(){
         //获取参数
         $name=$_GET["name"];
         //实列化权限组件
         $authManager=\Yii::$app->authManager;
         $permission = $authManager->getPermission($name);
         //删除
         $authManager->remove($permission);
     }





}