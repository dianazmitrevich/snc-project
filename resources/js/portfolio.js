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

$(".remove-filter-btn").click(function (e) {
    location.reload();
});

$(".filter__form form").submit(function (e) {
    e.preventDefault();
    let th = $(this);
    $.ajax({
        url: "../filter.php",
        type: "POST",
        data: th.serialize(),
        success: function (e) {
            const result = JSON.parse(e);

            const cardsContainer = document.querySelector(".cards__wrapper");
            const projectsList = document.querySelector(".projects-list");
            cardsContainer.innerHTML = "";

            result[0].forEach(element => {
                cardsContainer.append(createCard(element));
            });

            projectsList.setAttribute("value", result[1]);

            function createCard(data) {
                const card = document.createElement('div');
                card.classList.add('cards__item');

                const link = document.createElement('a');
                link.href = `/portfolio/${data["alias"]}`;

                const item = document.createElement('div');
                item.classList.add('item');

                const wrapper = document.createElement('div');
                wrapper.classList.add('item__wrapper');

                const image = document.createElement('img');
                image.src = data["imageSrc"];
                image.alt = 'S&C';

                const row = document.createElement('div');
                row.classList.add('item__row');

                const tag = document.createElement('div');
                tag.classList.add('item__row-tag');
                tag.textContent = data["service"];

                const name = document.createElement('div');
                name.classList.add('item__row-name');
                name.textContent = data["name"];

                const btn = document.createElement('div');
                btn.innerHTML = data["likes"];
                btn.classList.add('item__row-btn');

                const btnImg = document.createElement('img');
                btnImg.src = '/resources/images/like-icon-light.svg';
                btnImg.alt = 'Likes';

                btn.appendChild(btnImg);
                row.appendChild(tag);
                row.appendChild(name);
                row.appendChild(btn);
                wrapper.appendChild(image);
                item.appendChild(wrapper);
                item.appendChild(row);
                link.appendChild(item);
                card.appendChild(link);

                return card;
            }
        },
        error: function () {
            alert("message was not sent");
        }
    });
});

let filterMenuBtn = document.querySelector(".open-filter-menu");
let filterMenu = document.querySelector(".filter__form");

filterMenuBtn.addEventListener("click", () => {
    let item = filterMenu.classList;

    item.contains('show-filter') ? item.remove("show-filter") : item.add("show-filter");
    filterMenuBtn.innerHTML = item.contains("show-filter") ? "Close filter tab" : "Open filter tab";
});