<?php
   require 'chunk/header.php';
?>
<link rel="stylesheet" href="/resources/css/portfolio.css">
</head>
<div class="g-wrap">
    <div class="outer-bg">
        <header class="header">
            <div class="header__desktop">
                <div class="container">
                    <div class="header__row">
                        <div class="header__col">
                            <div class="header__col-logo">
                                <a href="/"><img src="/resources/images/logo.svg" alt="S&C"></a>
                            </div>
                        </div>
                        <div class="header__col">
                            <div class="header__col-contact">
                                <a href="/contact" class="btn-main">Start a project</a>
                            </div>
                            <div class="header__col-burger">
                                <div class="btn-round"></div>
                                <div class="burger-menu">
                                    <div class="burger-wrap container">
                                        <div class="burger-menu__buttons">
                                            <div class="burger-menu__buttons-contact">
                                                <a href="/contact" class="btn-transparent">Start a project</a>
                                            </div>
                                            <div class="burger-menu__buttons-close">
                                                <div class="btn-round-transparent"></div>
                                            </div>
                                            <div class="burger-menu__buttons-theme">
                                                <div class="btn-round-transparent toggle-theme"></div>
                                            </div>
                                        </div>
                                        <div class="burger-menu__links">
                                            <div class="burger-menu__link">
                                                <a href="/portfolio">Work</a>
                                            </div>
                                            <div class="burger-menu__link">
                                                <a href="/#services-anchor">Services</a>
                                            </div>
                                            <div class="burger-menu__link">
                                                <a href="/">About</a>
                                            </div>
                                            <div class="burger-menu__link">
                                                <a href="/">Blog</a>
                                            </div>
                                            <div class="burger-menu__link">
                                                <a href="/search">Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header__col-theme">
                                <div class="btn-round toggle-theme"></div>
                            </div>
                            <div class="lang-wrap">
                                <div class="header__col-lang">
                                    <div class="btn-wrap show header__col-lang-selected">
                                        <div class="btn-round" data-google-lang="en">EN</div>
                                    </div>
                                    <div class="btn-wrap">
                                        <div class="btn-round" data-google-lang="ru">RU</div>
                                    </div>
                                    <div class="btn-wrap">
                                        <div class="btn-round" data-google-lang="pl">PL</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="g-main" style="padding-top: 117px;">
            <div class="container">
                <div class="g-content">
                    <div class="banner">
                        <div class="banner__wrapper">
                            <div class="banner__title h2">Portfolio</div>
                            <div class="banner__subtitle">Our dedicated creative and marketing teams find complex
                                solutions for companies of any field.</div>
                        </div>
                    </div>
                    <div class="filter">
                        <div class="filter__wrapper">
                            <span class="open-filter-menu">Open filter tab</span>
                            <div class="filter__form">
                                <form class="form">
                                    <div class="form__row">
                                        <?php
                                        $projectTypes = [];
                                        $services = [];

                                        foreach ($this->readTable('Projects') as $value) {
                                            $projectTypes[] = $value['type_id'];
                                            $services[] = $value['service_id'];
                                        }

                                        $projectTypes = array_unique($projectTypes);
                                        $services = array_unique($services);
                                        ?>
                                        <div class="form__col">
                                            <fieldset class="form__item">
                                                <div class="form__title">Project type</div>
                                                <?php
                                                    foreach ($projectTypes as $value) {
                                                    $project = $this->project->getById('ProjectTypes', $value);
                                                ?>
                                                <div class="wrap">
                                                    <input type="checkbox" value="<?php echo $project['id'] ?>" name="type[]" id="type-<?php echo $project['id'] ?>" />
                                                    <label for="type-<?php echo $project['id'] ?>"><?php echo $project['name'] ?></label>
                                                </div>
                                                <?php
                                                    }
                                                ?>
                                            </fieldset>
                                            <fieldset class="form__item">
                                                <div class="form__title">Service</div>
                                                <?php
                                                    foreach ($services as $value) {
                                                    $service = $this->service->getById('Services', $value);
                                                ?>
                                                <div class="wrap">
                                                    <input type="checkbox" value="<?php echo $service['id'] ?>" name="service[]" id="service-<?php echo $service['id'] ?>" />
                                                    <label for="service-<?php echo $service['id'] ?>"><?php echo $service['name'] ?></label>
                                                </div>
                                                <?php
                                                    }
                                                ?>
                                            </fieldset>
                                        </div>
                                        <div class="form__col">
                                            <input type="submit" value="Add filter" class="add-filter-btn" name="add-filter-btn">
                                            <div class="remove-filter">
                                                <div class="btn-round-transparent remove-filter-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sorting">
                        <div class="sorting__wrapper">
                            <div class="sorting__row">
                                <div class="sorting__col">
                                    Sort by popilarity:
                                </div>
                                <div class="sorting__col">
                                    <?php
                                        $idsTemp = $this->readTable('Projects');

                                        foreach ($idsTemp as $value) {
                                            $ids[] = $value['id'];
                                        }
                                    ?>
                                    <form class="sorting__form">
                                        <input type="hidden" class="projects-list" name="projects-list" value="<?php echo implode(',', $ids); ?>">
                                        <input type="radio" name="sort" value="asc" id="asc-sort" class="sort-input" onclick="$(this).closest('form').submit()">
                                        <label for="asc-sort">Ascending</label>
                                        <input type="radio" name="sort" value="desc" id="desc-sort" class="sort-input" onclick="$(this).closest('form').submit()">
                                        <label for="desc-sort">Descending</label>
                                    </form>
                                </div>
                                <script>
                                    $(".sorting__form").submit(function(e) {
                                        e.preventDefault();
                                        let th = $(this);
                                        $.ajax({
                                            url: "../sort.php",
                                            type: "POST",
                                            data: th.serialize(),
                                            success: function(e) {
                                                console.log(e);
                                                const result = JSON.parse(e);

                                                const cardsContainer = document.querySelector(".cards__wrapper");
                                                cardsContainer.innerHTML = "";

                                                result.forEach(element => {
                                                    cardsContainer.append(createCard(element));
                                                });

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
                                            error: function() {
                                                alert("message was not sent");
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="cards__wrapper">
                            <?php
                                foreach ($this->readTable('Projects') as $value):
                            ?>
                            <div class="cards__item">
                                <a href="/portfolio/<?php echo $value['alias']; ?>">
                                    <div class="item">
                                        <div class="item__wrapper">
                                            <img src="<?php echo '/controllers/uploads/' . $this->project->getById('Medialibrary', $value['preview_id'])['imageSrc']; ?>"
                                                alt="S&C">
                                        </div>
                                        <div class="item__row">
                                            <div class="item__row-tag">
                                                <?php echo $this->getServiceById($value['service_id'])['name']; ?></div>
                                            <div class="item__row-name"><?php echo $value['name']; ?></div>
                                            <div class="item__row-btn">
                                                <?php echo $value['likes']; ?><img src="/resources/images/like-icon-light.svg" alt="Likes">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="contact-button">
                        <div class="contact-button__wrapper">
                            <div class="contact-button__title h3">Наve a project? Let's talk</div>
                            <div class="contact-button__button">
                                <span>Contact</span>
                                <div class="circle-wrap">
                                    <div class="empty-circle"></div>
                                    <div class="full-circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="footer__wrapper">
                        <div class="footer__row">
                            <div class="footer__col">
                                <div class="footer__col-logo"></div>
                                <span>Have a project? Let's talk</span>
                                <div class="footer__col-socials">
                                    <a class="instagram-link" href="https://instagram.com/frenron"></a>
                                    <a class="whatsapp-link"
                                        href="https://api.whatsapp.com/message/X3BUVATRZN4XB1?autoload=1&app_absent=0"></a>
                                    <a class="telegram-link" href="https://t.me/bosssncgroup"></a>
                                    <a class="email-link" href="mailto:notfrenron@gmail.com"></a>
                                </div>
                            </div>
                            <div class="footer__col">
                                <div class="footer__col-contact">
                                    <div class="footer__col-title">Get in touch</div>
                                    <a href="tel:+48537567269">+48 537 567 269</a><br>
                                    <a href="tel:+375299184108">+375 299 184 108</a><br>
                                    <a href="mailto:notfrenron@gmail.com">notfrenron@gmail.com</a>
                                </div>
                                <div class="footer__col-menu">
                                    <div class="footer__col-title">Get in touch</div>
                                    <div class="menu">
                                        <div class="menu__item">
                                            <a href="#">Portfolio</a>
                                        </div>
                                        <div class="menu__item"><a href="#services-anchor">Services</a></div>
                                        <div class="menu__item"><a href="#team-anchor">Our Team</a></div>
                                        <div class="menu__item"><a href="#">Contacts</a></div>
                                    </div>
                                    <span>IP S&C Group 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<script src="/resources/js/portfolio.js"></script>

<?php
    require 'chunk/footer.php';
?>