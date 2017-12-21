<?php
$form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,"article_category_id")->dropDownList($arr)->label("文章类型");
echo $form->field($model,"name")->textInput()->label("书名");
//echo $form->field($model,"create_time")->textInput(["type"=>"date"])->label("添加时间");
echo $form->field($model,"intro")->textarea()->label("简介");
echo $form->field($model,"sort")->textInput()->label("排序");
echo $form->field($model,"status")->radioList(["0"=>"隐藏","1"=>"正常"])->label("状态");

echo $form->field($model,"content")->widget(\common\widgets\ueditor\Ueditor::className(),['options'=>[
    'initialFrameWidth' => 850,
]])->label("文章内容");
echo '<button type="submit" class="btn btn-primary">提交</button>';
\yii\bootstrap\ActiveForm::end();