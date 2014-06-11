$(function() {
    $('#admin-menu .item-group').each( function() {
        $('ul', this).addClass('collapse' + ($(this).hasClass('current') ? ' in' : '')).collapse({
            toggle: false
        });
    });

    $('#admin-menu').on('click', '.item-group > span a', function(e) {
        $parent = $(this).parents().eq(1);
        $('ul', $parent.siblings('.item-group')).collapse('hide');
        $('ul', $parent).collapse('toggle');

        e.preventDefault();
    });

    $('#admin-menu button').click(function() {
        $('#admin-menu ul').toggleClass('compact');
    });
});
