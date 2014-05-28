
// Display Infos
$(function() {
    // Hide Panel
    $('.panel-heading').first().children('i').click(function() {
        $('.panel').first().css('display', 'none')
    })

    // Show Panel with info
    $('.dropdown-menu').children('li').click(function() {
        //$(this).children('a').html()
        $('.panel').css('display', 'block')
    })
})

// Display Map
$(function() {
    var top = false

    $('#map').find('.mapbar').click(function() {
        $('#map').css('top', top ? '100%' : '64px')
        $('#map').find('.right').css('opacity', top ? '0' : '1')
        top = !top
    })
})
