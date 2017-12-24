<?php
 $form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,"name")->textInput()->label("品牌");
echo $form->field($model,"goods_category_id")->hiddenInput()->label("所属类别");
/**
 * @var $this \yii\web\View;
 */
$this->registerCssFile("@web/zTree/css/zTreeStyle/zTreeStyle.css");
$this->registerJsFile("@web/zTree/js/jquery.ztree.core.js",["depends"=>\yii\web\JqueryAsset::className()]);
//获取分页的数据
$nodes=\backend\models\Goods::getNodes();

$js=
    <<<JS

       var zTreeObj;
  // zTree 的参数配置，深入使用请参考 API 文档（setting 配置详解）
  var setting = {
      data: {
          simpleData: {
              enable: true,
              idKey: "id",
              pIdKey: "parent_id",
              rootPId: 0
          }
      },
      callback:{
        onClick:function(event,treeId,treeNode) {
          //结点被点击 获取该结点的id
          $("#goods-goods_category_id").val(treeNode.id);
        }  
      }
  };
  // zTree 的数据属性，深入使用请参考 API 文档（zTreeNode 节点数据详解）
  var zNodes = {$nodes};

      zTreeObj = $.fn.zTree.init($("#treeDemo"), setting, zNodes);
      zTreeObj.expandAll(true);
         //结点回显状态
          var node =zTreeObj.getNodeByParam("id",$model->goods_category_id,null)
          zTreeObj.selectNode(node);
 
JS;
$this->registerJs($js);

echo
<<<HTML

<div>
    <ul id="treeDemo" class="ztree"></ul>
</div>
HTML;
echo $form->field($model,"market_price")->textInput()->label("市场价格");
echo $form->field($model,"shop_price")->textInput()->label("商品价格");
echo $form->field($model,"stock")->textInput()->label("库存");
echo $form->field($model,"sort")->textInput()->label("排序");
echo $form->field($model,'logo')->hiddenInput();
//加载JS和CSS样式
/**
 * @var $this \yii\web\View
 */
$this->registerCssFile("@web/webuploader/webuploader.css");
$this->registerJsFile("@web/webuploader/webuploader.js",["depends"=>\yii\web\JqueryAsset::className()]);
echo "<img id='img' src='$model->logo'>";
echo
<<<HTML
   <div id="uploader-demo">
    <!--用来存放item-->
    <div id="fileList" class="uploader-list"></div>
    <div id="filePicker">选择图片</div>
</div>
HTML;

$upload_url=\yii\helpers\Url::to(["goods/upload"]);
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
    $("#goods-logo").val(response.url);
});
JS;
$this->registerJs($js);

echo $form->field($model,"brand_id")->dropDownList($data)->label("品牌");
echo $form->field($model,"is_on_sale")->radioList(["0"=>"下架","1"=>"在售"])->label("状态");
echo $form->field($model,"status")->radioList(["0"=>"回收站","1"=>"正常"])->label("状态");
echo $form->field($model,"content")->widget(\common\widgets\ueditor\Ueditor::className()
)->label("商品描述");
echo '<button type=\"submit\" class=\"btn btn-primary\">提交</button>';
\yii\bootstrap\ActiveForm::end();