<?php
namespace frontend\models;

use yii\db\ActiveRecord;

class DdanGoods extends ActiveRecord{

    //制定验证规则
    public function rules()
    {
        return [
            [['order_id','goods_id','goods_name','logo','price','amount','total'],"required","message"=>"必须填写"],
        ];
    }


}