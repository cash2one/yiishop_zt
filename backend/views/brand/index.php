<table class="table">
    <tr>
        <th>品牌</th>
        <th>简介</th>
        <th>logo</th>
        <th>排序</th>
        <th>操作</th>
    </tr>
    <?php foreach ($rows as $row){ ?>
        <tr id="<?=$row["id"]?>" str="<?=\yii\helpers\Url::to(["brand/delete"])?>">
            <td><?=$row->name?></td>
            <td id="bt"><?=$row->intro?></td>
            <td><img src="<?=$row->logo?>" width="200px"/> </td>
            <td><?=$row->sort?></td>
            <td><?=\yii\bootstrap\Html::a("修改",["brand/edit","id"=>$row->id],["class"=>"btn btn-primary"])?>&emsp;
                <?=\yii\bootstrap\Html::a("删除",null,["class"=>"btn btn-primary"])?>
            </td>
        </tr>
    <?php };?>
    <tr>
        <td colspan="4"><a href="<?=\yii\helpers\Url::to(["brand/add"])?>">添加</a></td>
    </tr>

</table>
<?php
/**
 * @var $this \yii\web\View
 */
$stu=\yii\helpers\Url::to(["brand/delete"]);
$str=
    <<<JS
    //委派事件
    $("table").on("click","tr td a:last-child",function() {
      //获取该记录
            
            var id=$(this).closest("tr").attr("id");
            var url=$(this).closest("tr").attr("str");
             //发送ajax请求
             $.get(url,{"id":id})
             //将该tr删除
             $(this).closest("tr").remove();
        
    })

 
JS;

$this->registerJs($str);