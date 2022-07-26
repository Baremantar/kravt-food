<section class="container slider">
    <div class="splide background">
        <div class="splide__track">
            <ul class="splide__list">
				<?php foreach ( get_field( 'main-section_1' )['main-slider-data'] as $key => $item ) { ?>
                    <li class="splide__slide">
                        <img src="<?= $item['photo']['url'] ?>">
                    </li>
				<?php } ?>
            </ul>
        </div>
        <ul class="splide__pagination">
        </ul>
    </div>
    <div class="content">
		<?php foreach ( get_field( 'main-section_1' )['main-slider-data'] as $key => $item ) { ?>
            <h1 data-slide="<?= $key ?>"><?= $item['head'] ?></h1>
		<?php } ?>
		<?= get_field( 'main-section_1' )['paragraph'] ?>

        <div class="splide mini-slider">
            <div class="splide__track">
                <ul class="splide__list">
					<?php foreach ( get_field( 'main-section_1' )['second-slider-data'] as $key => $item ) { ?>
                        <li class="splide__slide">
                            <h4><?= $item['head'] ?></h4>
							<?= $item['description'] ?>
                            <img src="<?= $item['image']['url'] ?>" alt="<?= $item['head'] ?>">
                        </li>
					<?php } ?>
                </ul>
            </div>
        </div>
        <button class="choice">
            <?= file_get_contents( get_stylesheet_directory() . '/src/svg/Arrow1.svg' ) ?></br>
            Подобрать</br>рацион
        </button>
    </div>
</section>
