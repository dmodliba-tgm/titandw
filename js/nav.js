$(document).scroll(function(){
    var $nav = $(".nav");
    if($(document).scrollTop() > 0){
        TweenMax.to($nav, 0.5, {className:"navbar navbar-toggleable-md fixed-top nav nav--scrolled"});
    } else {
        TweenMax.to($nav, 0.5, {className:"nav-test navbar navbar-toggleable-md fixed-top nav"});
    }
});
