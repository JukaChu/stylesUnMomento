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