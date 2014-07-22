
// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.page-scroll a').click(function(event) {
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
//$('body').scrollspy({
//    target: '.navbar-fixed-top'
//})
$(function() {
    $('section').on('scrollSpy:enter', function() {
        $('.page-scroll a').removeClass('page-scroll-hover')
        $('.page-scroll a[href="#' + $(this).attr('id') + '"]').addClass('page-scroll-hover')
        //console.log('enter:', $(this).attr('id'));
    });

    $('.nav.navbar-nav.navbar-right').hover(function() {
        $('.page-scroll a').removeClass('page-scroll-hover')
    })

    $('section').scrollSpy();

});


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
            $('#'+$('#neighborhoods_list .active h4').text().replace(' ','_')).addClass('not-displayed');
            $('#neighborhoods_list .active').removeClass('active');
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
    mail.parents().eq(1).click(function(event){
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
        event.stopPropagation();
    });
}

function addModal(){
    var allRows = $('.controlpanel tbody tr');
    allRows.attr('data-toggle','modal');
    allRows.attr('data-target','#myModal');
    $.each(allRows, function(){
        var el = $(this);
       el.click(function(){
            $('.subject').html('Subject : ' + el.find('td').eq(0).html());
            $('.message').html('Message : This is my message but there is no database bind to this so i cant get real text message from it !');
            $('.date').html('Date : ' + el.find('td').eq(1).html());
            $('.status').html('Status : ' + el.find('td').eq(2).html());
        });
    });
}

function filterDate(){
    $('.datepicker').datepicker();

    var dates = $('.controlpanel .dates input');

    var dayFirstDate = parseInt(dates.eq(0).val().split('/')[0]);
    var monthFirstDate = parseInt(dates.eq(0).val().split('/')[1]);
    var yearFirstDate = parseInt(dates.eq(0).val().split('/')[2]);
    var daySecondDate = parseInt(dates.eq(1).val().split('/')[0]);
    var monthSecondDate = parseInt(dates.eq(1).val().split('/')[1]);
    var yearSecondDate = parseInt(dates.eq(1).val().split('/')[2]);

    var allRows = $('.controlpanel tbody tr');
    $.each(allRows,function(){
        var el = $(this);
        var rowDate = el.children().eq(1).html();

        var rowDay = parseInt(rowDate.split('/')[0]);
        var rowMonth = parseInt(rowDate.split('/')[1]);
        var rowYear = parseInt(rowDate.split('/')[2].split(' ')[0]);

        console.log('RowDay : ' + rowDay + ' - dayFirstDate : '+ dayFirstDate + ' - daySecondDate : '+daySecondDate);
        if(!(rowYear>=yearFirstDate && rowYear<=yearSecondDate) || ((rowYear>=yearFirstDate && rowYear<=yearSecondDate) && !(rowMonth>=monthFirstDate && rowMonth<=monthSecondDate)) || ((rowYear>=yearFirstDate && rowYear<=yearSecondDate) && (rowMonth>=monthFirstDate && rowMonth<=monthSecondDate)) && !(rowDay>=dayFirstDate && rowDay<=daySecondDate)  ){
            //el.remove(); 
            //console.log('removed');       
        }
    });


}


$(window).resize(function(){
    navScroll();
});
$(window).load(function(){
    addModal();
    mailIcon(0);
    navScroll();
    tabNavigation();
    filterDate();
});

function deleteAcctount(){
    $('.save').click(function() {
        console.log('Hello');
    });
}

$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 


