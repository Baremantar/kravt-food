<footer>
    <div class="wrapper">
        <div class="top">
            <div class="block">
                <a href="/" class="logo">
					<?= file_get_contents( get_field( 'site_logo', 'options' )['url'] ) ?>
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
                    </br>подобрать рацион
                </button>
            </div>
        </div>
        <div class="middle"></div>
        <div class="bottom"></div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>