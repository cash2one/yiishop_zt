<table class="table">
    <tr>
        <th>用户名</th>
        <th>邮箱</th>
        <th>状态</th>

        <th>操作</th>
    </tr>
    <?php foreach ($rows as $row){ ?>
        <tr id="<?=$row["id"]?>" str="<?=\yii\helpers\Url::to(["user/delete"])?>">
            <td><?=$row->username?></td>
            <td><?=$row->email?></td>
            <td><?=$row->status==1?"启用":"禁用"?></td>
            <td><?=\yii\bootstrap\Html::a("修改",["user/edit","id"=>$row->id],["class"=>"btn btn-primary"])?>&emsp;
                <?=\yii\bootstrap\Html::a("删除",null,["class"=>"btn btn-primary"])?>
            </td>
        </tr>
    <?php };?>
    <tr>
        <th colspan="4"><a href="<?=\yii\helpers\Url::to(["user/add"])?>">添加</a></th>
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
            if (confirm("确定删除")){
                 var id=$(this).closest("tr").attr("id");
            var url=$(this).closest("tr").attr("str");
             //发送ajax请求
             $.get(url,{"id":id})
             //将该tr删除
             $(this).closest("tr").remove();
             //提示删除信息
             alert("删除成功");
            }
         
        
    })

 
JS;

$this->registerJs($str);