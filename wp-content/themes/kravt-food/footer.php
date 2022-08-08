<footer>
    <div class="wrapper">
        <div class="top">
            <div class="block">
                <a href="/" class="logo">
					<?= file_get_contents( get_template_directory().'/src/svg/logo-footer.svg') ?>
                </a>
                <div>
                    <a href="<?= get_field( 'site_phone', 'options' ) ?>"
                       class="phone"><?= get_field( 'site_phone', 'options' ) ?></a>
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
                            <a href="">Сбалансированное питание</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="block">
				<?php
				wp_nav_menu( [
					'theme_location'  => '',
					'menu'            => 'menu-header',
					'container'       => 'nav',
					'container_class' => 'footer-nav',
					'container_id'    => '',
					'menu_class'      => '',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				] );
				?>
            </div>
            <div class="block">
                <button><?= file_get_contents( get_template_directory() . '/src/svg/Arrow2.svg' ) ?>
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
                    <a href=""><?= file_get_contents( get_template_directory() . '/src/svg/instagram.svg' ) ?></a>
                    <a href=""><?= file_get_contents( get_template_directory() . '/src/svg/telegram.svg' ) ?></a>
                    <a href=""><?= file_get_contents( get_template_directory() . '/src/svg/vkontakte.svg' ) ?></a>
                    <a href=""><?= file_get_contents( get_template_directory() . '/src/svg/whatsapp.svg' ) ?></a>
                    <a href=""><?= file_get_contents( get_template_directory() . '/src/svg/facebook.svg' ) ?></a>
                </div>
            </div>
        </div>
        <div class="bottom">
            <span>© 2022 KravtFood — здоровое питание с доставкой</span>
            <div class="block">
                <span>Дизайн и разработка</span>
				<?= file_get_contents( get_template_directory() . '/src/svg/affarts-logo.svg' ) ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>