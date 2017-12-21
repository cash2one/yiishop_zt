<?php
 $form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,"name")->textInput()->label("品牌");
echo $form->field($model,"sort")->textInput()->label("排序");
echo $form->field($model,'logo')->hiddenInput();
//加载JS和CSS样式
/**
 * @var $this \yii\web\View
 */
$this->registerCssFile("@web/webuploader/webuploader.css");
$this->registerJsFile("@web/webuploader/webuploader.js",["depends"=>\yii\web\JqueryAsset::className()]);
echo '<img id="img">';
echo
<<<HTML
   <div id="uploader-demo">
    <!--用来存放item-->
    <div id="fileList" class="uploader-list"></div>
    <div id="filePicker">选择图片</div>
</div>
HTML;

$upload_url=\yii\helpers\Url::to(["brand/upload"]);
$js=
    <<<JS

var uploader = WebUploader.create({

    // 选完文件后，是否自动上传。
    auto: true,

    // swf文件路径
    swf:"/webuploader/Uploader.swf",

    // 文件接收服务端。
    server: '{$upload_url}',

    // 选择文件的按钮。可选。
    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
    pick: '#filePicker',

    // 只允许选择图片文件。
    accept: {
        title: 'Images',
        extensions: 'gif,jpg,jpeg,bmp,png',
        mimeTypes: 'image/*'
    }

   });
uploader.on( 'uploadSuccess', function( file,response ) {
    $("#img").attr("src",response.url);
    $("#brand-logo").val(response.url);
});
JS;
$this->registerJs($js);




echo $form->field($model,"status")->radioList(["0"=>"隐藏","1"=>"正常"])->label("状态");
echo $form->field($model,"intro")->textarea()->label("简介");
echo '<button type=\"submit\" class=\"btn btn-primary\">提交</button>';
\yii\bootstrap\ActiveForm::end();