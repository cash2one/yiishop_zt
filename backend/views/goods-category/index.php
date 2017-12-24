<table class="table">
    <tr>
        <th>名称</th>
        <th>所属类型</th>
        <th>简介</th>
        <th>操作</th>
    </tr>
    <?php foreach ($rows as $row){ ?>
        <tr id="<?=$row["id"]?>" url="<?=\yii\helpers\Url::to(["goods-category/delete"])?>">
            <td><?php for($i=0;$i<=$row->depth;++$i){
                        echo "&emsp;&emsp;";
                }echo $row->name?></td>
            <td><?=$row->parent_id==0?'顶级分类':$arr[$row->parent_id]?></td>
            <td><?=$row->intro?></td>
            <td><?=\yii\bootstrap\Html::a("修改",["goods-category/edit","id"=>$row->id],["class"=>"btn btn-primary"])?>&emsp;
                <?=\yii\bootstrap\Html::a("删除",null,["class"=>"btn btn-primary"])?>
            </td>
        </tr>
    <?php };?>
    <tr>
        <th colspan="4"><a href="<?=\yii\helpers\Url::to(["goods-category/add"])?>">添加</a></th>
    </tr>

</table>
<?=
\yii\widgets\LinkPager::widget([
    "pagination"=>$pager,
]);
?>

<?php

/**
 * @var $this \yii\web\View
 */

$js=
<<<JS
 $("table").on("click","tr td a:last-child",function() {
     
     if(confirm("确定删除吗?")){
           //获取id
   var id=$(this).closest("tr").attr("id");
   //获取url
   var url=$(this).closest("tr").attr("url");
   //发送ajax请求
   $.getJSON(url,{"id":id},function(row) {
     alert(row.msg);
   }) 
     }

 });


JS;
$this->registerJs($js)
?>