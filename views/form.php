<?php
   require 'chunk/header.php';
?>
<link rel="stylesheet" href="/resources/css/form.css">
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
                                                <a href="#" class="btn-transparent">Start a project</a>
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
            <div class="g-content">
                <div class="contact">
                    <div class="container">
                        <div class="contact__wrapper">
                            <div class="contact__title h3">Hi. Tell us about your project.</div>
                            <div class="contact__subtitle">Fill out our form below or <a
                                    href="mailto:notfrenron@gmail.com">send us an email.</a></div>
                            <div class="contact__form">
                                <div class="form">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form__field">
                                            <input type="text" pattern="^[a-zA-Z0-9\s_-,\.]{3,50}$" name="name" required
                                                placeholder="Your Name" maxlength="50">
                                            <label for="name"></label>
                                        </div>
                                        <div class="form__field">
                                            <input type="text" pattern="^[a-zA-Z0-9\s_-,\.]{3,50}$" name="company"
                                                required placeholder="Company Name" maxlength="50">
                                            <label for="company"></label>
                                        </div>
                                        <div class="form__field">
                                            <input type="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" name="email" required
                                                placeholder="E-Mail">
                                            <label for="email"></label>
                                        </div>
                                        <div class="form__field">
                                            <select name="budget">
                                                <option value="">Budget</option>
                                                <option value="1000-2000$">1000 - 2000$</option>
                                                <option value="2000-5000$">2000 - 5000$</option>
                                                <option value="5000-10000$">5000 - 10000$</option>
                                                <option value="10000+$">10000+$</option>
                                            </select>
                                        </div>
                                        <div class="form__field">
                                            <input type="tel" pattern="^\+\d+$" name="phone" required
                                                placeholder="Phone">
                                            <label for="phone"></label>
                                        </div>
                                        <div class="form__field">
                                            <input type="text" name="social" placeholder="Telegram, Whatsapp etc.">
                                            <label for="social"></label>
                                        </div>
                                        <div class="form__field">
                                            <div class="field-wrap">
                                                <input type="file" name="file[]" id="file" multiple="multiple">
                                                <span>Any docs to attach?</span>
                                                <label for="file" class="btn-main" id="file-button">Select a
                                                    file</label>
                                            </div>
                                            <div class="field-files">
                                                <ol></ol>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <textarea name="about-project" cols="30" rows="1"
                                                placeholder="Tell us about your project (Scope, timeline, budget, etc.)"></textarea>
                                        </div>
                                        <div class="form__field">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                                            <input type="submit" value="Submit">
                                        </div>
                                    </form>
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
                                        <div class="menu__item"><a href="/#services-anchor">Services</a>
                                        </div>
                                        <div class="menu__item"><a href="/#team-anchor">Our Team</a></div>
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
<script src="/resources/js/form.js"></script>
<?php
   require 'chunk/footer.php';
?>