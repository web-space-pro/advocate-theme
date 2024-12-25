(function ($, root, undefined) {

    $(document).ready(function () {

        function btnMenu(){
            const btn = $(".btn-menu-toggle");
            const mobileMenu = $(".menu-mobile");
            const body = $('body');
            if (btn.length > 0) {
                btn.click(function() {
                    btn.toggleClass('active');
                    mobileMenu.toggleClass('show');
                    body.toggleClass('t-overflow');
                });
            }
        }

        function subMenu(){
            $("li.menu-item-has-children").on('click', function (e) {
                e.preventDefault();
                $(this).toggleClass('show');
            });
            $("ul.menu li.menu-item-has-children a[href='/']").click(function (e) {
                e.preventDefault();
            });
        }
        function mobileSubMenu(){
            $(".menu-mobile li.menu-item-has-children").on('click', function (e) {
                e.preventDefault();
                $(this).toggleClass('show');
            });
            $("ul.menu li.menu-item-has-children a[href='/']").click(function (e) {
                e.preventDefault();
            });
        }

        btnMenu();
        subMenu();
       // mobileSubMenu();
    });
})(jQuery);

