<?php
namespace frontend\controllers;


use backend\models\Goods;
use frontend\models\Cart;
use frontend\models\Ddan;
use frontend\models\DdanGoods;
use frontend\models\Order;
use yii\web\Controller;
use yii\web\Request;

class DdanController extends Controller{
    public $enableCsrfValidation = false;
    //显示订单页面
    public function actionIndex(){

        if (\Yii::$app->user->isGuest){

            return $this->redirect(["login/index"]);
        }
        //获取用户id
        $member_id=\Yii::$app->user->identity->id;
        $model=new Ddan();
        //根据member_id获取用户数据库中的购物车数据
        $rows=Cart::find()->where(["member_id"=>$member_id])->all();
        //处理提交过来的数据
        $request=new Request();
        if ($request->isPost){
            $model->load($request->post(),"");;

            //加载数据
           //先获取收货地址
            $address=Order::findOne(["id"=>$model->address_id]);
            $model->member_id=$member_id;
            //给地址赋值
            $model->name=$address->username;
            $model->province=$address->cmbProvince;
            $model->city=$address->cmbCity;
            $model->area=$address->cmbArea;
            $model->address=$address->address;
            $model->tel=$address->phone;
            //给配送方式赋值
            $model->delivery_name=Ddan::$diveries[$model->delivery_id][0];
            $model->delivery_price=Ddan::$diveries[$model->delivery_id][1];
            //给支付方式赋值
            $model->payment_name=Ddan::$pays[$model->payment_id][0];
            $model->total=0;
            $model->status=1;
            $model->trade_no=1565165;
            $model->create_time=time();
            //验证是否符合要求
            if ($model->validate()) {
                $model->save();
            }
            //实列化订单商品详情

                foreach ($rows as $row){
                    $order_goods=new DdanGoods();
                    $goods=Goods::findOne(["id"=>$row->goods_id]);
                    $order_goods->order_id=$model->id;
                    $order_goods->goods_id=$row->goods_id;
                    $order_goods->goods_name=$goods->name;
                    $order_goods->logo=$goods->logo;
                    $order_goods->price=$goods->shop_price;
                    $order_goods->amount=$row->amount;
                    $order_goods->total=$goods->shop_price*$row->amount;
                    if ($order_goods->validate()){
                        $order_goods->save();
                    }
                    $model->total+=$order_goods->total;
                }
               //统计总金额
                $model->total+=$model->delivery_price;
                $model->save();



            //添加成功跳转到提示才成功页面
            return $this->redirect(["ddan/msg"]);

        }

        //获取所有商品的id
        $total="";
        $ids=[];
        $cart=[];
        foreach ($rows as $row){
            $ids[]=$row->goods_id;
            $cart[$row->goods_id]=$row->amount;
            ++$total;
        }

       //根据id获取相应的数据
    $goods=Goods::find()->where(["in","id",$ids])->all();

        //显示订单页面
        return $this->render("flow2",["goods"=>$goods,"cart"=>$cart,"total"=>$total]);
    }

    //显示订单生成成功页面
    public function actionMsg(){

        return $this->render("flow3");
    }

    //显示订单状态
    public function actionStatus(){

        return $this->render("order");
    }


}