<?php
namespace backend\models;


use yii\db\ActiveRecord;
use creocoder\nestedsets\NestedSetsBehavior;
use yii\helpers\Json;

class GoodsCategory extends ActiveRecord {

   public function rules()
    {
        return [
            [["name","parent_id","intro"],"required","message"=>"必须填写"],
         // ["parent_id","validatePid"],
        ];


    }
/*    //自定义验证规则
    public function validatePid(){
       $parent=GoodsCategory::findOne(["id"=>$this->parent_id]);
       if ($parent->isChildOf($this)){
         $this->addError("parent_id","不能修改到子孙分类下");
       }
    }*/

    /**
     * 获取表中数据
     */
    public static function getNodes(){

        $rows=self::find()->select(["id","parent_id","name"])->asArray()->all();
        //转换为json
        $rows[]=["id"=>0,"parent"=>0,"name"=>"顶级分类"];

        return Json::encode($rows);
    }

    //配置分类
    public function behaviors() {
        return [
            'tree' => [
                'class' => NestedSetsBehavior::className(),
                 'treeAttribute' => 'tree',
                // 'leftAttribute' => 'lft',
                // 'rightAttribute' => 'rgt',
                // 'depthAttribute' => 'depth',
            ],
        ];
    }

    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_ALL,
        ];
    }

    public static function find()
    {
        return new Category(get_called_class());
    }
}