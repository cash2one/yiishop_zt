$(function(){
//  $(".site-nav-wrap ul li").hover(function(){
//      //$(this).addClass("navbar-act");
//      $(".site-nav-part").find(".sub-menu").eq($(this).index()).addClass("active");
//      $(".site-nav-part").show();
//  },function(){
//      $(".site-nav-part").find(".sub-menu").eq($(this).index()).removeClass("active");
//      $(".site-nav-part").hide();
//  });

	$(".site-nav-wrap ul li").mouseover(function(){
		$(".site-nav-part").find(".sub-menu").eq($(this).index()).addClass("active").siblings().removeClass("active");
		$(".site-nav-part").show();
	})
	
	$(".swiper-wrapper").mouseover(function(){
		$(".site-nav-part").hide();
	})
	$(".top-wrap").mouseover(function(){
		$(".site-nav-part").hide();
	})

    $(".accordion-item").hover(function(){
        $(this).parent().parent().find('.accordion-item').removeClass('active');
        $(this).addClass('active');
    },function(){

    });
    $(".filter-type-li ul li").on("mouseover",function(){
        var index = $(this).index()+1;
        $(this).addClass("active"+index).siblings().removeClass();
    });
});

var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable :true,
   /* nextButton: '.swiper-button-next',*/
    /*prevButton: '.swiper-button-prev',*/
    spaceBetween: 30,
    effect: 'fade',
    lazyLoading : true,
    lazyLoadingInPrevNext : true,
});
var swiper = new Swiper('.log-container', {
    loop: true,
    direction: 'vertical',
    slidesPerView: 4,
    autoplay: 2000,
    autoplayDisableOnInteraction : false,
});

$('.baby-company-nav').moveline({
    color:'#fe4979', customTop:true,top:0,
    click:function(ret){
        ret.ele.addClass('active').siblings().removeClass('active');
    }
});
$('.baby-case-nav').moveline({
    color:'#fe4979', customTop:true,top:0,
    click:function(ret){
        ret.ele.addClass('active').siblings().removeClass('active');
    }
});
$('.patient-company-nav').moveline({
    color:'#30a6fe', customTop:true,top:0,
    click:function(ret){
        ret.ele.addClass('active').siblings().removeClass('active');
    }
});
$('.patient-case-nav').moveline({
    color:'#30a6fe', customTop:true,top:0,
    click:function(ret){
        ret.ele.addClass('active').siblings().removeClass('active');
    }
});
$('.inspect-box-company-nav').moveline({
    color:'#41cbc0', customTop:true,top:0,
    click:function(ret){
        ret.ele.addClass('active').siblings().removeClass('active');
    }
});
$('.birth-box-case-nav').moveline({
    color:'#fb8115', customTop:true,top:0,
    click:function(ret){
        ret.ele.addClass('active').siblings().removeClass('active');
    }
});
$('.birth-box-company-nav').moveline({
    color:'#fb8115', customTop:true,top:0,
    click:function(ret){
        ret.ele.addClass('active').siblings().removeClass('active');
    }
});

$(".common-right-list li").on("click",function(){
    var index = $(this).index();
    $(this).parent().parent().next('.case-container').find('.case-li-index').eq(index).show().siblings().hide();
});