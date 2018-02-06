<?php
namespace frontend\models;


use yii\base\Model;

class ImageForm extends Model{
    public $imgFile;

    public function rules()
    {
        return [
            ['imgFile','file','extensions'=>['jpg','png','gif'],'skipOnEmpty'=>false],
        ];
    }


}
