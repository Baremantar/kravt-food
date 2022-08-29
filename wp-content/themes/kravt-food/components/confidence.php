<?php
$data = get_field( 'main-section_11' );
?>

<section class="container-smaller confidence">
    <div class="splide reviews">
        <div class="splide__track">
            <div class="splide__arrows splide__arrows--ltr">
                <button
                        class="splide__arrow splide__arrow--prev"
                        type="button"
                        aria-label="Previous slide"
                        aria-controls="splide01-track"
                >
                        <img src="<?= get_template_directory_uri().'/src/img/arrow.png'?>" alt="arrow">
                </button>
                <button
                        class="splide__arrow splide__arrow--next"
                        type="button"
                        aria-label="Next slide"
                        aria-controls="splide01-track"
                >
                    <img src="<?= get_template_directory_uri().'/src/img/arrow.png' ?>" alt="arrow">
                </button>
            </div>
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="grid-item">
                        <div class="head">
							<?= $data['slider']['0']['slider-item']['Head'] ?>
                        </div>
                        <div class="card">
                            <img src="<?= $data['slider']['0']['slider-item']['person'][0]['image']['url'] ?>"
                                 alt="person">
                            <div class="bottom-area">
                                <div>
                                    <span><?= $data['slider']['0']['slider-item']['person'][0]['name'] ?></span>
                                    <span><?= $data['slider']['0']['slider-item']['person'][0]['profession'] ?></span>
									<?= $data['slider']['0']['slider-item']['person'][0]['text'] ?>
                                    <span>Читать полностью</span>
                                </div>
                                <div></div>
                            </div>
                            <a href="<?= $data['slider']['0']['slider-item']['person'][0]['link'] ?>">
								<?= file_get_contents( get_template_directory() . '/src/svg/instagram.svg' ) ?>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="card">
                            <img src="http://kravt-food.ru/wp-content/uploads/2022/08/austin-distel-h1RW-NFtUyc-unsplash-1.png"
                                 alt="person">
                            <div class="bottom-area">
                                <div>
                                    <span><?= $data['slider']['0']['slider-item']['person'][1]['name'] ?></span>
                                    <span><?= $data['slider']['0']['slider-item']['person'][1]['profession'] ?></span>
									<?= $data['slider']['0']['slider-item']['person'][1]['text'] ?>
                                    <span>Читать полностью</span>
                                </div>
                                <div></div>
                            </div>
                            <a href="<?= $data['slider']['0']['slider-item']['person'][1]['link'] ?>">
								<?= file_get_contents( get_template_directory() . '/src/svg/telegram.svg' ) ?>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="card">
                            <div class="top">
                                <div class="image">
                                    <img src="<?= $data['slider']['0']['slider-item']['person'][2]['image']['url'] ?>"
                                         alt="">
                                    <a href="<?= $data['slider']['0']['slider-item']['person'][2]['link'] ?>"><?= file_get_contents( get_template_directory() . '/src/svg/instagram.svg' ) ?></a>
                                </div>
                                <div class="head">
                                    <span><?= $data['slider']['0']['slider-item']['person'][2]['name'] ?></span>
                                    <span><?= $data['slider']['0']['slider-item']['person'][2]['profession'] ?></span>
                                </div>
                            </div>
                            <div class="bottom">
								<?= $data['slider']['0']['slider-item']['person'][2]['text'] ?>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grid-item">
                        <div class="head">
							<?= $data['slider']['0']['slider-item']['Head'] ?>
                        </div>
                        <div class="card">
                            <img src="<?= $data['slider']['0']['slider-item']['person'][1]['image']['url'] ?>"
                                 alt="person">
                            <div class="bottom-area">
                                <div>
                                    <span><?= $data['slider']['0']['slider-item']['person'][0]['name'] ?></span>
                                    <span><?= $data['slider']['0']['slider-item']['person'][0]['profession'] ?></span>
									<?= $data['slider']['0']['slider-item']['person'][0]['text'] ?>
                                    <span>Читать полностью</span>
                                </div>
                                <div></div>
                            </div>
                            <a href="<?= $data['slider']['0']['slider-item']['person'][0]['link'] ?>">
								<?= file_get_contents( get_template_directory() . '/src/svg/instagram.svg' ) ?>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="card">
                            <img src="<?= $data['slider']['0']['slider-item']['person'][1]['image']['url'] ?>"
                                 alt="person">
                            <div class="bottom-area">
                                <div>
                                    <span><?= $data['slider']['0']['slider-item']['person'][1]['name'] ?></span>
                                    <span><?= $data['slider']['0']['slider-item']['person'][1]['profession'] ?></span>
									<?= $data['slider']['0']['slider-item']['person'][1]['text'] ?>
                                    <span>Читать полностью</span>
                                </div>
                                <div></div>
                            </div>
                            <a href="<?= $data['slider']['0']['slider-item']['person'][1]['link'] ?>">
								<?= file_get_contents( get_template_directory() . '/src/svg/telegram.svg' ) ?>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="card">
                            <div class="top">
                                <div class="image">
                                    <img src="<?= $data['slider']['0']['slider-item']['person'][2]['image']['url'] ?>"
                                         alt="">
                                    <a href="<?= $data['slider']['0']['slider-item']['person'][2]['link'] ?>"><?= file_get_contents( get_template_directory() . '/src/svg/instagram.svg' ) ?></a>
                                </div>
                                <div class="head">
                                    <span><?= $data['slider']['0']['slider-item']['person'][2]['name'] ?></span>
                                    <span><?= $data['slider']['0']['slider-item']['person'][2]['profession'] ?></span>
                                </div>
                            </div>
                            <div class="bottom">
								<?= $data['slider']['0']['slider-item']['person'][2]['text'] ?>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
