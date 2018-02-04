$(document).ready(function(){
    $('.forum-widget-list li').hover(function(){
        $(this).find('.show-box2').stop(true,true).animate({top:0},500);
        $(this).find('.show-box1').stop(true,true).animate({bottom:'-100%'},1000);
    },function(){
        $(this).find('.show-box2').stop(true,true).animate({top:'-100%'},500);
        $(this).find('.show-box1').stop(true,true).animate({bottom:0},500);
    })
    $(".widget-condition-load").click(function(){
        var filter_class = $(".filter-list").attr('class');
        if(filter_class.indexOf("all-list")!="-1"){
            $(".filter-list").removeClass('all-list');
        }else{
            $(".filter-list").addClass('all-list');
        }
    });
});