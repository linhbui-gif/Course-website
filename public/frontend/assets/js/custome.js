function ajax_loading(show) {
    if ($('#bg-load').length == 0) {
        $('body').append('<div id="bg-load" class="wrap-loader"><div id="container"><div id="loader" class="loader"></div></div></div>');
    }
    if (show) {
        $('#bg-load').show();
    } else {
        $('#bg-load').hide();
    }
}
function request_ajax(url, data, method, done_callback) {
    ajax_loading(true);
    $.ajax({
        method: method,
        url: url,
        dataType: 'json',
        data: data
    })
        .done(function (res) {
            ajax_loading(false);
            done_callback(res)
        })
        .fail(function (res) {
            if (res.status == 403) {
                //show_pnotify('Bạn không có quyền thực hiện tính năng này. Vui lòng liên hệ Admin!');
            } else if (res.status == 419) {
                //location.reload();
            } else {
                if (done_callback) {
                    return done_callback(res.responseJSON);
                }
            }
        });
    return false;
}
