<?php
$form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,"username")->textInput()->label("用户名");
echo $form->field($model,"password_hash")->textInput()->label("密码");
echo $form->field($model,"email")->textInput(["type"=>"email"])->label("邮箱");
echo $form->field($model,"status")->radioList([0=>"禁用",1=>"启用"])->label("邮箱");
echo $form->field($model,"role",["inline"=>1])->checkboxList($data)->label("角色");
 echo '<button type="submit" class="btn btn-primary">提交</button>';
\yii\bootstrap\ActiveForm::end();