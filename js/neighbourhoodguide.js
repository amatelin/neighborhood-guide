
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


function navScroll(){    
    if ($('#header-index').length > 0) { 
        var shiftWindow = function() { scrollBy(0, 0) };
        if (location.hash) shiftWindow();
        window.addEventListener("hashchange", shiftWindow);

        headerPictureSize = parseInt($('header').css('height')) - 50 ;
        var nav = $('nav');
        var actualPosition = $(window).scrollTop();

        if(actualPosition >= headerPictureSize){ 
                nav.removeClass('not-displayed');       
                nav.fadeIn("fast");       
        }

        $(window).scroll(function(e){
            if($(window).scrollTop() >= headerPictureSize){         
                nav.fadeIn("fast");
            }
            else if($(window).scrollTop() <= headerPictureSize){
               nav.fadeOut("fast");
            }
        });
    }
}

function tabNavigation(){
    var monTab = [];
    $.each($('.tab ul li h4'),function(){
        monTab.push($(this).text().replace(' ','_'));        
        $(this).click(function(){
            $('#'+$('#neighborhoods-list .active h4').text().replace(' ','_')).addClass('not-displayed');
            $('#neighborhoods-list .active').removeClass('active');
            $($(this).parent()).addClass('active');

            $('#'+$(this).text().replace(' ','_')).removeClass('not-displayed');

        });
    })
    var i = 0;
    $.each($('.neigh'),function(){
        $(this).attr('id',monTab[i]);
        ++i;
    });
}

function addModal(){
    var allRows = $('.intro-text-admin tbody tr');
    allRows.attr('data-toggle','modal');
    allRows.attr('data-target','#myModal');
    console.log(allRows);
}

function mailIcon(messages){
    var nbMessages = messages;
    var mail = $('#mail');
    if(nbMessages>0){
        if(mail.hasClass('fa-envelope-o')){
            mail.removeClass('fa-envelope-o');
            mail.addClass('fa-envelope');
            mail.addClass('new-msg');
            mail.removeClass('no-msg');
        }
    }
    mail.parents().eq(1).click(function(){
        var el = mail;

        if(el.hasClass('fa-envelope-o')){
            el.removeClass('fa-envelope-o');
            el.removeClass('no-msg');
            el.addClass('fa-envelope');
            el.addClass('new-msg');
        }
        else if(el.hasClass('fa-envelope')){
            el.removeClass('fa-envelope');            
            el.removeClass('new-msg');
            el.addClass('fa-envelope-o');
            el.addClass('no-msg');
        }
        $(this).die();
    });
}



$(window).resize(function(){
    navScroll();
});
$(window).load(function(){
    mailIcon(1);
    addModal();
    navScroll();
    tabNavigation();   
});
