<?php
namespace backend\controllers;


use backend\filters\RbacFilter;
use backend\models\Menu;
use yii\web\Controller;
use yii\web\Request;

class MenuController extends Controller{
    //显示页面
    public function actionIndex(){
        //实列化Menu活动记录
        $menus=Menu::find()->where(["parent_id"=>0])->all();

        //用个数组保存$arr
        $rows=[];
        //循环
        foreach ($menus as $v){
            $rows[]=$v;
           $menu=Menu::find()->where(["parent_id"=>$v->id])->all();
           foreach ($menu as $val){
               $rows[]=$val;
           }
        }

        //显示页面
        return $this->render("index",["rows"=>$rows]);


    }

    //添加菜单
    public function actionAdd(){
        //实列化Request
        $request=new Request();
        //实列化活动记录
        $model=new Menu();
        //判断是否是post提交
        if ($request->isPost){
           //加载数据
            $model->load($request->post());
            //验证数据
            if ($model->validate()){
                if ($model->parent_id!=0){
                    $model->menu=3;
                }
                //加载数据
                $model->save();
                //提示添加成功信息
                \Yii::$app->session->setFlash("success","添加成功");
                //跳转回首页
                return $this->redirect(["menu/index"]);
            }
        }
        //实列化权限组件
        $authManager=\Yii::$app->authManager;
        $arr=$authManager->getPermissions();
        //$rows存放描述权限miaoshu,$arr存放路由$arr
        $rows=[];
        //把顶级菜单加入到rows中
        $rows[]="顶级分类";
        //获取parent_id=0和1得记录
        $menus=Menu::find()->where(["parent_id"=>0])->all();
        //遍历
        foreach ($menus as $v){
            $rows[$v->id]=$v->name;
        }

        //设置路由
        foreach ($arr as $val){

            $arr[$val->name]=$val->name;
        }

       //显示添加页面

     return $this->render("add",["model"=>$model,"menu"=>$rows,"url"=>$arr]);

    }

    /**
     * 修改菜单
     */
    public function actionEdit(){



    }

    //配置过滤器
    public function behaviors()
    {
        return [
            "rbac"=>[
                'class'=>RbacFilter::className(),
                'except'=>[],//除了这些操作，其他操作生效
            ]

        ];
    }
}