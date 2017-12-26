<?php
$form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,"username")->textInput()->label("用户名");
echo $form->field($model,"password")->textInput()->label("密码");
echo $form->field($model,'code')->widget(\yii\captcha\Captcha::className(),[
    'captchaAction'=>'login/captcha',
    'template'=>'<div class="row"><div class="col-xs-1">{input}</div><div class="col-xs-1">{image}</div></div>'
])->label("验证码");
echo $form->field($model,"remember")->checkboxList([1=>"记住我,下次自动登录"])->label("");
 echo '<button type="submit" class="btn btn-primary">提交</button>';
\yii\bootstrap\ActiveForm::end();

