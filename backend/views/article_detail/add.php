<?php
 $form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,"article_id")->dropDownList()->label("品牌");
echo $form->field($model,"content")->textarea()->label("简介");
echo '<button type="submit" class="btn btn-primary">提交</button>';
\yii\bootstrap\ActiveForm::end();