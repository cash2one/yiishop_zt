<?php
namespace frontend\models;

use yii\db\ActiveRecord;

class Order extends ActiveRecord{

    //验证规则
    public function rules()
    {
        return [
            [["username","cmbProvince","cmbCity","cmbArea","address","phone"],"required","message"=>"必须填写"],
            ["status","safe"],
            //[["phone"],match,"pattern"=>"/^1[358]\d{9}$/"],
            ['phone','match','pattern'=>'/^1[358]\d{9}$/','message'=>'手机号不正确'],
        ];
    }


}