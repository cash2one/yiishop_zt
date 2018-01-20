<?php
namespace frontend\controllers;

use yii\web\Controller;
use EasyWeChat\Foundation\Application;

class WechatController extends Controller{
    //关闭跨站攻击请求
    public $enableCsrfValidation=false;
    //这个方法负责和微信交互
    public function actionIndex(){


// ...
        $app = new Application(\Yii::$app->params['wechat']);

// 从项目实例中得到服务端应用实例。
        $server = $app->server;

        $server->setMessageHandler(function ($message) {
            // $message->FromUserName // 用户的 openid
            // $message->MsgType // 消息类型：event, text....
            return "您好！欢迎关注我!";
        });

        $response = $server->serve();

        $response->send(); // Laravel 里请使用：return $response;

    }

}