<table class="table">
    <tr>
        <th>名称</th>
        <th>描述</th>
        <th>操作</th>
    </tr>
    <?php foreach ($rows as $row){ ?>
        <tr id=<?=$row->name?> str="<?=\yii\helpers\Url::to(["role/delete"])?>">
            <td><?=$row->name?></td>
            <td id="bt"><?=$row->description?></td>
            <td><?=\yii\bootstrap\Html::a("修改",["role/edit","name"=>$row->name],["class"=>"btn btn-primary"])?>&emsp;
                <?=\yii\bootstrap\Html::a("删除",null,["class"=>"btn btn-primary"])?>
            </td>
        </tr>
    <?php };?>
    <tr>
        <th colspan="4"><a href="<?=\yii\helpers\Url::to(["role/add"])?>">添加</a></th>
    </tr>

</table>
<?php
/**
 * @var $this \yii\web\View
 */
$str=
    <<<JS
    //委派事件
    $("table").on("click","tr td a:last-child",function() {
      //获取该记录
            if (confirm("你确定删除?"))
            {
            var name=$(this).closest("tr").attr("id");
            var url=$(this).closest("tr").attr("str");
             //发送ajax请求
             $.get(url,{"name":name})
             //将该tr删除
             $(this).closest("tr").remove();
             alert("删除成功");
            }
    
        
    })

 
JS;

$this->registerJs($str);