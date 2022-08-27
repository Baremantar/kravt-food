<<<<<<< HEAD:wp-content/themes/kravt-food/components/home/uncertainty.php
<?php
?>
<section class="container-smaller uncertainty">
    <div class="wrapper">
        <div><p>Не знаете, с чего начать?</p>
            <p>Вы всегда можете написать нам, и мы</br>
                с радостью ответим на все вопросы!</p>
        </div>
        <div class="manager">
            <div class="manager-person">
                <img src="<?= get_field('main-section_3')['image']['url'] ?>" alt="manager">
			    <?= get_field('main-section_3')['text'] ?>
            </div>
            <div class="manager-link">
                <a href="<?= get_field('main-section_3')['tg_link'] ?>"><?= file_get_contents( get_stylesheet_directory() . '/src/svg/telegram.svg' ) ?></a>
                <a href="<?= get_field('main-section_3')['wa_link'] ?>"><?= file_get_contents( get_stylesheet_directory() . '/src/svg/whatsapp.svg' ) ?></a>
            </div>
        </div>
        <div class="wheel">
            <img src='<?= get_template_directory_uri().'/build/img/dishes1.png'?>' alt="kravt-food">
            <?= file_get_contents(get_template_directory_uri().'/src/svg/rotate-words4.svg') ?>
        </div>
    </div>
</section>
=======
<?php
?>
<section class="container-smaller uncertainty">
    <div class="wrapper">
        <div><p>Не знаете, с чего начать?</p>
            <p>Вы всегда можете написать нам, и мы</br>
                с радостью ответим на все вопросы!</p>
        </div>
        <div class="manager">
            <div class="manager-person">
                <img src="<?= get_field('main-section_3')['image']['url'] ?>" alt="manager">
			    <?= get_field('main-section_3')['text'] ?>
            </div>
            <div class="manager-link">
                <a href="<?= get_field('main-section_3')['tg_link'] ?>"><?= file_get_contents( get_stylesheet_directory() . '/src/svg/telegram.svg' ) ?></a>
                <a href="<?= get_field('main-section_3')['wa_link'] ?>"><?= file_get_contents( get_stylesheet_directory() . '/src/svg/whatsapp.svg' ) ?></a>
            </div>
        </div>
        <div class="wheel">
            <img src='<?= get_template_directory_uri().'/build/img/dishes1.png'?>' alt="kravt-food">
            <?= file_get_contents(get_template_directory_uri().'/src/svg/rotate-words4.svg') ?>
        </div>
    </div>
</section>
>>>>>>> 20e18c58d6330a7a5da435d4f1847f46e99bf2de:wp-content/themes/kravt-food/components/uncertainty.php
