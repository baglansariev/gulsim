<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="header-socials">
                    <a href="https://facebook.com/gulsim.dilmanova">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://wa.me/77786696628">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://instagram.com/gulsimdilmanova">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="header-contacts">
                    <a href="mailto:dilmanova.gulsim@bk.ru">
                        <i class="fas fa-envelope"></i>
                        <span>dilmanova.gulsim@bk.ru</span>
                    </a>
                    <a href="tel:+77785766626">
                        <i class="fas fa-mobile-alt"></i>
                        <span>+ 7 778 669 66 28</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <a href="" class="main-logo">
                <img src="/public/images/main-logo.png" alt="">
            </a>
            <?php if(isset($desktop_menu)) echo $desktop_menu ?>
            <button id="appointment" class="gen-btn main-btn" type="button" onclick="location.href='https://wa.me/77786696628'">Записаться</button>
            <span class="mobile-burger">
                <i class="fas fa-bars"></i>
            </span>
            <?php if(isset($mobile_menu)) echo $mobile_menu ?>
        </div>
    </div>
</header>