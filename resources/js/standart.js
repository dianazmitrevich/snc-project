'use strict';

document.addEventListener("DOMContentLoaded", () => {
    init();
});

function init() {
    if (localStorage.getItem("theme")) {
        document.documentElement.setAttribute("theme", "dark");
    } else {
        document.documentElement.removeAttribute("theme");
    }
}

const toggleBtn = document.querySelectorAll(".toggle-theme");

toggleBtn.forEach(element => {
    element.addEventListener("click", function () {
        if (document.documentElement.hasAttribute("theme")) {
            document.documentElement.removeAttribute("theme");
            localStorage.removeItem("theme");
        } else {
            document.documentElement.setAttribute("theme", "dark");
            localStorage.setItem("theme", 1);
        }
    });
});