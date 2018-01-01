<?php
namespace backend\models;


use yii\base\Model;

class EditForm extends Model{


    public $old_password;
    public $new_password;
    public $re_password;
    public $password_hash;

    //验证规则
    public function rules()
    {
        return [
            [["old_password","new_password","re_password"],"checkpwd"],
            ["password_hash","safe"],
            //["name","check"],
        ];
    }

    //定义修改密码的验证规则
    public function checkpwd(){
        //获取登录人的id
        $id=\Yii::$app->user->identity->id;

        $model=User::findOne($id);
        //保存之前的旧密码
        $old_password=$model->password_hash;
        //旧密码不填表示不修改密码
        if ($this->old_password){
            //要修改密码,旧密码和输入密码必须一致
            if(\Yii::$app->security->validatePassword($this->old_password,$old_password)){
                //新密码和确认密码必须一致
                if ($this->new_password!=$this->re_password){
                    $this->addError("re_password","确认密码和新密码要一致");
                }
            }else{
                //新旧密码不一致
                $this->addError("old_password","旧密码必须输入正确");
            }

        }

    }
/*//验证规则
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

    }*/
}