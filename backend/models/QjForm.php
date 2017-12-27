<?php
namespace backend\models;


use yii\base\Model;

class QjForm extends Model{
    public $name;
    public $description;
    public $relation;
    const SCENARIO_ADD_PERMISSION="add_permission";
    const SCENARIO_EDIT_PERMISSION="EDIT_permission";

    //验证规则
    public function rules()
    {
        return [
          [["name","description"],"required","message"=>"必须填写"],
           ["name","check","on"=>self::SCENARIO_ADD_PERMISSION],
            ["name","check_edit","on"=>self::SCENARIO_EDIT_PERMISSION],
            ["relation","safe"],
        ];
    }

//验证规则
    public function check(){
        //实列化权限组件
        $authMamager=\Yii::$app->authManager;
        //获取提交的name
        $name=$this->name;
        //根据路由看是否存在相同的名称
        if ($authMamager->getPermission($name)){
            $this->addError("name","该名称已存在");
        }
        if ($authMamager->getRole($name)){
            $this->addError("name","该名称已存在");
        }

    }
    //验证修改
    public function check_edit(){
        //实列化权限组件
        $authMamager=\Yii::$app->authManager;
        //自身不修改不用,修改为已经存在得要报错
        $name=\Yii::$app->request->get("name");
        //判断是否已经存在
        if ($name!=$this->name){
            $p=$authMamager->getPermission($this->name);
            $r=$authMamager->getRole($this->name);
            if ($p){

                $this->addError("name","该权限已存在");
            }
            if ($r){

                $this->addError("name","该角色已存在");
            }

        }

    }
}