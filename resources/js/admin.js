'use strict';

const tabs = document.querySelectorAll(".hero__tab span");

tabs.forEach(element => {
    element.addEventListener("click", () => {
        let e = element.parentNode.classList;

        e.contains("hero__tab-selected") ? e.remove("hero__tab-selected") : e.add(
            "hero__tab-selected");
    });
});

const confirmDelete = () => {
    let answer = confirm("Do you really want to delete this item?");
    return answer;
}

const images = document.querySelectorAll(".form-images-multiple .form-image");

images.forEach(element => {
    element.addEventListener("click", () => {
        let data = element.getAttribute("data-id");

        let hiddenInput = element.parentNode.querySelector(
            "input[value='" + data + "']");

        element.parentNode.removeChild(hiddenInput);
        element.parentNode.removeChild(element);

    });
});

const openMedia = document.querySelector(".open-medialibrary");
const bindImages = document.querySelector(".bind-medialibrary");
const popupMedia = document.querySelector(".hero__popup-multiple");
const closeMedia = document.querySelector(".popup__close");
const mediaContainer = document.querySelector(".form-images-multiple");

if (openMedia && closeMedia && bindImages) {
    openMedia.addEventListener("click", () => {
        popupMedia.classList.add("show");
    });

    closeMedia.addEventListener("click", () => {
        popupMedia.classList.remove("show");
    });

    bindImages.addEventListener("click", () => {
        const imagesList = document.querySelectorAll(
            ".popup__images .checkbox-multiple:checked");

        imagesList.forEach(element => {
            let image = document.createElement("img");
            image.src = "/controllers/uploads/" + element
                .getAttribute("data-src");
            image.setAttribute("data-id", element.value);
            image.classList.add("form-image");

            image.addEventListener("click", () => {
                let data = image.getAttribute("data-id");
                let hiddenInput = image.parentNode
                    .querySelector(".form-hidden");

                image.parentNode.removeChild(hiddenInput);
                image.parentNode.removeChild(image);
            });

            let hiddenInput = document.createElement("input");
            hiddenInput.type = "hidden";
            hiddenInput.name = "images[]";
            hiddenInput.value = element.value;
            hiddenInput.classList.add("form-hidden");

            mediaContainer.append(hiddenInput, image);
        });

        popupMedia.classList.remove("show");
    });
}

const openMediaSingle = document.querySelector(".open-medialibrary-single");
const bindImage = document.querySelector(".bind-medialibrary-single");
const popupMediaSingle = document.querySelector(".hero__popup-single");
const closeMediaSingle = document.querySelectorAll(".popup__close")[1];
const mediaSingle = document.querySelector(".form-images-single");

if (openMediaSingle && closeMediaSingle && bindImage) {
    openMediaSingle.addEventListener("click", () => {
        popupMediaSingle.classList.add("show");
    });

    closeMediaSingle.addEventListener("click", () => {
        popupMediaSingle.classList.remove("show");
    });

    bindImage.addEventListener("click", () => {
        const image = document.querySelector(
            ".popup__images .radio-single:checked");

        let imageItem = mediaSingle.querySelector("img");
        let inputItem = mediaSingle.querySelector("input");

        imageItem.src = "/controllers/uploads/" + image.getAttribute("data-src");

        inputItem.value = image.value;

        popupMediaSingle.classList.remove("show");
    });
}