// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

$(window).load(function(){
    var nav = $('nav');
    var temp = $(window).scrollTop();
    var neigh =$('#neighborhoods-list');
    if(temp >= 1200){
            nav.removeClass('not-displayed');
            nav.addClass('displayed');            
            nav.animate({opacity:"1"},"slow");
            neigh.animate({'margin-top':"150px"},"slow");
    }
    $(window).scroll(function(e){
        if($(window).scrollTop() >= 1200 && nav.hasClass('not-displayed')){
            nav.removeClass('not-displayed');
            nav.addClass('displayed');            
            nav.animate({opacity:"1"},"slow");
            neigh.animate({'margin-top':"150px"},"slow");
        }
        else if($(window).scrollTop() <= 1199 && nav.hasClass('displayed')){
           nav.animate({opacity:"0"},"slow");
           nav.addClass('not-displayed');
           nav.removeClass('displayed');
           neigh.animate({'margin-top':"0px"},"slow");
        }
    });
});