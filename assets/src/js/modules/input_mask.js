// Для обычных полей
jQuery(
    function( $ ) {
        $( 'input[type="tel"]' ).mask(
            '+7 (999) 999-99-99',
            {
                placeholder: '+7 (___) ___-__-__'
            }
        );
    }
);
// Для Popup окон
jQuery(
    function( $ ) {
        $(document).on(
            'elementor/popup/show',
            function ( event, id, instance ) {
                $( 'input[name="form_fields[phone]"]' ).mask(
                    '+7 (999) 999-99-99',
                    {
                        placeholder: '+7 (___) ___-__-__'
                    }
                );
            }
        );
    }
);