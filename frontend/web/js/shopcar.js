$(function(){
	$("#to_top").click(function(){
		$("html,body").animate({scrollTop:0},200);
	})
})

$(function(){  
    $('#car_icon').click(function(){ 
        if($('.shopcar').is(':hidden')){
        $('.shopcar').show(500);
        }else{
        $('.shopcar').hide(500);
        }  
    })  
})  