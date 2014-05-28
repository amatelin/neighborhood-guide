
$(function() {
    var top = false

    $('#map').find('.mapbar').click(function() {
        $('#map').css('top', top ? '100%' : '64px')
        $('#map').find('.right').css('opacity', top ? '0' : '1')
        top = !top
    })
})
