<?php
namespace frontend\controllers;

use backend\models\Goods;
use backend\models\User;
use frontend\models\Cart;
use yii\web\Controller;
use yii\web\Cookie;
use yii\web\Request;

class CartController extends Controller{
    public $enableCsrfValidation = false;

    //接收添加的商品,添加到购物车
    public function actionAddToCart($goods_id,$amount){

        //未登录时将购物车信息保存在Cookie中
        if (\Yii::$app->user->isGuest){
        //先判断cookie中是否有值
            $cookie=\Yii::$app->request->cookies;
            if ($cookie->has("cart")){
                $value=$cookie->getValue("cart");
                $cart=unserialize($value);
            }else{
                $cart=[];
            }
            //添加数据召cookie中
            $cart[$goods_id]=$amount;
            $cookies=\Yii::$app->response->cookies;
            $cookie=new Cookie();
            $cookie->name="cart";
            $cookie->value=serialize($cart);
            $cookies->add($cookie);
        }else{
            //当用户登陆时,将购物车信息保存到数据表
            //获取用户登录的id
            $member_id=\Yii::$app->user->identity->id;
            //判断cookie中是否有数据
            //先判断cookie中是否有值
            $cookie=\Yii::$app->request->cookies;
   /*         if ($cookie->has("cart")){
                $value=$cookie->getValue("cart");
                $cart=unserialize($value);
                if (isset($cart[$goods_id])){
                    $amount+=$cart[$goods_id];
                }

            }*/

       //判断数据库中此用户是否购买了此商品
            $model=Cart::find()->where(["member_id"=>$member_id])->andWhere(["goods_id"=>$goods_id])->one();
            if ($model){
               /* if ($cookie->has("cart")){
                    $value=$cookie->getValue("cart");
                    $cart=unserialize($value);
                    if (isset($cart[$goods_id])){
                        $amount+=$cart[$goods_id];
                    }

                }*/
                $model::updateAllCounters(["amount"=>$amount],["id"=>$model->id]);

            }else{
                //实列化cart组件
                $model=new Cart();
                /*if ($cookie->has("cart")){
                    $value=$cookie->getValue("cart");
                    $cart=unserialize($value);
                    if (isset($cart[$goods_id])){
                        $amount+=$cart[$goods_id];
                        unset($cart[$goods_id]);
                    }

                }*/
                //赋值
                $model->amount=$amount;
                $model->goods_id=$goods_id;
                $model->member_id=$member_id;
                if ($model->validate()){
                    //保存数据
                    $model->save();
                }
                //再将cookie中的数据添加到
          /*      if ($cookie->has("cart")){
                    $value=$cookie->getValue("cart");
                    $cart=unserialize($value);
                  foreach ($cart as $key=>$value){
                      //实列化cart组件
                      $model=new Cart();
                      //赋值
                      $model->amount=$value;
                      $model->goods_id=$key;
                      $model->member_id=$member_id;
                      if ($model->validate()){
                          //保存数据
                          $model->save();
                      }
                  }

                }*/


            }


        }

        //跳转到购物车页面
        return $this->redirect(["cart/cart"]);

    }

    //展示购物车页面
    public function actionCart(){
        //当用户未登录时将,获取cookie中的信息
        if (\Yii::$app->user->isGuest){
            $ids=[];
            $cookie=\Yii::$app->request->cookies;
            $value=$cookie->getValue("cart");
            $cart=unserialize($value);
            if ( $cart){
                //获取该cookie中的商品id
                $ids=array_keys($cart);

            }

        }else{
              //获取用户id
            $member_id=\Yii::$app->user->identity->id;
            //先判断cookie中是否有值
            $cookie=\Yii::$app->request->cookies;
            if ($cookie->has("cart")){
                $value=$cookie->getValue("cart");
                $cart=unserialize($value);
              //判断是否已经添加了该商品
                foreach ($cart as $key=>$val){
                    $goods=Cart::find()->where(["goods_id"=>$key])->andWhere(["member_id"=>$member_id])->one();
                    //如果用户存在
                    if ($goods){
                        $goods::updateAll(["amount"=>$goods->amount+$val],["id"=>$goods->id]);
                    }else{
                        //实列化cart组件
                        $model=new Cart();
                        //赋值
                        $model->amount=$val;
                        $model->goods_id=$key;
                        $model->member_id=$member_id;
                        if ($model->validate()){
                            //保存数据
                            $model->save();
                        }
                    }

                }


            }
            //当用户登陆时,获取数据表的信息

            //根据member_id获取用户数据库中的购物车数据
            $rows=Cart::find()->where(["member_id"=>$member_id])->all();
            //获取所有商品的id
            $ids=[];
            $cart=[];
            foreach ($rows as $row){
                $ids[]=$row->goods_id;
                $cart[$row->goods_id]=$row->amount;
            }

        }
        //根据id获取相应的数据
        $goods=Goods::find()->where(["in","id",$ids])->all();
        //将数据显示到购物车页面
        return $this->render("flow1",["rows"=>$goods,"cart"=>$cart]);

    }

    //ajax修改数量
    public function actionAmount(){
        $goods_id=\Yii::$app->request->get("id");
        $amount=\Yii::$app->request->get("amount");
        //判断用户是否登录
        if (\Yii::$app->user->isGuest){
            //先判断cookie中是否有值
            $cookie=\Yii::$app->request->cookies;
            if ($cookie->has("cart")){
                $value=$cookie->getValue("cart");
                $cart=unserialize($value);
            }else{
                $cart=[];
            }
            //添加数据召cookie中
            $cart[$goods_id]=$amount;
            $cookies=\Yii::$app->response->cookies;
            $cookie=new Cookie();
            $cookie->name="cart";
            $cookie->value=serialize($cart);
            $cookies->add($cookie);
        }else{
            //获取用户id
            $id=\Yii::$app->user->identity->id;
            //获取数据库的数据
            $model=Cart::find()->where(["goods_id"=>$goods_id])->andWhere(["member_id"=>$id])->one();
            //跟新数据
            $model::updateAll(["amount"=>$amount],["id"=>$model->id]);
        }


    }

    //删除购物车数据
    public function actionDelete(){
        //获取goods_id
        $goods_id=\Yii::$app->request->get("id");
        //判断用户是否登录
        if(\Yii::$app->user->isGuest){
            //先判断cookie中是否有值
            $cookie=\Yii::$app->request->cookies;
            if ($cookie->has("cart")){
                $value=$cookie->getValue("cart");
                $cart=unserialize($value);
            }else{
                $cart=[];
            }
            //添加数据召cookie中
            unset($cart[$goods_id]);
            $cookies=\Yii::$app->response->cookies;
            $cookie=new Cookie();
            $cookie->name="cart";
            $cookie->value=serialize($cart);
            $cookies->add($cookie);

        }else{
            //获取用户id
            $id=\Yii::$app->user->identity->id;
            //根据goods_id和member_id删除该记录
            //获取数据库的数据
            $model=Cart::find()->where(["goods_id"=>$goods_id])->andWhere(["member_id"=>$id])->one();
            //删除该数据
            $model->delete();
        }




    }

}