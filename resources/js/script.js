'use strict';

// $(".socials__cards").slick({
//     initialSlide: 0,
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     arrows: false,
//     swipe: false,
//     responsive: [
//         {
//             breakpoint: 767,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//                 swipe: true,
//                 autoplay: true,
//                 autoplaySpeed: 1200,
//                 infinite: true,
//             }
//         },
//         {
//             breakpoint: 575,
//             settings: {
//                 slidesToShow: 1,
//                 speed: 2500,
//                 autoplay: true,
//                 autoplaySpeed: 0,
//                 swipe: false,
//                 infinite: true,
//                 cssEase: "linear",
//             }
//         }
//     ]
// });

const closeButton = document.querySelector(".burger-menu__buttons-close");
const openButton = document.querySelector(".header__col-burger").querySelector(".btn-round");
const burgerMenu = document.querySelector(".burger-menu");
const burgerLinks = document.querySelectorAll(".burger-menu__link");

openButton.addEventListener("click", () => {
    burgerMenu.classList.add("show");
});
closeButton.addEventListener("click", () => {
    burgerMenu.classList.remove("show");
});
burgerLinks.forEach(element => {
    element.addEventListener("click", () => {
        burgerMenu.classList.remove("show");
    })
});