<?php
$form=\yii\bootstrap\ActiveForm::begin();

echo"<span><small>旧密码不填,密码不修改</small></span>";
echo $form->field($model,"old_password")->textInput()->label("旧密码");
echo $form->field($model,"new_password")->textInput()->label("新密码");
echo $form->field($model,"re_password")->textInput()->label("确认密码");
echo '<button type="submit" class="btn btn-primary">提交</button>';
\yii\bootstrap\ActiveForm::end();