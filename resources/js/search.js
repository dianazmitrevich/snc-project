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

$(".search__form").submit(function (e) {
    e.preventDefault();
    let th = $(this);
    $.ajax({
        url: "../search.php",
        type: "POST",
        data: th.serialize(),
        success: function (e) {
            const result = JSON.parse(e);

            const searchContainer = document.querySelector(".search__result ol");
            const errorContainer = document.querySelector(".search__err");

            searchContainer.innerHTML = "";
            errorContainer.innerHTML = "";

            if (result.length > 0) {
                result.forEach(element => {
                    searchContainer.append(createResultItem(element));
                });
            } else {
                errorContainer.innerHTML = "No projects suitable for the search were found.";
            }

            function createResultItem(data) {
                const li = document.createElement('li');
                li.classList.add('result');

                const nameDiv = document.createElement('div');
                nameDiv.classList.add('result__name');

                const nameLink = document.createElement('a');
                nameLink.href = '/portfolio/' + data["alias"];
                nameLink.textContent = data["name"];

                nameDiv.appendChild(nameLink);
                li.appendChild(nameDiv);

                const descDiv = document.createElement('div');
                descDiv.classList.add('result__desc');
                descDiv.innerHTML = data["desc"];

                li.appendChild(descDiv);

                return li;
            }
        },
        error: function () {
            alert("message was not sent");
        }
    });
});