'use strict';

$(".popup__images").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    fade: true,
    prevArrow: "<div class='popup-prev'><img src='/resources/images/arr-portfolio-light.svg'></div>",
    nextArrow: "<div class='popup-next'><img src='/resources/images/arr-portfolio-light.svg'></div>",
});

const popup = document.querySelector(".images__popup");
const images = document.querySelectorAll(".image__card");

document.querySelector(".popup__close").addEventListener("click", () => {
    popup.classList.remove("show");
});

images.forEach(element => {
    element.addEventListener("click", () => {
        popup.classList.add("show");
    });
});

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