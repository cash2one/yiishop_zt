<?php
namespace backend\filters;


use yii\base\ActionFilter;
use yii\web\HttpException;

class RbacFilter extends ActionFilter{

    //操作执行之前,配置过滤器
    public function beforeAction($action)
    {
       // return \Yii::$app->user->can($action->uniqueId);
        if (!\Yii::$app->user->can($action->uniqueId)){
            //如果用户没登录,提示用户跳转到登录页面
            if (\Yii::$app->user->isGuest){
                return $action->controller->redirect(\Yii::$app->user->loginUrl)->send();//加send方法,防止return直接就返回true

            }
            //没有权限,提示信息
            throw new HttpException(403,"对不起,您没有该操作权限");
        }
       //有权限,
        return true;

    }
}