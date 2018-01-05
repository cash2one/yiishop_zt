<?php
namespace frontend\models;

use yii\db\ActiveRecord;

class Cart extends ActiveRecord{


    //设定验证规则
    public function rules()
    {
        return [
            [["goods_id","amount","member_id"],"required","message"=>"必须填写"],

        ];
    }


}