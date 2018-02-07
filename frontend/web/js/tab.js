$(function(){
	$(".package_type").on("click","span.type_num",function(){
		$(this).addClass('active1').siblings().removeClass("active1");
		var index = $(this).index();
		$(".package div.type_content").eq(index).show().siblings(".package div.type_content").hide();
	})
})

