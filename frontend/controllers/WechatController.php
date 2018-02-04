<?php
namespace frontend\controllers;

use backend\models\Article;
use EasyWeChat\Message\News;
use frontend\models\Goods;
use frontend\models\User;
use frontend\models\WechatForm;
use yii\helpers\Url;
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
                    }else{
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
                        }
                    }
                ;
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

    //发起授权
    public function actionTest(){
        //授权
        $app = new Application(\Yii::$app->params['wechat']);
        $menu=$app->menu;
        $response = $app->oauth->scopes(['snsapi_base'])
            ->redirect();
        //发送获取用户信息
        $response->send();
    }
    //获取已授权的用户信息
    public function actionCallback(){
        $app = new Application(\Yii::$app->params['wechat']);
        $menu=$app->menu;
        $user = $app->oauth->user();
        //将用户的openid保存再session中
        \Yii::$app->session->set("openid",$user->getId());
        //跳转到登录页面
        return $this->redirect(["wechat/login"]);


        //此时将获取到的openid保存到
        // $user 可以用的方法:
        // $user->getId();  // 对应微信的 OPENID
        // $user->getNickname(); // 对应微信的 nickname
        // $user->getName(); // 对应微信的 nickname
        // $user->getAvatar(); // 头像网址
        // $user->getOriginal(); // 原始API返回的结果
        // $user->getToken(); // access_token， 比如用于地址共享时使用
    }

    //我的订单
    public function actionOrder(){
        //如果登录就让用户查看订单，未登录就引导用户登录
        if (\Yii::$app->user->isGuest){
            //记住用户访问地路由
            Url::remember(["wechat/order"],"redirect");
            return $this->redirect(["wechat/login"]);

        }

    }

     //用户登录
    public function actionLogin(){
        //判断是否已经有openid
        if (\Yii::$app->session->has("openid")){
           //获取openid
            $openid=\Yii::$app->session->get("openid");
        }else{
//授权
            $app = new Application(\Yii::$app->params['wechat']);
            $menu=$app->menu;
            $response = $app->oauth->scopes(['snsapi_base'])
                ->redirect();
            //发送获取用户信息
            $response->send();
        }
        //看用户openid是否绑定，如果绑定了就自动登录，未绑定，就让用户登录
        //根据openid获取到相应的用户
        $member=User::findOne(["openid"=>$openid]);
        //如果存在证明已经绑定了openid
        if ($member){
            //自动登录，保存用户信息
            \Yii::$app->user->login($member);
            //获取用户登录之前访问的页面
            $url=Url::previous("redirect");
            //跳转
            return $this->redirect([$url]);

        }else{
            //实列化wechat登录表单模型
            $model=new WechatForm();
            //实列化用户表
            $user=new User();
            //根据openid查不到该用户，说明没有绑定，就让用户登录，绑定
            if (\Yii::$app->request->isPost){
               //加载数据
                $model->load(\Yii::$app->request->post());//因为这是yii自带的表单所以不用填第二个参数。不是就填“”；
                //进行验证，验证成功将openid添加到字段中
                //验证过程要自己写
                $user->openid=$openid;
                $user->save(false);
                //跳转到登录之前访问的页面
                //获取用户登录之前访问的页面
                $url=Url::previous("redirect");
                //跳转
                return $this->redirect([$url]);

            }
           //显示添加页面
            $this->render("login",["model"=>$model]);

        }




    }

    //消息推送
    public function actionMsg(){
        //设置消息模板
        $app = new Application(\Yii::$app->params['wechat']);
        $notice=$app->notice;
        /**
         * 短信模板
         * $messageId = $notice->to($userOpenId)->uses($templateId)->andUrl($url)->data($data)->send();
         * $userOpenId用户的openid
         * $templateId模板id
         * $url可以点击的链接
         * $data发送的内容
         */
        //订单下单成功，给用户微信发送下单成功信息
        $id=\Yii::$app->user->identity->id;
        $user=User::findOne(["id"=>$id]);

        //所以
        $username=$user->username;
        $userOpenId=$user->openid;
        $templateId='aIH0CovoT4mrixMtonuGfKlERLauZiBoNUyU3axjTiM';
        $url=Url::to(["wechat/order"],1);
        $data=$username."先生，您已成功下单，请在2个小时内支付订单，否则我们将会取消您的订单";
        $messageId = $notice->to($userOpenId)->uses($templateId)->andUrl($url)->data($data)->send();
        //打印发送信息的结果
        var_dump($messageId);

    }


}