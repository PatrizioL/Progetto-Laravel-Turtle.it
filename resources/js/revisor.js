
const swiper = new Swiper('.revisor-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // effetto cubo
    effect: 'cube',
    cubeEffect: {
    slideShadows: false,
    },
    // Navigation arrows
    // navigation: {
    // nextEl: '.swiper-button-next',
    // prevEl: '.swiper-button-prev',
    // },

    autoplay: {
    delay: 2000,
    },
});