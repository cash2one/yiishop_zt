<?php
namespace frontend\models;

use yii\base\Model;

class LoginForm extends Model{
    public $username;
    public $password;
    public $remember;

    //验证规则
    public function rules()
    {
        return [
            [["username","password"],"required","message"=>"必须填写"],
            ['remember','safe'],
        ];
    }

    //验证登录信息
    public function login($rm=null){
        //验证账号密码
        $user = User::findOne(["username" => $this->username]);
        if ($user){
            //验证密码
            if (\Yii::$app->security->validatePassword($this->password, $user->password_hash)) {
                //存在就将用户信息保存到session中
                //记录用户最后登录的ip和登录时间
                $id=$user->id;
                $ip=$_SERVER["REMOTE_ADDR"];
                //跟新数据
                $user::updateAll(["last_login_ip"=>$ip,"last_login_time"=>time()],["id"=>$id]);
                //将用户信息保存到session,并且判断是否需要自动登录
                \Yii::$app->user->login($user,0);
                if($rm==1){
                    \Yii::$app->user->login($user,2600*24*7);
                }

                //如果用户点了记住我功能,将用户信息保存在cookie中

                return true;

            } else {
                //提示密码错误
                echo "密码错误";
            }
        }else{
            //提示用户名错误
           echo "用户名错误";
        }

        return false;
    }


}