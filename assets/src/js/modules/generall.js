(function ($, root, undefined) {
    jQuery('a[href^="/#"]').on('click', function(e) {
        e.preventDefault();

        let href = $(this).attr('href');
        let target = href.split('#')[1]; // Извлекаем ID блока из ссылки
        let location = window.location.origin;
        let headerHeight = $('header').innerHeight();

        if ($('#' + target).length) {
            $('html, body').animate({
                scrollTop: $('#' + target).offset().top - headerHeight
            }, 'fast');
        } else {
            window.location.href = location + '/#' + target;
        }
    });
})(jQuery);