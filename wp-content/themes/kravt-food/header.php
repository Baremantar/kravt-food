<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <?php wp_head() ?>
</head>

<body>
<header>

    <div class="header-wrapper">
        <a href="/" class="header-logo">
            <?= file_get_contents(get_field('site_logo', 'options')['url']) ?>
        </a>
        <div class="header-city">
            <span class="current">
                <?php
                echo file_get_contents(get_stylesheet_directory() . '/src/svg/location.svg');
                echo get_blog_details(get_site()->blog_id)->blogname;
                echo file_get_contents(get_stylesheet_directory() . '/src/svg/arrow.svg');
                ?>
            </span>
            <div class="hidden">
                <?php
                foreach (get_sites() as $items) { ?>
                    <a href="<?= get_blog_details($items->blog_id)->siteurl ?>"><?= get_blog_details($items->blog_id)->blogname ?></a>
                <?php } ?>
            </div>
        </div>
        <?php
        wp_nav_menu([
            'theme_location' => '',
            'menu' => 'menu-header',
            'container' => 'nav',
            'container_class' => 'header-nav',
            'container_id' => '',
            'menu_class' => '',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 0,
            'walker' => '',
        ]);
        ?>
        <a href="tel:<?= get_field('site_phone', 'options') ?>"
           class="header-phone"><?= get_field('site_phone', 'options') ?></a>
        <button class="header-button">перезвоните мне</button>
    </div>
</header>
