<?php
namespace backend\models;


use yii\db\ActiveRecord;
use creocoder\nestedsets\NestedSetsBehavior;
use yii\helpers\Json;

class GoodsCategory extends ActiveRecord {

   public function rules()
    {
        return [
            [["name","parent_id"],"required","message"=>"必须填写"],
            ['intro','safe'],
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

    //获取商品分类数据

    //将页面静态化保存再redis中
    public static function getCategory(){
        //开启redis
        $redis=new \Redis();
        $redis->connect("127.0.0.1");
        //从redis中获取
        if ($redis->get("category")){
            return $redis->get("category");
        }else{
            //定义一个变量来保存
            $html='';

            $data=\backend\models\GoodsCategory::find()->where(["parent_id"=>0])->all();
            foreach ($data as $k=>$v){

                $html.= '<div class="cat '.($k?'':'item1').'">';
                $html.=     '<h3><a href="'.\yii\helpers\Url::to(["site/show-two","id"=>$v->id]).'">'.$v->name.'</a><b></b></h3>';
                $html.=    '<div class="cat_detail">';
                //加入收索条件
                $name=\Yii::$app->request->get("name");
                $data=\backend\models\GoodsCategory::find()->where(["parent_id"=>$v->id])->all() ;
                if ($name){
                    $data=\backend\models\GoodsCategory::find()->where(["parent_id"=>$v->id])->andWhere(["like","name",$name])->all() ;
                }
                //如果加了
                foreach ($data as $k1=>$val){

                    $html.='<dl'. ($k1?"":'class="dl_1st"').' >' ;

                    $html.='<dt><a href="'.\yii\helpers\Url::to(["site/show-two","id"=>$val->id]).'">'.$val->name.'</a></dt>';

                    $html.= '<dd>';
                    //加入收索条件
                    $rows=\frontend\models\GoodsCategory::find()->where(["parent_id"=>$val->id])->all();
                    foreach ($rows as $row){

                        $html.='<a href="'.\yii\helpers\Url::to(["site/list","id"=>$row->id]).'">'.$row->name.'</a>';
                    };
                    $html.= '</dd>';
                    $html.= '</dl>';
                };

                $html.='</div>';

                $html.='</div>';
            };
            $redis->set("category",$html,3600);
            //返回这个变量
            return  $html;
        }




    }

}