$(function(){
	$("#pro_btn_s").click(function(){
		$(".programme_table .table").hide(500);
		$("#pro_btn_h").show();
		$("#pro_btn_s").hide();
	})
	$("#pro_btn_h").click(function(){
			$(".programme_table .table").show(500);
			$("#pro_btn_s").show();
			$("#pro_btn_h").hide();
	})
	
	$("#hos_btn_s").click(function(){
		$(".hos_table .table").hide(500);
		$("#hos_btn_h").show();
		$("#hos_btn_s").hide();
	})
	$("#hos_btn_h").click(function(){
			$(".hos_table .table").show(500);
			$("#hos_btn_s").show();
			$("#hos_btn_h").hide();
	})
	
	$("#ser_btn_s").click(function(){
		$(".server_table .table").hide(500);
		$("#ser_btn_h").show();
		$("#ser_btn_s").hide();
	})
	$("#ser_btn_h").click(function(){
			$(".server_table .table").show(500);
			$("#ser_btn_s").show();
			$("#ser_btn_h").hide();
	})
	
	$("#med_btn_s").click(function(){
		$(".medical_table .table").hide(500);
		$("#med_btn_h").show();
		$("#med_btn_s").hide();
	})
	$("#med_btn_h").click(function(){
			$(".medical_table .table").show(500);
			$("#med_btn_s").show();
			$("#med_btn_h").hide();
	})
	
	$("#lie_btn_s").click(function(){
		$(".life_table .table").hide(500);
		$("#lie_btn_h").show();
		$("#lie_btn_s").hide();
	})
	$("#lie_btn_h").click(function(){
			$(".life_table .table").show(500);
			$("#lie_btn_s").show();
			$("#lie_btn_h").hide();
	})
	
	$("#oth_btn_s").click(function(){
		$(".other_table .table").hide(500);
		$("#oth_btn_h").show();
		$("#oth_btn_s").hide();
	})
	$("#oth_btn_h").click(function(){
			$(".other_table .table").show(500);
			$("#oth_btn_s").show();
			$("#oth_btn_h").hide();
	})
})
$(".list_title li:first-child>img").click(function(){
	$(".line .table tbody tr td:first-of-type").hide(800);
	$(".list_title li:first-child").hide();
})

$(".list_title li:nth-child(2)>img").click(function(){
	$(".line .table tbody tr td:nth-of-type(2)").hide(800);
	$(".list_title li:nth-child(2)").hide();
})

$(".list_title li:nth-child(3)>img").click(function(){
	$(".line .table tbody tr td:nth-of-type(3)").hide(800);
	$(".list_title li:nth-child(3)").hide();
})

$(".list_title li:nth-child(4)>img").click(function(){
	$(".line .table tbody tr td:nth-of-type(4)").hide(800);
	$(".list_title li:nth-child(4)").hide();
})

$(".list_title li:last-child>img").click(function(){
	$(".line .table tbody tr td:last-of-type").hide(800);
	$(".list_title li:last-child").hide();
})
