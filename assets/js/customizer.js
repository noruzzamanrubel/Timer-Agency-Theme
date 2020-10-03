;(function ($) {
    wp.customize('footer_copyright_setting', function (value) {
        value.bind(function (newvalue) {
            $("#copyrights").html(newvalue);
        });
    });
})(jQuery);