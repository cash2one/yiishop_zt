<table class="table">
    <tr>
        <th>书名</th>
        <th>简介</th>
        <th>类型</th>
        <th>排序</th>
        <th>创建时间</th>
        <th>操作</th>
    </tr>
    <?php foreach ($rows as $row){ ?>
        <tr id="<?=$row["id"]?>" str="<?=\yii\helpers\Url::to(["article/delete"])?>">
            <td><?=$row->name?></td>
            <td id="bt"><?=$row->intro?></td>
            <td><?=$arr[$row->article_category_id]?></td>
            <td><?=$row->sort?></td>
            <td><?=date("Y-m-d H:i:s",$row->create_time)?></td>
            <td><?=\yii\bootstrap\Html::a("修改",["article/edit","id"=>$row->id],["class"=>"btn btn-primary"])?>&emsp;
                <?=\yii\bootstrap\Html::a("删除",null,["class"=>"btn btn-primary"])?>
            </td>
        </tr>
    <?php };?>
    <tr>
        <td colspan="4"><a href="<?=\yii\helpers\Url::to(["article/add"])?>">添加</a></td>
    </tr>

</table>
<?=\yii\widgets\LinkPager::widget([
    "pagination"=>$pager,
])?>
<?php

/**
 * @var $this \yii\web\View
 */
$stu=\yii\helpers\Url::to(["article/delete"]);
$str=
    <<<JS
    //委派事件
    $("table").on("click","tr td a:last-child",function() {
 
      //获取该记录
            
            var id=$(this).closest("tr").attr("id");
            var url=$(this).closest("tr").attr("str");
            var tr=$(this).closest("tr")
             //发送ajax请求
             $.getJSON(url,{"id":id},function(row) {
               if (row.id){
                   if (confirm("确定删除")){
                     //将该tr删除
             tr.closest("tr").remove();     

}                   
               }
             })
     
        
    })

 
JS;

$this->registerJs($str);