<?php

namespace frontend\models;
use yii\db\ActiveRecord;

class Programme extends ActiveRecord{
    public $doc;//>>医生信息
    public $num;//>>添加到购物车的数量
    public $package;//>>套餐信息
}
