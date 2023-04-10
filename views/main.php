<?php
   require 'chunk/header.php';
?>
<link rel="stylesheet" href="/resources/css/main.css">
</head>

<body>
    <div class=" g-wrap">
        <div class="outer-bg">
            <header class="header">
                <div class="header__desktop">
                    <div class="container">
                        <div class="header__row">
                            <div class="header__col">
                                <div class="header__col-logo">
                                    <a href="/"><img src="/resources/images/logo.svg" alt="S&C"></a>
                                </div>
                                <div class="header__col-text">Digital marketing company</div>
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
                        <h1 style="visibility: hidden; display: none;">Strategic and Creative group</h1>
                        <div class="hero">
                            <div class="hero__wrapper">
                                <div class="hero__title h2">We build and grow your business</div>
                                <div class="hero__buttons">
                                    <div class="hero__button">
                                        <a href="/portfolio" class="btn-main">Portfolio</a>
                                    </div>
                                    <div class="hero__button">
                                        <a href="#services-anchor" class="btn-main">Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="works">
                            <div class="works__wrapper">
                                <div class="works__cards"> <?php
                                        foreach ($this->readTable('Projects') as $value):
                                    ?> <div class="works__card">
                                        <a href="/portfolio/<?php echo $value['alias']; ?>">
                                            <div class="card">
                                                <div class="card__wrapper">
                                                    <img src="<?php echo '/controllers/uploads/' . $this->project->getById('Medialibrary', $value['preview_id'])['imageSrc']; ?>"
                                                        alt="S&C">
                                                </div>
                                                <div class="card__row">
                                                    <div class="card__col">
                                                        <div class="card__col-tag">
                                                            <?php echo $this->getServiceById($value['service_id'])['name']; ?>
                                                        </div>
                                                    </div>
                                                    <div class="card__col">
                                                        <div class="card__col-name"><?php echo $value['name']; ?></div>
                                                        <div class="card__col-button">View full case</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div> <?php endforeach; ?> </div>
                                <div class="works__button" id="services-anchor">
                                    <span class="h4">View more works</span>
                                    <div class="circle-wrap">
                                        <div class="circle"></div>
                                        <div class="arrow">
                                            <img src="/resources/images/arrow-btn.svg" alt="More">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services">
                            <div class="services__wrapper">
                                <div class="services__title h2"><a href="/portfolio">Services</a></div>
                                <div class="services__col"> <?php
                                        $_serviceCount = 0;
                                        foreach ($this->readTable('Services') as $value):
                                    ?> <div class="services__col-item">
                                        <div class="item">
                                            <div class="item__num">0<?php echo ++$_serviceCount; ?></div>
                                            <div class="item__name"><?php echo $value['name']; ?></div>
                                            <div class="item__button"></div>
                                        </div>
                                    </div> <?php endforeach; ?> </div>
                            </div>
                        </div>
                        <div class="contact-us">
                            <div class="contact-us__wrapper">
                                <div class="contact-us__button">
                                    <span class="h3">Contact us</span>
                                    <div class="circle-wrap">
                                        <div class="circle"></div>
                                        <div class="arrow"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team">
                            <div class="team__fill"></div>
                            <div class="team__wrapper" id="team-anchor">
                                <div class="team__title h2">Our team</div>
                                <div class="team__cards"> <?php
                                        foreach ($this->readTable('Team') as $value):
                                    ?> <div class="team__card">
                                        <div class="card">
                                            <div class="card__image">
                                                <img src="<?php echo '/controllers/uploads/' . $this->project->getById('Medialibrary', $value['image_id'])['imageSrc']; ?>"
                                                    alt="Team">
                                            </div>
                                            <div class="card__title"><?php echo $value['name']; ?></div>
                                            <div class="card__subtitle"><?php echo $value['position']; ?></div>
                                        </div>
                                    </div> <?php endforeach; ?> </div>
                            </div>
                        </div>
                        <!-- <div class="socials">
                            <div class="socials__wrapper">
                                <div class="socials__title h2">Follow our socials</div>
                                <div class="socials__cards">
                                    <div class="socials__card">
                                        <img src="/resources/images/post-1.png" alt="S&C Group">
                                    </div>
                                    <div class="socials__card">
                                        <img src="/resources/images/post-2.png" alt="S&C Group">
                                    </div>
                                    <div class="socials__card">
                                        <img src="/resources/images/post-3.png" alt="S&C Group">
                                    </div>
                                    <div class="socials__card">
                                        <img src="/resources/images/post-2.png" alt="S&C Group">
                                    </div>
                                </div>
                            </div>
                        </div> -->
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
    <script src="/resources/js/script.js"></script> <?php
   require 'chunk/footer.php';
?>