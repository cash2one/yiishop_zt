<?php
namespace backend\controllers;


use backend\filters\RbacFilter;
use backend\models\EditForm;
use backend\models\QjForm;
use yii\rbac\Role;
use yii\web\Controller;
use yii\web\Request;

class RoleController extends Controller{
    //显示列表
    public function actionIndex(){
        //获取表中的数据
        //实列化权限组件
        $authManager=\Yii::$app->authManager;
        $arr=$authManager->getRoles();
        $rows=[];
        foreach ($arr as $val){
            $rows[]=$val;
        }
        //将数据传入到显示列表
        return $this->render("index",["rows"=>$rows]);

    }

    //添加角色
    public function actionAdd(){
         //实列话Request
        $request=new Request();
        //实列化authManager
        $authManager=\Yii::$app->authManager;
        //实列化表单组件
        $model=new QjForm();
        //制定场景
        $model->scenario=QjForm::SCENARIO_ADD_PERMISSION;
        //创建一个角色
        $role=new Role();
        //判断是否是post提交
        if ($request->isPost) {
            //加载数据
            $model->load($request->post());
            //验证数据
            if ($model->validate()) {

                $rows = $model->relation;
                //添加角色
                $role->name = $model->name;
                $role->description = $model->description;
                //保存到数据库
                $authManager->add($role);
                //2.3 给角色赋予权限
                if ($rows){
                    foreach ($rows as $val) {
                        $permission = $authManager->getPermission($val);
                        $authManager->addChild($role, $permission);//给库管关联user/add权限
                    }
                }

                //提示添加信息
                \Yii::$app->session->setFlash("success", "添加成功");
                //跳转到首页
                return $this->redirect(["role/index"]);
            }
            //获取权限的对应关系
        }

      //获取权限的数据
        $arr=$authManager->getPermissions();
        $rows=[];
        foreach ($arr as $val){
            $rows[]=$val;
        }
        //将权限的名称和描述对应取出来
        $permission=[];
        foreach ($rows as $val){
          $permission[$val->name]=$val->description;
        }
     //显示添加页面
        return $this->render("add",["model"=>$model,"data"=>$permission]);
    }

   //修改角色
    public function actionEdit($name){
        //实列话Request
        $request=new Request();
        //实列化authManager
        $authManager=\Yii::$app->authManager;
        //获取修改的角色
        $role=$authManager->getRole($name);
        //获取该角色拥有的权限
        $permission=$authManager->getPermissionsByRole($name);
        //用一个数组保存
        $pms=[];
        foreach ($permission as $key=>$val){
            $pms[]=$key;
        }
        //实列化表单组件
        $model=new QjForm();
        //指定场景
        $model->scenario=QjForm::SCENARIO_EDIT_PERMISSION;
        //判断是否是post提交
        if ($request->isPost){
            //加载数据
            $model->load($request->post());
            //验证数据
            if ($model->validate()){
                $rows=$model->relation;
                //赋值
                $role->name = $model->name;
                $role->description = $model->description;
                //跟新数据
                $authManager->update($name,$role);
                //先清除角色之前的所有权限
                $authManager->removeChildren($role);
                //2.3 给角色赋予权限
                if ($rows){
                    foreach ($rows as $val) {
                        $permission = $authManager->getPermission($val);
                        $authManager->addChild($role, $permission);//给库管关联user/add权限
                    }
                }

               //提示修改的结果
                \Yii::$app->session->setFlash("success","修改成功");
                //跳转回首页
                return $this->redirect(["role/index"]);


            }


        }
      //给表单模型对象赋值
        $model->name=$role->name;
        $model->description=$role->description;
        $model->relation=$pms;

        //获取权限的数据
        $arr=$authManager->getPermissions();
        $rows=[];
        foreach ($arr as $val){
            $rows[]=$val;
        }
        //将权限的名称和描述对应取出来
        $permissions=[];
        foreach ($rows as $val){
            $permissions[$val->name]=$val->description;
        }
        //显示修改页面
        return $this->render("edit",["model"=>$model,"data"=>$permissions]);

    }

    //删除角色
    public function actionDelete(){
        //获取参数
        $name=$_GET["name"];
        //实列化权限组件
        $authManager=\Yii::$app->authManager;
        $role = $authManager->getRole($name);
        //解除所有权限
        $authManager->removeChildren($role);
        //删除
        $authManager->remove($role);

    }
    //配置过滤器
/*    public function behaviors()
    {
        return [
            "rbac"=>[
                'class'=>RbacFilter::className(),
                'except'=>[],//除了这些操作，其他操作生效
            ]

        ];
    }*/

}