<<<<<<< HEAD
import Splide from '@splidejs/splide';

var dataSlider = {
    1: 'Сбалансированное питание ',
    2: 'Питание для беременных',
    3: 'Питание для кормящей мамы',
    4: 'Детское питание',
    5: 'Индивидуальное меню',
}

function slider() {
    if (document.getElementsByClassName("background")) {
        var mainSlider = new Splide('.background', {
            type: 'loop',
            rewind: true,
            perPage: 1,
            autoplay: true,
            interval: 6000,
            arrows: false,
        });

        document.getElementsByClassName('content')[0].children[0].classList.add('active');

        mainSlider.on('active', () => {
            mainSlider.Components.Slides.get().forEach((elem) => {
                if (elem.slide.classList.contains('is-active') && !elem.slide.classList.contains('splide__slide--clone')) {
                    document.querySelectorAll('[data-slide]').forEach((element) => {
                        element.classList.remove('active')
                    })
                    document.querySelector(`[data-slide="${elem.index}"]`).classList.toggle('active')
                }
            })
        })
        var n = 1;
        mainSlider.on('pagination:mounted', function (data) {
            data.list.classList.add('splide__pagination--custom');
            data.items.forEach(function (item) {
                item.button.textContent = String(dataSlider[n++]);
            });
        });
        mainSlider.mount();
    }

    if (document.getElementsByClassName("mini-slider")) {
        new Splide('.mini-slider', {
            type: 'fade',
            arrows: false,
            rewind: true,

        }).mount();
    }

    if (document.getElementsByClassName("menu")) {
        new Splide('.menu', {
            type: 'slider',
            pagination: false,
            perPage: 4,
            perMove: 1,
        }).mount();
    }

    if (document.getElementsByClassName("peoples")) {
        new Splide('.peoples', {
            type: 'loop',
            pagination: false,
            perPage: 4,
            perMove: 1,
        }).mount();
    }

    if (document.getElementsByClassName("reviews")) {
        new Splide('.reviews', {
            type  : 'fade',
            rewind: true,
        }).mount();
    }
}

=======
import Splide from '@splidejs/splide';

var dataSlider = {
    1: 'Сбалансированное питание ',
    2: 'Питание для беременных',
    3: 'Питание для кормящей мамы',
    4: 'Детское питание',
    5: 'Индивидуальное меню',
}

function slider() {
    if (document.getElementsByClassName("background")) {
        var mainSlider = new Splide('.background', {
            type: 'loop',
            rewind: true,
            perPage: 1,
            autoplay: true,
            interval: 6000,
            arrows: false,
        });

        document.getElementsByClassName('content')[0].children[0].classList.add('active');

        mainSlider.on('active', () => {
            mainSlider.Components.Slides.get().forEach((elem) => {
                if (elem.slide.classList.contains('is-active') && !elem.slide.classList.contains('splide__slide--clone')) {
                    document.querySelectorAll('[data-slide]').forEach((element) => {
                        element.classList.remove('active')
                    })
                    document.querySelector(`[data-slide="${elem.index}"]`).classList.toggle('active')
                }
            })
        })
        var n = 1;
        mainSlider.on('pagination:mounted', function (data) {
            data.list.classList.add('splide__pagination--custom');
            data.items.forEach(function (item) {
                item.button.textContent = String(dataSlider[n++]);
            });
        });
        mainSlider.mount();
    }

    if (document.getElementsByClassName("mini-slider")) {
        new Splide('.mini-slider', {
            type: 'fade',
            arrows: false,
            rewind: true,

        }).mount();
    }

    if (document.getElementsByClassName("menu")) {
        new Splide('.menu', {
            type: 'slider',
            pagination: false,
            perPage: 4,
            perMove: 1,
        }).mount();
    }

    if (document.getElementsByClassName("peoples")) {
        new Splide('.peoples', {
            type: 'loop',
            pagination: false,
            perPage: 4,
            perMove: 1,
        }).mount();
    }

    if (document.getElementsByClassName("reviews")) {
        new Splide('.reviews', {
            type  : 'fade',
            rewind: true,
        }).mount();
    }
}

>>>>>>> 20e18c58d6330a7a5da435d4f1847f46e99bf2de
export default slider();