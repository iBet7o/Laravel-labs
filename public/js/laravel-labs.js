$(function() {
    $('[data-role="table-list"] [data-role="table-search"] button[type="submit"]')
        .on('click', function() {
            var list        = $(this).closest('table');
            var frm_search  = $(this).closest('tr');
            var url         = frm_search.data('url');
            var data        = frm_search.find('input').serialize();
            var action      = url + '?' + data;

            $.get(action, function(data) {
                list
                    .find('[data-role="table-body"]')
                        .empty()
                        .html(data)
                    .end()
                ;
            });
        })
        .trigger('click')
    ;
});
