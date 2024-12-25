import Swiper from 'swiper';
import {Autoplay, EffectFade, Navigation, Pagination, Manipulation} from 'swiper/modules';


Swiper.use([Navigation, Pagination, Autoplay, EffectFade, Manipulation]);




//--------Custom Post Type product


// block HERO
//-------------------------
let heroProductSwiper = new Swiper(".productSlider", {
    loop: true,
    slidesPerView: 1,
    effect: "fade",
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    }
});


//Slider 3 use
//-------------------------
const configCategoryProduct = {
    spaceBetween: 30,
    slidesPerView: 3,
    initialSlide: 1,
    centeredSlides: true,
    autoplay: true,
    loop: true,
    autoHeight: false,
    centerInsufficientSlides: true,
    centeredSlidesBounds: true,
    cssMode: false,
    mousewheel: true,
    keyboard: true,
    breakpoints: {
        0: {
            spaceBetween: 30,
            slidesPerView: 1,
            initialSlide: 1,
        },
        768: {
            spaceBetween: 30,
            slidesPerView: 1,
            initialSlide: 1,
        },
        992: {
            spaceBetween: 30,
            slidesPerView: 3,
            initialSlide: 1,
        }
    },
    navigation: {
        nextEl: ".slider-produktsiya .swiper-button-next",
        prevEl: ".slider-produktsiya .swiper-button-prev"
    }
};
let customProductSwiper = new Swiper(".slider-produktsiya", configCategoryProduct);
//-------------------------


//CATEGORY SLIDER
//loop4
const configCPS_big = {
    spaceBetween: 60,
    loop: false,
    slidesPerView: "auto",
    allowTouchMove: true,
    mousewheel: true,
    slideToClickedSlide: true,
    centeredSlides: false,
    // on: {
    //     touchEnd: function (event) {
    //         setTimeout(function () {
    //             let getId = $(".swiper-slide-active .category-button").data('id');
    //             $(".data-text").removeClass('active');
    //             $("#"+getId).addClass("active");
    //         }, 175);
    //     },
    //
    // },
    breakpoints: {
        0: {
            spaceBetween: 30,
        },
        768: {
            spaceBetween: 30,
        },
        992: {
            spaceBetween: 60,
        }
    },
    navigation: {
        nextEl: '.categorySwiper .slider-next',
        prevEl: '.categorySwiper .slider-prev',
    }
};
let CPSwiper = new Swiper('.categorySwiper', configCPS_big);

//click on slider item
$(".category-button").click(function(){
    let getId = $(this).data('key');
    $(".category-button").removeClass("active");
    $(".data-text").removeClass('active');
    $(this).addClass('active');
    $("#tab"+getId).addClass("active");
});

// navigation
function slideTo(navigation, event){
    setTimeout(function() {

        let lengthSlider = CPSwiper.slides.length;

        let currentCategory = $('.category-button.active').data('key');
        let listTabs = $(".swiper-slide .category-button");
        $(".category-button").removeClass("active");
        $(".data-text").removeClass('active');

        let setIndex = currentCategory;
       // console.log('before', setIndex);

        if(navigation == "next"){
            if(setIndex != lengthSlider - 1){
                setIndex = currentCategory + 1;
                $(".categorySwiper .slider-prev").removeClass('disabled');

            }else{
                event.preventDefault();
                $(".categorySwiper .slider-next").addClass('disabled');
            }
        }else{
            if(setIndex != 0){
                setIndex = currentCategory - 1;
                $(".categorySwiper .slider-next").removeClass('disabled');
            }else{
                event.preventDefault();
                $(".categorySwiper .slider-prev").addClass('disabled');
            }

        }
   //     console.log('current', setIndex);


        [...listTabs].forEach(function (item) {
            let getCurrentValue = item.getAttribute("data-key");
            if(setIndex == getCurrentValue){
                item.classList.add('active');
            }
        });

        $("#tab"+setIndex).addClass("active");



        // if($(this).hasClass('swiper-button-disabled')){
        //     e.preventDefault();
        // }else{
        //
        // }

    }, 175);
}
function initPrevStatus(){
    let currentCategory = $('.category-button.active').data('key');
    if(currentCategory == 0){
        $(".categorySwiper .slider-prev").addClass('disabled');
    }
}

$(".categorySwiper .slider-next").click(function(e){
    slideTo('next', e);
});
$(".categorySwiper .slider-prev").click(function(e){
    slideTo('prev' , e);
});

initPrevStatus();





//___________HOME PAGE ___________

// ---------Welcome  Slider Swiper
let swiper = new Swiper(".welcome", {
    cssMode: true,
    loop: true,
    slidesPerView: 1,
    slidesPerColumn: 1,
    effect: "creative",
    navigation: {
        nextEl: ".welcome .swiper-button-next",
        prevEl: ".welcome .swiper-button-prev",
    },
    pagination: {
        el: ".welcome .swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
});


// ---------Filter Slider Swiper
const config = {
    spaceBetween: 30,
    slidesPerView: 3,
    initialSlide: 1,
    centeredSlides: true,
    autoplay: true,
    loop: true,
    autoHeight: false,
    centerInsufficientSlides: true,
    centeredSlidesBounds: true,
    cssMode: false,
    mousewheel: true,
    keyboard: true,

    breakpoints: {
        0: {
            spaceBetween: 30,
            slidesPerView: 1,
            initialSlide: 1,
        },
        768: {
            spaceBetween: 30,
            slidesPerView: 1,
            initialSlide: 1,
        },
        992: {
            spaceBetween: 30,
            slidesPerView: 3,
            initialSlide: 1,
        }
    },
    navigation: {
        nextEl: ".slider-product .swiper-button-next",
        prevEl: ".slider-product .swiper-button-prev"
    }
};


let filterSwiper = new Swiper(".slider-product", config);

const filters = document.querySelectorAll(".filter-categories span");
function updateFilter(activeFilter) {
    const filters = document.querySelectorAll(".filter-categories span");
    //console.log(filters.length)
    if(filters.length > 0){
        if (!activeFilter) {
            filters[0].classList.add("active");
            activeFilter = filters[0];
        }
        const filter = activeFilter.innerText.toLowerCase();
        Array.prototype.forEach.call(filters, function (el) {
            if (el === activeFilter) {
                el.classList.add("active");
            } else {
                el.classList.remove("active");
            }
        });
    }
}
Array.prototype.forEach.call(filters, function (_filter) {
    Array.prototype.forEach.call(
        document.querySelectorAll(
            ".slider-product [data-filter]:not([data-filter='category_0'])"
        ),
        (el) => {
            //el.classList.add("non-swiper-slide");
            el.classList.remove("swiper-slide");
            el.removeAttribute("style");
        }
    );
    filterSwiper.destroy();
    filterSwiper = new Swiper(".slider-product", config);

    _filter.addEventListener("click", function (e) {
        const self = e.target;
        const filter = self.getAttribute("data-filter").toLowerCase();
        updateFilter(self);
        Array.prototype.forEach.call(
            document.querySelectorAll(
                ".slider-product [data-filter]:not([data-filter='" + filter + "'])"
            ),
            (el) => {
               // el.classList.add("non-swiper-slide");
                el.classList.remove("swiper-slide");
                el.removeAttribute("style");
            }
        );
        Array.prototype.forEach.call(
            document.querySelectorAll(
                ".slider-product [data-filter='" + filter + "']"
            ),
            (el) => {
                //el.classList.remove("non-swiper-slide");
                el.classList.add("swiper-slide");
                el.removeAttribute("style");
            }
        );
        filterSwiper.destroy();
        filterSwiper = new Swiper(".slider-product", config);
    });
});
updateFilter(null);



