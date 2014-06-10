$(function() {
    $('#admin-menu .item-group ul').each( function() {
        $(this).addClass('collapse').collapse({
            toggle: false
        });
    });

    $('#admin-menu').on('click', '.item-group > a', function(e) {
        $parent = $(this).parent();
        $('ul', $parent.siblings('.item-group')).collapse('hide');
        $('ul', $parent).collapse('toggle');

        e.preventDefault();
    });
});
