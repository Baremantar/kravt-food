<?php
$data = get_field( 'main-section_8' );
?>

<section class="container specialists">
	<?= $data['head'] ?>
    <div class="splide peoples">
        <div class="splide__track">
            <div class="splide__arrows splide__arrows--ltr">
                <button
                        class="splide__arrow splide__arrow--prev"
                        type="button"
                        aria-label="Previous slide"
                        aria-controls="splide01-track"
                >
					<?= file_get_contents( get_template_directory() . '/src/svg/buttonArrow.svg' ) ?>
                </button>
                <button
                        class="splide__arrow splide__arrow--next"
                        type="button"
                        aria-label="Next slide"
                        aria-controls="splide01-track"
                >
					<?= file_get_contents( get_template_directory() . '/src/svg/buttonArrow.svg' ) ?>
                </button>
            </div>
            <ul class="splide__list">
				<?php foreach ( $data['slider'] as $key => $item ) { ?>
                    <li class="splide__slide" style=" z-index:<?= $key ?>">
						<?php if ( $item['item']['choose'] == 'Изображение' ) { ?>
                            <div class="image">
                                <img src="<?= $item['item']['image']['url'] ?>" alt="person">
                                <div class="description">
									<?= $item['item']['text_img'] ?>
                                </div>
                            </div>
						<?php } else { ?>
                            <div class="text">
                                <div class="description">
									<?= $item['item']['text'] ?>
                                </div>
                            </div>
						<?php } ?>
                    </li>
				<?php } ?>
            </ul>
        </div>
    </div>
</section>
