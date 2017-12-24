<?php

/**
 * @var $this \yii\web\View
 */
$this->registerCssFile("@web/webuploader/webuploader.css");
$this->registerJsFile("@web/webuploader/webuploader.js",["depends"=>\yii\web\JqueryAsset::className()]);

echo
<<<HTML
   <div id="uploader-demo">
    <!--用来存放item-->
    <div id="fileList" class="uploader-list"></div>
    <div id="filePicker">选择图片</div>
</div>
HTML;
echo '<img id="img">';

$upload_url=\yii\helpers\Url::to(["goods/upload"]);
$save=\yii\helpers\Url::to(["goods/save"]);
$ur=\yii\helpers\Url::to(["goods/del"]);
$y=\yii\bootstrap\Html::a("删除",null,["class"=>"btn btn-primary"]);
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

var html="";
uploader.on( 'uploadSuccess', function(file,response ) {
 
   /* $("#img").attr("src",response.url);*/
     $.getJSON('{$save}',{"id":$id,"url":response.url},function(data) {
       
       html +='<tr id="'+data.id+'" str="{$ur}">\
        <td><img src="'+response.url+'" width="200px" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;{$y}</td>\
    </tr>';

     
       $("table").append(html);
         
              });
   // $("#goods-logo").val(response.url);
});
//发送ajax请求

 $("table").on("click","tr td:last-child",function() {
            if (confirm("确定删除?")){  
            var id=$(this).closest("tr").attr("id");
           var url=$(this).closest("tr").attr("str");
         
    
           var html=$(this).closest("tr");
        
          
          $.get(url,{"id":id})
             html.remove();
          alert("删除成功");}
       
         
           
       })

JS;
$this->registerJs($js);
?>

<table>
    <tr>
        <th>图片</th>

    </tr>
    <?php foreach ($rows as $row) {?>
    <tr id="<?=$row["id"]?>" str="<?=\yii\helpers\Url::to(["goods/del"])?>">
        <td><img src="<?=$row->path?>"width="200px" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?=\yii\bootstrap\Html::a("删除",null,["class"=>"btn btn-primary"])?></td>
    </tr>
     <?php };?>

</table>

<?php
/*$Js=
    <<<JS
$(function() {
  $("table").on("click","tr td:last-child",function() {
      
            var id=$(this).closest("tr").val("id");
           var url=$(this).closest("tr").val("str");
           var html=$(this).closest("tr");
        
           
          $.getJSON(url,{"id":id},function(msg) {
            alert("删除成功");
            html.remove();
          })
      
           
       })
})

JS;

$this->registerJs($Js);*/

