<footer>
    <div class="wrapper">
        <div class="top">
            <div class="block">
                <a href="/" class="logo">
                    <?= file_get_contents(get_template_directory() . '/src/svg/logo-footer.svg') ?>
                </a>
                <div>
                    <a href="<?= get_field('site_phone', 'options') ?>" class="phone"><?= get_field('site_phone', 'options') ?></a>
                    <a href="mail:info@kravtfood.pro" class="email">info@kravtfood.pro</a>
                    <span class="address">г. Санкт-Петербург, ул. Александра Невского 8А</span>
                </div>
            </div>
            <div class="block">
                <nav class="footer-nav">
                    <ul>
                        <li>
                            <a href="">Сбалансированное питание</a>
                        </li>
                        <li>
                            <a href="">Питание для беременных</a>
                        </li>
                        <li>
                            <a href="">Питание для кормящей мамы</a>
                        </li>
                        <li>
                            <a href="">Детское питание</a>
                        </li>
                        <li>
                            <a href="">Индивидуальное меню</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="block">
                <nav class="footer-nav">
                    <ul>
                        <li>
                            <a href="">О компании</a>
                        </li>
                        <li>
                            <a href="">Как это работает</a>
                        </li>
                        <li>
                            <a href="">Доставка</a>
                        </li>
                        <li>
                            <a href="">Отзывы</a>
                        </li>
                        <li>
                            <a href="">Блог</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="block">
                <button><?= file_get_contents(get_template_directory() . '/src/svg/Arrow2.svg') ?>
                    подобрать</br>рацион
                </button>
            </div>
        </div>
        <div class="middle">
            <div class="block">
                <a href="">Реквизиты</a>
                <a href="">Политика конфиденциальности</a>
            </div>
            <div class="block">
                <span>Мы в социальных сетях:</span>
                <div class="social">
                    <a href=""><?= file_get_contents(get_template_directory() . '/src/svg/instagram.svg') ?></a>
                    <a href=""><?= file_get_contents(get_template_directory() . '/src/svg/telegram.svg') ?></a>
                    <a href=""><?= file_get_contents(get_template_directory() . '/src/svg/vkontakte.svg') ?></a>
                    <a href=""><?= file_get_contents(get_template_directory() . '/src/svg/whatsapp.svg') ?></a>
                    <a href=""><?= file_get_contents(get_template_directory() . '/src/svg/facebook.svg') ?></a>
                </div>
            </div>
        </div>
        <div class="bottom">
            <span>© 2022 KravtFood — здоровое питание с доставкой</span>
            <a class="block" href="http://affarts.com">
                <span>Дизайн и разработка</span>
                <?= file_get_contents(get_template_directory() . '/src/svg/affarts-logo.svg') ?>
            </a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>