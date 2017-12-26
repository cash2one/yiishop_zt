<?php
$form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,"username")->textInput()->label("用户名");
echo $form->field($model,"password_hash")->textInput()->label("密码");
echo $form->field($model,"email")->textInput(["type"=>"email"])->label("邮箱");
 echo '<button type="submit" class="btn btn-primary">提交</button>';
\yii\bootstrap\ActiveForm::end();