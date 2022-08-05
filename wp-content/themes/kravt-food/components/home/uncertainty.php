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
        <img class="abs" src='/wp-content/themes/kravt-food/build/img/dw.png' alt="kravt-food">
    </div>
</section>
