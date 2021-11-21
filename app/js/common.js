let allLazyLoad = [...document.querySelectorAll('.lazyload')];

function allLozadImg() {
    allLazyLoad.forEach((el) => {
        const observer = lozad(el); // passing a `NodeList` (e.g. `document.querySelectorAll()`) is also valid
        observer.observe();
        el.addEventListener('load', () => {
            el.classList.add('is-loaded')
        })
        // if (el.loaded()) {
        //     el.classList.add('is-loaded');
        // }
    })
}

allLozadImg();

window.onscroll = function () {
    scrollFunction();

};
function checkScrollDir() {
    newValue = window.pageYOffset;
    // console.log(window.pageYOffset + ' pageoffset')
    if (oldValue > newValue) {
        // console.log('scroll top?')
        document.querySelector('.header').classList.remove('sticked');
        document.querySelector('.header').classList.add('shadow');
        if (window.pageYOffset <= 50) {
            document.querySelector('.header').classList.remove('sticked');
            document.querySelector('.header').classList.remove('shadow');
        } else {

        }
    } else if (window.pageYOffset <= 50) {
        document.querySelector('.header').classList.remove('sticked');
        document.querySelector('.header').classList.remove('shadow');
    }
    else {
        document.querySelector('.header').classList.add('shadow');
        document.querySelector('.header').classList.add('sticked');

    }


    oldValue = newValue;
}

let oldValue = 0;
let newValue = 0;

function scrollFunction() {
    checkScrollDir();

}

document.onload = () => {
    scrollFunction();
};


let openSearchBlock = [...document.querySelectorAll('.search-icon')];

function openSearch() {
    if (openSearchBlock.length) {
        openSearchBlock.forEach((btn) => {
            btn.addEventListener('click', () => {
                btn.closest('.header-bottom__search').classList.toggle('opened');
            })
        })
    }
}

openSearch();

let headerBurger = [...document.querySelectorAll('.header-burger')];

function openBurger() {
    if (headerBurger.length) {
        headerBurger.forEach((btn) => {
            btn.addEventListener('click', () => {
                btn.closest('.header').classList.toggle('menu');
                document.body.classList.toggle('no-scroll');
            })
        })
    }

}

openBurger();


//sliders

let homeSlides = [...document.querySelectorAll('.slider-banners')];

function homeSlider() {
    if (!homeSlides.length) {

    } else {
        homeSlides.forEach((sld) => {
            let sldCont = sld.querySelector('.sliders-banners__container');
            let pagin = sld.querySelector('.dots');
            const swiper2 = new Swiper(sldCont, {
                // Optional parameters
                loop: false,
                slidesPerView: 1,
                speed: 600,
                spaceBetween: 25,


                autoplay: {
                    delay: 4000,
                    pauseOnMouseEnter: true,
                },
                pagination: {
                    el: pagin,
                    type: 'bullets',
                    bulletActiveClass: 'active',
                    bulletClass: 'single-dot',
                    bulletElement: 'div',
                    clickable: true,
                    currentClass: 'current',
                    spaceBetween: 2,
                },

            });
        })
    }
}

homeSlider();
let homeSlides2 = [...document.querySelectorAll('.mobile-slider-banners')];

function homeSlider2() {
    if (!homeSlides2.length) {

    } else {
        homeSlides2.forEach((sld) => {
            let sldCont = sld.querySelector('.sliders-banners__container');
            let pagin = sld.querySelector('.dots');
            const swiper2 = new Swiper(sldCont, {
                // Optional parameters
                loop: false,
                slidesPerView: 'auto',
                speed: 600,
                spaceBetween: 20,
                autoplay: {
                    delay: 4000,
                    pauseOnMouseEnter: true,
                },
                pagination: {
                    el: pagin,
                    type: 'bullets',
                    bulletActiveClass: 'active',
                    bulletClass: 'single-dot',
                    bulletElement: 'div',
                    clickable: true,
                    currentClass: 'current',
                    spaceBetween: 2,
                },

            });
        })
    }
}

homeSlider2();


let cardsSlider = [...document.querySelectorAll('.cards-slider')];
function goCardsSlider() {
    if (!cardsSlider.length) {

    } else {
        cardsSlider.forEach((sld) => {
            let sldCont = sld.querySelector('.cards-slider__container');
            let pagin = sld.querySelector('.dots');
            let sldNext = sld.querySelector('.btn-slides--next');
            let sldPrev = sld.querySelector('.btn-slides--prev');
            const swiper2 = new Swiper(sldCont, {
                // Optional parameters
                loop: false,
                spaceBetween: 36,
                slidesPerView: 3,
                slidesPerColumn: 2,
                slidesPerGroup:1,
                slidesPerColumnFill: 'row',
                speed: 600,
                // spaceBetween: 10,
                autoplay: {
                    delay: 4000,
                    pauseOnMouseEnter: true,
                },
                navigation: {
                    nextEl: sldNext,
                    prevEl: sldPrev,
                },
                pagination: {
                    el: pagin,
                    type: 'bullets',
                    bulletActiveClass: 'active',
                    bulletClass: 'single-dot',
                    bulletElement: 'div',
                    clickable: true,
                    currentClass: 'current',
                    spaceBetween: 2,
                },
                breakpoints: {
                    // when window width is >= 320px

                    // when window width is >= 480px
                    620: {
                        loop: false,
                        spaceBetween: 10,
                        slidesPerView: 2,
                        slidesPerColumn: 2,
                        slidesPerGroup:1,
                        slidesPerColumnFill: 'row',

                    },
                },

            });
        })
    }
}

goCardsSlider();



let servicesAll = [...document.querySelectorAll('.cards-section.js-section')];

function serviceSlider() {
    if (!servicesAll.length) {

    } else {
        servicesAll.forEach((sld) => {
            let sldCont = sld.querySelector('.cards-list');
            let pagin = sld.querySelector('.dots');
            let sldNext = sld.querySelector('.btn-slides--next');
            let sldPrev = sld.querySelector('.btn-slides--prev');
            const swiper2 = new Swiper(sldCont, {
                // Optional parameters
                loop: false,
                slidesPerView: 3,
                speed: 600,
                spaceBetween: 36,


                autoplay: {
                    delay: 4600,
                    pauseOnMouseEnter: true,
                },
                navigation: {
                    nextEl: sldNext,
                    prevEl: sldPrev,
                },
                pagination: {
                    el: pagin,
                    type: 'bullets',
                    bulletActiveClass: 'active',
                    bulletClass: 'single-dot',
                    bulletElement: 'div',
                    clickable: true,
                    currentClass: 'current',
                    spaceBetween: 2,
                },
                breakpoints: {
                    // when window width is >= 320px

                    // when window width is >= 480px
                    620: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                },

            });
        })
    }
}

serviceSlider();



let priceBlock = [...document.querySelectorAll('.price-slider.js-slider')];

function priceSlider() {
    if (!priceBlock.length) {

    } else {
        priceBlock.forEach((sld) => {
            let sldCont = sld.querySelector('.price-slider__container');
            let pagin = sld.querySelector('.dots');
            const swiper2 = new Swiper(sldCont, {
                // Optional parameters
                loop: false,
                slidesPerView: 'auto',
                speed: 600,
                spaceBetween: 20,
                autoplay: {
                    delay: 4000,
                    pauseOnMouseEnter: true,
                },
                pagination: {
                    el: pagin,
                    type: 'bullets',
                    bulletActiveClass: 'active',
                    bulletClass: 'single-dot',
                    bulletElement: 'div',
                    clickable: true,
                    currentClass: 'current',
                    spaceBetween: 2,
                },

            });
        })
    }
}

priceSlider();

//sliders


let seoBtn = [...document.querySelectorAll('.button-open-seo')];

function openSeoText() {
    if (seoBtn.length) {
        seoBtn.forEach((btn) => {
            btn.addEventListener('click', () => {
                btn.closest('.seo-block').classList.toggle('open');
            })
        })
    }
}
openSeoText();


let btnFilterPrice = [...document.querySelectorAll('.filter-side-btn')];

function openPriceFil() {
    if (btnFilterPrice.length) {
        btnFilterPrice.forEach((btn) => {
            btn.addEventListener('click', () => {
                btn.closest('.container_prise').classList.toggle('hidden-bar');
            })
        })
    }
}

openPriceFil();

let btnPrice = [...document.querySelectorAll('.price-list__btn')];

function openPriceList() {
    if (btnPrice.length) {
        btnPrice.forEach((btn) => {
            btn.addEventListener('click', () => {
                btn.closest('.block_prise').classList.toggle('hidden-btn');
            })
        })
    }
}

openPriceList();




let beforeAfter = [...document.querySelectorAll('.compare.js-slider')];

function beforeSlider() {
    if (!beforeAfter.length) {

    } else {
        beforeAfter.forEach((sld) => {
            let sldCont = sld.querySelector('.compare__container');
            let pagin = sld.querySelector('.dots');
            let sldNext = sld.querySelector('.btn-slides--next');
            let sldPrev = sld.querySelector('.btn-slides--prev');
            const swiper2 = new Swiper(sldCont, {
                // Optional parameters
                loop: false,
                slidesPerView: 3,
                speed: 600,
                spaceBetween: 36,


                autoplay: {
                    delay: 4600,
                    pauseOnMouseEnter: true,
                },
                navigation: {
                    nextEl: sldNext,
                    prevEl: sldPrev,
                },
                pagination: {
                    el: pagin,
                    type: 'bullets',
                    bulletActiveClass: 'active',
                    bulletClass: 'single-dot',
                    bulletElement: 'div',
                    clickable: true,
                    currentClass: 'current',
                    spaceBetween: 2,
                },
                breakpoints: {
                    // when window width is >= 320px

                    // when window width is >= 480px
                    769: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    525: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                },

            });
        })
    }
}

beforeSlider();


let cardsSliderVideo = [...document.querySelectorAll('.cards-slider--video')];
function goCardsSliderVideo() {
    if (!cardsSliderVideo.length) {

    } else {
        cardsSliderVideo.forEach((sld) => {
            let sldCont = sld.querySelector('.cards-slider__container');
            let pagin = sld.querySelector('.dots');
            let sldNext = sld.querySelector('.btn-slides--next');
            let sldPrev = sld.querySelector('.btn-slides--prev');
            const swiper2 = new Swiper(sldCont, {
                // Optional parameters
                slidesPerView: 'auto',
                slidesPerColumn: 3,
                slidesPerGroup: 1,
                // spaceBetween: 36,
                slidesPerColumnFill: 'row',
                pagination: false,

                breakpoints: {
                    // when window width is >= 320px

                    // when window width is >= 480px
                    970: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    600: {
                        slidesPerView: 'auto',
                        spaceBetween: 0,
                        draggable: false,
                        touchAction: false,
                        allowTouchMove: false,
                        slidesPerColumn: 'auto',
                    },
                },

            });
        })
    }
}

goCardsSliderVideo();