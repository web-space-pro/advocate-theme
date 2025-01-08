// Для обычных полей
jQuery(
    function( $ ) {
        jQuery( 'input[name="user-phone"]' ).mask(
            '+7 (999) 999-99-99',
            {
                placeholder: '+7 (___) ___-__-__'
            }
        );
    }
);