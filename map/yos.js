function ready() {

    ymaps.ready(init);

    function init() {


        var myMap = new ymaps.Map("map", {
                center: [45.038776, 38.973714],
                zoom: 16
            }, {
                searchControlProvider: 'yandex#search'
            }),
            myPlacemark = new ymaps.Placemark([45.038776, 38.973714], {
                    // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
                balloonContentHeader: "Коллегия Адвокатов - Филиал №76",
                hintContent: "Коллегия Адвокатов - Филиал №76",

                balloonContentBody: [
                    '<address>',
                    'Адрес:  Краснодар, улица им. Володи Головатого 294, офис 106',
                    '</address>'
                    ].join('')
                }, {
                    // Опции
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/wp-content/themes/advocate-theme/map/marker.png',
                    // Размеры метки.
                    iconImageSize: [72, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-30, -80],
                    iconCaption: "Диаграмма"
                }
            );

        myMap.geoObjects.add(myPlacemark);

        if (jQuery(window).width() < 960) {
            myMap.behaviors.disable('drag');
        }
        else{
            myMap.behaviors.disable('scrollZoom');
        }


    }

}
document.addEventListener("DOMContentLoaded", ready);