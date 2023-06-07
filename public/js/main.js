
const swiper = new Swiper('.swiper', {

    //! Основные настройки 
    direction: 'horizontal', // 'vertical', 'horizontal'
    loop: true, // true - круговой слайдер, false - слайдер с конечными положениями
    speed: 500, // скорость переключения слайдов
    effect: 'coverflow', // cards, coverflow, flip, fade, cube
    // initialSlide: 2, // Начинаем со 2 слайдера
    // freeMode: true, // можно перетаскивать как ленту
    slidesPerView: 3, // кол-во активных слайдов
    // centeredSlides: true, // центрирование слайдов
    
    //! Пагинация (точки)
    pagination: {
        el: '.swiper-pagination',
        clickable: true, // true - Пагинация становится кликабельной
    },

    //! Кнопки вперед и назад 
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    //! Автоматическое перелистывание
    autoplay: {
        delay: 2000, //Задержка перед перелистыванием 1с = 1000мл/с
    },
});

new Accordion('.accordion-container');

// const gallary = new Swiper('.gallary', {

//     //! Основные настройки 
//     direction: 'horizontal', // 'vertical', 'horizontal'
//     loop: true, // true - круговой слайдер, false - слайдер с конечными положениями
//     spaceBetween: 20, // расстояние между слайдами
//     slidesPerView: 3, // кол-во активных слайдов
//     // slidesPerGroup: 3, // кол-во пролистываемых слайдов

//     //! Кнопки вперед и назад 
//     navigation: {
//         nextEl: '.btn-next',
//         prevEl: '.btn-prev',
//     },
//         autoplay: {
//         delay: 1000, //Задержка перед перелистыванием 1с = 1000мл/с
//     },
//     // ! Адаптив слайдера
//     breakpoints: {
//         1251: {
//             spaceBetween: 20,
//             slidesPerView: 3,
//         },

//         951: {
//             spaceBetween: 20,
//             slidesPerView: 2,
//         },

//         0: {
//             spaceBetween: 0,
//             slidesPerView: 1,
//         },
//     },
// });