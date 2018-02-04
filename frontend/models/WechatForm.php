<?php
namespace frontend\models;

use yii\base\Model;

class WechatForm extends Model{
    public $username;
    public $password;
    //自定义验证规则
    public function rules()
    {
        return [
            [["username","password"],"required","message"=>"必须填写"],
        ];
    }


}