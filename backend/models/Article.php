<?php
namespace backend\models;


use yii\db\ActiveRecord;

class Article extends ActiveRecord{
        public $content;



        public function rules()
        {
            return [

                [["name","article_category_id","sort","status","intro","content"],"required","message"=>"必须填写"],

            ]
                ;
        }


}

