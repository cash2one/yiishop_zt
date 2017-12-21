<?php
namespace backend\models;

use yii\db\ActiveRecord;

class Brand extends ActiveRecord{
      public $imgFile;

    public function rules()
    {
        return [
            [["name","status","intro"],"required","message"=>"必须填写"],
            ["imgFile",'file','extensions'=>['jpg','png','gif']/*,'skipOnEmpty'=>false*/],
            ["sort","safe"],
            ["logo","safe"],
        ];


    }
}