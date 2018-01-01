<?php
 $form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,"name")->textInput()->label("菜单名称");
echo $form->field($model,"parent_id")->dropDownList($menu)->label("请选择上级菜单");
echo $form->field($model,'url')->dropDownList($url)->label("请选择路由");
echo $form->field($model,"sn")->textarea()->label("排序");
echo '<button type=\"submit\" class=\"btn btn-primary\">提交</button>';
\yii\bootstrap\ActiveForm::end();