<form action="<?=\yii\helpers\Url::to(["goods/index"])?>" method="get">
    货号:<input type="text" name="sn"/>
    名称:<input type="text" name="name"/>
    <input type="submit" value="搜索">
</form>
<table class="table">
    <tr>
        <th>货号</th>
        <th>商品名称</th>
        <th>商品类型</th>
        <th>品牌</th>
        <th>市场价格</th>
        <th>商品价格</th>
        <th>库存</th>
        <th>logo</th>
        <th>是否在售</th>
        <th>添加时间</th>
        <th>操作</th>
    </tr>
    <?php foreach ($rows as $row){ ?>
        <tr id="<?=$row["id"]?>" str="<?=\yii\helpers\Url::to(["goods/delete"])?>">
            <td><?=$row->sn?></td>
            <td><?=$row->name?></td>
            <td><?=$arrs[$row->goods_category_id]?></td>
            <td><?=$arr[$row->brand_id]?></td>
            <td><?=$row->market_price?></td>
            <td><?=$row->shop_price?></td>
            <td><?=$row->stock?></td>
            <td><img src="<?=$row->logo?>" width="100px"></td>
            <td><?=$row->is_on_sale==0?'下架':'在售'?></td>
            <td><?=date("Y-m-d H:i:s",$row->create_time)?></td>
            <td> <?=\yii\bootstrap\Html::a("相册",["goods/gallery","id"=>$row->id],["class"=>"btn btn-primary"])?>&emsp;
                <?=\yii\bootstrap\Html::a("修改",["goods/edit","id"=>$row->id],["class"=>"btn btn-primary"])?>&emsp;
                <?=\yii\bootstrap\Html::a("删除",null,["class"=>"btn btn-primary"])?>
            </td>
        </tr>
    <?php };?>
    <tr>
        <th colspan="4"><a href="<?=\yii\helpers\Url::to(["goods/add"])?>">添加</a></th>
    </tr>

</table>
<?=
\yii\widgets\LinkPager::widget([
        "pagination"=>$pager,
])
?>

<?php

/**
 * @var $this \yii\web\View
 */
$stu=\yii\helpers\Url::to(["goods/delete"]);
$js=
    <<<JS
 $("table").on("click","tr td a:last-child",function() {
     
     if(confirm("确定删除吗?")){
         
           //获取id
   var id=$(this).closest("tr").attr("id");
   //保存该tr
   var tr=$(this).closest("tr");
   //获取url
   var url=$(this).closest("tr").attr("str");
   //发送ajax请求
   $.getJSON(url,{"id":id},function(row) {
     alert(row.msg);
     tr.remove();
   }) 
     }

 });
JS;


$this->registerJs($js);