<?php
   require 'chunk/header.php';
?>
<link rel="stylesheet" href="/resources/css/search.css">
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
                            <div class="banner__title h2">Seach page</div>
                            <div class="banner__subtitle">Search is performed by keywords from the description of projects. Please, specify them separated by commas.</div>
                        </div>
                    </div>
                    <div class="search">
                        <div class="search__wrapper">
                            <form action="search.php" class="search__form" method="post">
                                <input type="text" name="keywords" required placeholder="Type your words here">
                                <button type="submit" name="search-btn" class="btn-main">Search</button>
                            </form>
                            <div class="search__err"></div>
                            <div class="search__result">
                                <ol>
                                </ol>
                            </div>
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
<script src="/resources/js/search.js"></script>

<?php
    require 'chunk/footer.php';
?>