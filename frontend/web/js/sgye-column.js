$(".accordion-item").hover(function(){
    $(this).parent().parent().find('.accordion-item').removeClass('active');
    $(this).addClass('active');
},function(){

});

var mySwiper = new Swiper ('.active-container', {
    loop: true,
    paginationClickable :true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    autoplay: 2000,
    spaceBetween:10,
    slidesPerView: 'auto'
});
var mySwiper = new Swiper ('.company-container', {
    loop: true,
    paginationClickable :true,
    slidesPerView : 1,
    slidesPerGroup : 1,
    spaceBetween:10,
    prevButton:'.company-button-prev',
    nextButton:'.company-button-next',
});
/*$('.hospital-list2').on("mouseover",function(){
     $(this).find('.hospital-list2-text').stop(true,true).animate({top:0},500);
     $(this).find('.hospital-list2-span1').stop(true,true).animate({bottom:'-100%'},5000);
},function(){
     $(this).find('.hospital-list2-text').stop(true,true).animate({top:'-100%'},500);
     $(this).find('.hospital-list2-span1').stop(true,true).animate({bottom:0},500);
});*/

$('.base-box').hover(function(){
    $(this).find('.show-box2').stop(true,true).animate({top:0},500);
    $(this).find('.show-box1').stop(true,true).animate({bottom:'-100%'},4000);
},function(){
    $(this).find('.show-box2').stop(true,true).animate({top:'-100%'},500);
    $(this).find('.show-box1').stop(true,true).animate({bottom:0},500);
})

$(".condition-ul li").on("mouseover",function(){
    $(this).parent().parent().next('.hospital-list').find('.hospital-nav').eq($(this).index()).show().siblings().hide();
});