<?php
$form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,"name")->textInput()->label("名称");
echo $form->field($model,"description")->textInput()->label("描述");
echo $form->field($model,"relation",["inline"=>1])->checkboxList($data)->label("描述");
echo '<button type=\"submit\" class=\"btn btn-primary\">提交</button>';
\yii\bootstrap\ActiveForm::end();