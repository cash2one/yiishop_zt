<?php
$form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,"name")->textInput()->label("名称");
echo $form->field($model,"parent_id")->hiddenInput()->label("分类");
/**
 * @var $this \yii\web\View;
 */
$this->registerCssFile("@web/zTree/css/zTreeStyle/zTreeStyle.css");
$this->registerJsFile("@web/zTree/js/jquery.ztree.core.js",["depends"=>\yii\web\JqueryAsset::className()]);
//获取分页的数据
$nodes=\backend\models\GoodsCategory::getNodes();
$id=$model->id;

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
              $("#goodscategory-parent_id").val(treeNode.id);
            }  
          }
      };
      // zTree 的数据属性，深入使用请参考 API 文档（zTreeNode 节点数据详解）
      var zNodes = {$nodes};

          zTreeObj = $.fn.zTree.init($("#treeDemo"), setting, zNodes);
          //展开所有列表
          zTreeObj.expandAll(true);
          //结点回显状态
          var node =zTreeObj.getNodeByParam("id",$model->id,null)
          zTreeObj.selectNode(node);
JS;
/*<<<JS

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
          $("#goodscategory-parent_id").val(treeNode.id);
        }  
      }
  };
  // zTree 的数据属性，深入使用请参考 API 文档（zTreeNode 节点数据详解）
  var zNodes = {$nodes};

      zTreeObj = $.fn.zTree.init($("#treeDemo"), setting, zNodes);
      zTreeObj.expandAll(true);
      //选中节点
      var node = zTreeObj.getNodesByParam("id",$model->id, null);
      zTreeObj.selectNode(node);
      

JS;*/
$this->registerJs($js);

echo
<<<HTML

<div>
    <ul id="treeDemo" class="ztree"></ul>
</div>
HTML;

echo $form->field($model,"intro")->textarea()->label("简介");
echo '<button type="submit" class="btn btn-primary">提交</button>';
\yii\bootstrap\ActiveForm::end();