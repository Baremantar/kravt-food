<?php
function isMobile() {
	return preg_match( "/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"] );
}

;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=7a2e04ce-f605-4303-92cb-16b8dac84aaf&lang=ru_RU"
            type="text/javascript"></script>
	<?php wp_head() ?>
</head>

<body>
<header>
	<?php //if ( isMobile() ) {
	?>
<!--    <div class="header-wrapper">-->
<!--        <a href="/" class="header-logo">-->
			<?php //= file_get_contents( get_field( 'site_logo', 'options' )['mobile']['url'] ) ?>
<!--        </a>-->
<!--        <div class="header-city">-->
<!--            <span class="current">-->
<?php
//                echo file_get_contents( get_stylesheet_directory() . '/src/svg/location.svg' );
//                echo get_blog_details( get_site()->blog_id )->blogname;
//                echo file_get_contents( get_stylesheet_directory() . '/src/svg/arrow.svg' );
//                ?>
<!--            </span>-->
<!--            <div class="hidden">-->
<?php
//				foreach ( get_sites() as $items ) { ?>
<!--                    <a href="--><?php //= get_blog_details( $items->blog_id )->siteurl ?><!--">--><?php //= get_blog_details( $items->blog_id )->blogname ?><!--</a>-->
<!--				--><?php //} ?>
<!--            </div>-->
<!--        </div>-->
<!--        <div class="header-dropdown">-->
			<?php
//			wp_nav_menu( [
//				'theme_location'  => '',
//				'menu'            => 'menu-header',
//				'container'       => 'nav',
//				'container_class' => 'header-nav',
//				'container_id'    => '',
//				'menu_class'      => '',
//				'menu_id'         => '',
//				'echo'            => true,
//				'fallback_cb'     => 'wp_page_menu',
//				'before'          => '',
//				'after'           => '',
//				'link_before'     => '',
//				'link_after'      => '',
//				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//				'depth'           => 0,
//				'walker'          => '',
//			] );
			?>
<!--            <a href="tel:--><?php //= get_field( 'site_phone', 'options' ) ?><!--"-->
<!--               class="header-phone">--><?php //= get_field( 'site_phone', 'options' ) ?><!--</a>-->
<!--            <button class="header-button">перезвоните мне</button>-->
<!--        </div>-->
		<?php
//		} else {
        ?>
        <div class="header-wrapper">
            <a href="/" class="header-logo">
				<?= file_get_contents( get_field( 'site_logo', 'options' )['desktop']['url'] ) ?>
            </a>
            <div class="header-city">
            <span class="current">
                <?php
                echo file_get_contents( get_stylesheet_directory() . '/src/svg/location.svg' );
                echo get_blog_details( get_site()->blog_id )->blogname;
                echo file_get_contents( get_stylesheet_directory() . '/src/svg/arrow.svg' );
                ?>
            </span>
                <div class="hidden">
					<?php
					foreach ( get_sites() as $items ) { ?>
                        <a href="<?= get_blog_details( $items->blog_id )->siteurl ?>"><?= get_blog_details( $items->blog_id )->blogname ?></a>
					<?php } ?>
                </div>
            </div>
			<?php
			wp_nav_menu( [
				'theme_location'  => '',
				'menu'            => 'menu-header',
				'container'       => 'nav',
				'container_class' => 'header-nav',
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
            <a href="tel:<?= get_field( 'site_phone', 'options' ) ?>"
               class="header-phone"><?= get_field( 'site_phone', 'options' ) ?></a>
            <button class="header-button">перезвоните мне</button>
			<?php
//			}
			?>

        </div>
</header>