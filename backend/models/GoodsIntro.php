<?php
namespace backend\models;

use yii\db\ActiveRecord;

class GoodsIntro extends ActiveRecord{


    //设置列表主键

    public static function primaryKey()
    {
        return ["goods_id"];
    }
}