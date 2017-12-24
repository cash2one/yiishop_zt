<?php
namespace backend\models;
use yii\db\ActiveRecord;
use creocoder\nestedsets\NestedSetsBehavior;
use yii\helpers\Json;


class Goods extends ActiveRecord{
    public $content;
    public $date;
    public $count;
    //验证规则
    public function rules()
    {
        return [
            [["name","goods_category_id","market_price","shop_price","stock","sort",'logo',"brand_id"
            ,"is_on_sale","status","content"],"required","message"=>"必须填写"],
            [["date","count"],"safe"],

        ];
    }


    /**
     * 获取表中数据
     */
    public static function getNodes(){

        $rows=GoodsCategory::find()->select(["id","parent_id","name"])->asArray()->all();
        //转换为json
        $rows[]=["id"=>0,"parent"=>0,"name"=>"顶级分类"];

        return Json::encode($rows);
    }



}