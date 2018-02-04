<?php

namespace frontend\models;
use yii\base\Model;

class TestForm extends Model{
    public $hobby=[];
    public $hobby1;
    public $hobby3=[];
    public $hobby4=[];
    //public $hobby1;
    public function rules()
    {
        return [
            [['hobby','hobby1'],'required']
        ];
    }
}
