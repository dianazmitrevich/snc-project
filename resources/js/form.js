'use strict';

let inputFile = document.getElementById("file");
let button = document.getElementById("file-button");
let filesContainer = document.querySelector(".field-files").querySelector("ol");
let files = [];

inputFile.addEventListener("change", () => {
    let newFiles = [];
    for (let index = 0; index < inputFile.files.length; index++) {
        let file = inputFile.files[index];
        newFiles.push(file);
        files.push(file);
    }

    newFiles.forEach(file => {
        let fileElement = document.createElement("li");
        fileElement.innerHTML = file.name;
        fileElement.dataset.file;
        filesContainer.append(fileElement);

        // fileElement.click(function (event) {
        //     let fileElement = $(event.target);
        //     let indexToRemove = files.indexOf(fileElement.data('fileData'));
        //     fileElement.remove();
        //     files.splice(indexToRemove, 1);
        // });
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

$(".contact__form form").submit(function (e) {
    e.preventDefault();
    let th = $(this);
    $.ajax({
        url: "../controllers/foo.php",
        type: "POST",
        data: th.serialize(),
        success: function () {
            alert("ok!");
        },
        error: function () {
            alert("message was not sent");
        }
    });
});