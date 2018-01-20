<?php
namespace frontend\controllers;


use frontend\models\Order;
use yii\web\Controller;
use yii\web\Request;
use yii\web\Response;

class ApiController extends Controller{
    //关闭跨站攻击
    public $enableCsrfValidation = false;
    public function init()
    {
        parent::init();
        //设置响应的数据格式
        \Yii::$app->response->format=Response::FORMAT_JSON;
    }

    //收获地址添加
    public function actionAddressAdd(){
         $result=[
             'error_code'=>1,
             'msg'=>'',
             'data'=>[],
         ];
         //判断是否是post提交
        $request=new Request();

        if ($request->isPost){
            $model=new Order();
            //接受数据
            $model->username=\Yii::$app->request->post("username");
            $model->cmbProvince=\Yii::$app->request->post("cmbProvince");
            $model->cmbCity=\Yii::$app->request->post("cmbCity");
            $model->cmbArea=\Yii::$app->request->post("cmbArea");
            $model->address=\Yii::$app->request->post("address");
            $model->phone=\Yii::$app->request->post("phone");
            $model->status=\Yii::$app->request->post("status");
            //保存数据
            if ($model->validate()){
                //保存数据
                $model->save();
                //修改返回信息
                $result["error_code"]=0;
                $result["msg"]="收货地址添加成功";
                //返回响应信息
                return $result;

            }else{
                $result["msg"]=$model->getErrors();

            }
        }
      return $result;

    }

    //修改收货地址
    public function actionAddressEdit(){
        $result=[
            'error_code'=>1,
            'msg'=>'',
            'data'=>[],
        ];
        //判断是否是post提交
        $request=new Request();

        if ($request->isPost){
            //获取提交的id
            $id=\Yii::$app->request->post("id");
            $model=Order::findOne(["id"=>$id]);
            //接受数据
            $model->username=\Yii::$app->request->post("username");
            $model->cmbProvince=\Yii::$app->request->post("cmbProvince");
            $model->cmbCity=\Yii::$app->request->post("cmbCity");
            $model->cmbArea=\Yii::$app->request->post("cmbArea");
            $model->address=\Yii::$app->request->post("address");
            $model->phone=\Yii::$app->request->post("phone");
            $model->status=\Yii::$app->request->post("status");
            //保存数据
            if ($model->validate()){
                //保存数据
                $model->save();
                //修改返回信息
                $result["error_code"]=0;
                $result["msg"]="收货地址修改成功";
                //返回响应信息
                return $result;

            }else{
                $result["msg"]=$model->getErrors();

            }
        }
        return $result;


    }

    //删除收货地址
    public function actionAddressDelete(){
        //设置响应数据
        $result=[
            'msg'=>'',
        ];
        //获取需要删除记录的id
        $id=\Yii::$app->request->get("id");
        //根据id获取相应的记录
        $model=Order::findOne(["id"=>$id]);
        $model->delete();
        //修改响应信息
         $result["msg"]="删除成功";
      //返回响应结果
        return $result;

    }




}