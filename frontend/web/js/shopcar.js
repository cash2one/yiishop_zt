$(function(){
	$("#to_top").click(function(){
		$("html,body").animate({scrollTop:0},200);
	})
})

$(function(){
    $("#cancel").click(function(){
        $('.shopcar').hide(500)
    })

    $('#car_icon').click(function(){ 
        if($('.shopcar').is(':hidden')){
        $('.shopcar').show(500);
        }else{
        $('.shopcar').hide(500);
        }  
    })  
})
