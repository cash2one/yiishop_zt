<?php
namespace frontend\controllers;

use EasyWeChat\Message\News;
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
            switch ($message->MsgType) {
                case 'event':
                    return '收到事件消息';
                    break;
                case 'text':
                   // return $message->Content;
                    $open_id=$message->FromUserName;
                    $redis=new \Redis();
                    $redis->connect("127.0.0.1");
                   if($redis->exists("key_".$open_id)){
                       $arr=$redis->hGetAll("key_".$open_id);
                       //调用百度地图api
                  $url="http://api.map.baidu.com/place/v2/search?query={$message->Content}&location={$arr['label']},{$arr['label']}&radius=2000&output=json&ak=FQMHCPUH7t6WGNFNBMtlphIfNPPLEjr7&page_size=8&scope=2";
                   $json_str=file_get_contents($url);
                  $data=json_decode($json_str);
                  return $data;
                  //设置恢复信息
                       //用一个数组来存放地理位置信息
                       $msg=[];
                       foreach ($data->results as $res){
                           $news=new News([
                               'title'       => $res->name,
                           'url'         => $res->detail_info->detail_url,
                          // 'image'       => $image,
                       ]);
                           $msg[]=$news;
                       }
                     //返回结果
                       return $msg;

                   }else{
                       return "请先输入位置信息";
                   } ;
                    break;
                case 'image':
                    return '收到图片消息';
                    break;
                case 'voice':
                    return '收到语音消息';
                    break;
                case 'video':
                    return '收到视频消息';
                    break;
                case 'location':
                    //保存坐标信息
                    $x=$message->Location_X;//维度
                    $y=$message->Location_Y;//经度
                    $open_id=$message->FromUserName;
                    $label=$message->Label;//位置信息
                    //开启redis
                    $redis=new \Redis();
                    $redis->connect("127.0.0.1");
                    $redis->hMset("key_".$open_id,[
                        'x'=>$x,
                        'y'=>$y,
                        'label'=>$label,
                    ]);
                    return '收到坐标消息';
                    break;
                case 'link':
                    return '收到链接消息';
                    break;
                // ... 其它消息
                default:
                    return '收到其它消息';
                    break;
            }

            // ...
        });

        $response = $server->serve();

        $response->send(); // Laravel 里请使用：return $response;

    }

}