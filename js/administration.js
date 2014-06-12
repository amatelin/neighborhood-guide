$(function() {
    $('#admin-menu .item-group').each( function() {
        if (!$(this).hasClass('current')) {
            $(this).addClass('compact');
        }

        $('ul', this).addClass('collapse' + ($(this).hasClass('current') ? ' in' : '')).collapse({
            toggle: false
        });
    });

    $('#admin-menu').on('click', '.item-group > span a', function(e) {
        $parent = $(this).parents().eq(1);
        $siblings = $parent.siblings('.item-group');

        $siblings.addClass('compact').children('ul').collapse('hide');
        $parent.toggleClass('compact').children('ul').collapse('toggle');

        e.preventDefault();
    });

    $('#admin-menu button').click(function() {
        $('#admin-menu .menu-wrapper').toggleClass('compact');
    });
});
