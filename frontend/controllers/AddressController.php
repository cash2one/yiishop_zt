<?php
namespace frontend\controllers;


use frontend\models\Order;
use phpDocumentor\Reflection\Types\Object_;
use yii\web\Controller;
use yii\web\Request;

class AddressController extends Controller{
    public $enableCsrfValidation = false;
    //显示订单地址列表
    public function actionIndex(){
        $rows=[];
       //根据username获取订单记录
        if (!\Yii::$app->user->isGuest){
            //获取登录人的姓名
            $username=\Yii::$app->user->identity->username;
            $rows=Order::find()->where(["username"=>$username])->all();
        }


       //显示登录页面
        return $this->render("index",["rows"=>$rows]);
    }

    /**
     * 添加数据
     */
    public function actionAdd(){
        //接收post提交的数据
            $username=\Yii::$app->request->get("username");
            $cmbProvince=\Yii::$app->request->get("cmbProvince");
            $cmbCity=\Yii::$app->request->get("cmbCity");
            $cmbArea=\Yii::$app->request->get("cmbArea");
            $address=\Yii::$app->request->get("address");
           $phone=\Yii::$app->request->get("phone");
           $status=\Yii::$app->request->get("status");
           $id=\Yii::$app->request->get("id");

           //实列化Request
        $request=new Request();
        //实列化表单模型
        if ($id){
            $model=Order::findOne(["id"=>$id]);
        }else{
            $model=new Order();
        }
        if ($request->isGet){
            $model->load($request->get(),'');
            if (!isset($status)){
                $model->status=0;
            }
            if ($model->validate()){
                $model->save();
                return \yii\helpers\Json::encode($model);
            }

        }



    }

    /**
     * 删除数据
     */
    public function actionDelete(){
        //获取id
        $id=\Yii::$app->request->get("id");
        //根据id查询记录
        $model=Order::findOne(["id"=>$id]);
        //删除数据
        $model->delete();

    }

    //获取原来的记录用作回显
    public function actionEdit(){
      $id=\Yii::$app->request->get("id");
      //根据id获取相应的记录
        $model=Order::findOne(["id"=>$id]);

        return \yii\helpers\Json::encode($model);


    }

    //修改默认地址状态
    public function actionUpdate(){
        $id=\Yii::$app->request->get("id");
        //根据id获取相应记录
        $model=Order::findOne(["id"=>$id]);
        //跟新
        $model::updateAll(["status"=>0]);
        $model::updateAll(["status"=>1],["id"=>$id]);

        return \yii\helpers\Json::encode($model);
    }


}