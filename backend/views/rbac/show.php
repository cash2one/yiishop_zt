<?php
/**
 * @var $this \yii\web\View;
 */
$this->registerCssFile("@web/media/css/jquery.dataTables.css");

$this->registerJsFile("@web/media/js/jquery.js",["depends"=>\yii\web\JqueryAsset::className()]);
$this->registerJsFile("@web/media/js/jquery.dataTables.js",["depends"=>\yii\web\JqueryAsset::className()]);
?>
   <table id="table_id_example" class="display">
    <thead>
        <tr>
            <th>名称</th>
            <th>描述</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($rows as $row){?>
        <tr id=<?=$row->name?> str="<?=\yii\helpers\Url::to(["rbac/delete"])?>">
            <td><?=$row->name?></td>
            <td><?=$row->description?></td>
            <td>
                <?=\yii\bootstrap\Html::a("修改",["rbac/edit","name"=>$row->name],["class"=>"btn btn-primary"])?>&emsp;
                <?=\yii\bootstrap\Html::a("删除",null,["class"=>"btn btn-primary"])?>
            </td>>
        </tr>
        <?php };?>
    </tbody>
</table>

<?php
$js=
    <<<JS
$(document).ready( function () {
    $('#table_id_example').DataTable({language: {
        "sProcessing": "处理中...",
        "sLengthMenu": "显示 _MENU_ 项结果",
        "sZeroRecords": "没有匹配结果",
        "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
        "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
        "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
        "sInfoPostFix": "",
        "sSearch": "搜索:",
        "sUrl": "",
        "sEmptyTable": "表中数据为空",
        "sLoadingRecords": "载入中...",
        "sInfoThousands": ",",
        "oPaginate": {
            "sFirst": "首页",
            "sPrevious": "上页",
            "sNext": "下页",
            "sLast": "末页"
        },
        "oAria": {
            "sSortAscending": ": 以升序排列此列",
            "sSortDescending": ": 以降序排列此列"
        }
    }});
} );
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
$this->registerJs($js);