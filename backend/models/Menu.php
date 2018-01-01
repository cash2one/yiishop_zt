<?php
namespace backend\models;

use yii\db\ActiveRecord;

class Menu extends ActiveRecord{

    //验证规则
    public function rules()
    {
        return [
            [['name','parent_id','sn','url'],"required","message"=>"必须填写"],
          ["menu","safe"],
        ];
    }


}