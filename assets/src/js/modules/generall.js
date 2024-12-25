(function ($, root, undefined) {


    jQuery('a[href^=\'#\']').on('click', function(e){
        e.preventDefault();
        let href = $(this).attr('href');
        $('html, body').animate({
            scrollTop:$(href).offset().top
        },'slow');
    });
})(jQuery);