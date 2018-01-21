<?php
namespace frontend\controllers;

use backend\models\Article;
use EasyWeChat\Message\News;
use frontend\models\Goods;
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
                    //在线商城
                    if ($message->Event=="CLICK"){
                        if ($message->EventKey=='zxhd'){
                            //返回五条文章信息给用户
                            $rows=Article::find()->all();
                            //循环八次
                            $data=[];
                            $num=1;
                            foreach ($rows as $row){
                                if ($num==5){
                                    break;
                                }
                                $news=new News([
                                    'title'       => $row->name,
                                ]);
                                $data[]=$news;
                                $num++;
                            }
                           return $data;

                        }
                    }
                   // return '收到事件消息';
                    break;
                case 'text':
                    //当输入最新商品
                    if ($message->Content=="最新商品"){
                        //获取最近添加的8个商品
                        $rows=Goods::find()->all();
                        //循环八次
                        $data=[];
                      $num=1;
                      foreach ($rows as $row){
                          if ($num==8){
                              break;
                          }
                          $news=new News([
                              'title'       => $row->name,
                             // 'url'         => $row->,
                              'image'       => $row->logo,
                          ]);
                          $data[]=$news;
                          $num++;

                      }
                       return $data;
                    }
                   // return $message->Content;
                    $open_id=$message->FromUserName;
                    $redis=new \Redis();
                    $redis->connect("127.0.0.1");
                   if($redis->exists("key_".$open_id)){
                       $arr=$redis->hGetAll("key_".$open_id);
                       //调用百度地图api
                  $url="http://api.map.baidu.com/place/v2/search?query={$message->Content}&location={$arr['x']},{$arr['y']}&radius=2000&output=json&ak=FQMHCPUH7t6WGNFNBMtlphIfNPPLEjr7&page_size=8&scope=2";
                   $json_str=file_get_contents($url);
                  $data=json_decode($json_str);
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
    //生成菜单,此方法需要每次手动去访问，才能生成
    public function actionAddMenu(){
        $app = new Application(\Yii::$app->params['wechat']);
        $menu=$app->menu;
        $buttons = [
            [
                //一级菜单
                "type" => "view",
                "name" => "在线商城",
                "url"  => "http://zt.eachone.top/"//跳转到商城首页
            ],
            [
                //一级菜单
                "type" => "click",
                "name" => "最新活动",
                "key"  => "zxhd"//获取五条文章信息返回给用户。
            ],

            [
                "name"       => "个人中心",//二级菜单的一级菜单
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "我的订单",  //以下都是二级菜单
                        "url"  => "http://zt.eachone.top/"
                    ],
                   /* [
                        "type" => "view",
                        "name" => "视频",
                        "url"  => "http://v.qq.com/"
                    ],
                    [
                        "type" => "click",
                        "name" => "赞一下我们",
                        "key" => "V1001_GOOD"
                    ],*/
                ],
            ],
        ];
        $menu->add($buttons);
        echo "设置成功";

    }
    //查询菜单
    public function actionGetMenu(){
        $app = new Application(\Yii::$app->params['wechat']);
        $menu=$app->menu;
        $menus = $menu->all();
        //打印生成的菜单
        var_dump($menus);

    }

}