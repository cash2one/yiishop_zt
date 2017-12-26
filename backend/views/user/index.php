<table class="table">
    <tr>
        <th>用户名</th>
        <th>密码</th>
        <th>邮箱</th>
        <th>最后登录时间</th>
        <th>最后登录IP</th>
        <th>操作</th>
    </tr>
    <?php foreach ($rows as $row){ ?>
        <tr id="<?=$row["id"]?>" str="<?=\yii\helpers\Url::to(["user/delete"])?>">
            <td><?=$row->username?></td>
            <td id="bt"><?=$row->password_hash?></td>
            <td><?=$row->email?></td>
            <td><?=date("Y-m-d H:i:s",$row->last_login_time)?></td>
            <td><?=$row->last_login_ip?></td>
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