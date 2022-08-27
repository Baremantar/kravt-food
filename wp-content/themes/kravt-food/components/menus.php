<<<<<<< HEAD:wp-content/themes/kravt-food/components/home/menus.php
<?php
$data = get_field( 'main-section_6' );
?>

<section class="container menus">
    <div class="head">
		<?= $data['head'] ?>
        <span class="menus-info">Меню имеет ознакомительный характер. Блюда и ингридиенты могут быть заменены с учетом индивидуальных потребностей.</span>
    </div>
    <div class="slider">
        <div class="top">
            <div class="data-start">
                <span>Дата начала:</span>
                <span id="data-start">
                    00 июля
                    <?= file_get_contents( get_template_directory() . '/src/svg/calendar.svg' ) ?>
                </span>
            </div>
            <div class="data-days">
                <div>
                    <input type="radio" id="day_0" name="day">
                    <label for="day_0">
                        Пн
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
                <div>
                    <input type="radio" id="day_1" name="day">
                    <label for="day_1">
                        Вт
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
                <div>
                    <input type="radio" id="day_2" name="day">
                    <label for="day_2">
                        Ср
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
                <div>
                    <input type="radio" id="day_3" name="day">
                    <label for="day_3">
                        Чт
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
                <div>
                    <input type="radio" id="day_4" name="day">
                    <label for="day_4">
                        Пт
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
                <div>
                    <input type="radio" id="day_5" name="day">
                    <label for="day_5">
                        Сб
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
                <div>
                    <input type="radio" id="day_6" name="day">
                    <label for="day_6">
                        Вс
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
            </div>
            <div class="data-amount">
                <span>
                    <strong>
                        4
                    </strong>
                    приёма
                </span>
                <span>
                    <strong>
                        5
                    </strong>
                    блюд
                </span>
            </div>
        </div>
        <div class="bottom">
            <div class="splide menu">
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
                            <img src="<?= get_template_directory_uri().'/src/img/arrow.png'?>" alt="arrow">
                        </button>
                    </div>
                    <ul class="splide__list">
						<?php foreach ( $data['menus'] as $item ) {
							foreach ( $item['item'] as $subItem ) { ?>
                                <li class="splide__slide">
                                    <div class="wrapper-card">
                                        <img src="<?= $subItem['cards']['image']['url'] ?>" alt="dishes">
                                        <div class="text">
                                            <span data-text="<?= $subItem['cards']['meal'] ?>"><?= $subItem['cards']['meal'] ?></span>
											<?= $subItem['cards']['title'] ?>
                                            <div>
                                                <span>
                                                    <?= $subItem['cards']['callories'] ?> Ккал, <?= $subItem['cards']['gram'] ?> г.
                                                </span>
                                                <button>Подробнее</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
							<?php }
						} ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
=======
<?php
$data = get_field( 'main-section_6' );
?>

<section class="container menus">
    <div class="head">
		<?= $data['head'] ?>
        <span class="menus-info">Меню имеет ознакомительный характер. Блюда и ингридиенты могут быть заменены с учетом индивидуальных потребностей.</span>
    </div>
    <div class="slider">
        <div class="top">
            <div class="data-start">
                <span>Дата начала:</span>
                <span id="data-start">
                    00 июля
                    <?= file_get_contents( get_template_directory() . '/src/svg/calendar.svg' ) ?>
                </span>
            </div>
            <div class="data-days">
                <div>
                    <input type="radio" id="day_0" name="day">
                    <label for="day_0">
                        Пн
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
                <div>
                    <input type="radio" id="day_1" name="day">
                    <label for="day_1">
                        Вт
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
                <div>
                    <input type="radio" id="day_2" name="day">
                    <label for="day_2">
                        Ср
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
                <div>
                    <input type="radio" id="day_3" name="day">
                    <label for="day_3">
                        Чт
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
                <div>
                    <input type="radio" id="day_4" name="day">
                    <label for="day_4">
                        Пт
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
                <div>
                    <input type="radio" id="day_5" name="day">
                    <label for="day_5">
                        Сб
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
                <div>
                    <input type="radio" id="day_6" name="day">
                    <label for="day_6">
                        Вс
                        <span data-date="00.00">00.00</span>
                    </label>
                </div>
            </div>
            <div class="data-amount">
                <span>
                    <strong>
                        4
                    </strong>
                    приёма
                </span>
                <span>
                    <strong>
                        5
                    </strong>
                    блюд
                </span>
            </div>
        </div>
        <div class="bottom">
            <div class="splide menu">
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
                            <img src="<?= get_template_directory_uri().'/src/img/arrow.png'?>" alt="arrow">
                        </button>
                    </div>
                    <ul class="splide__list">
						<?php foreach ( $data['menus'] as $item ) {
							foreach ( $item['item'] as $subItem ) { ?>
                                <li class="splide__slide">
                                    <div class="wrapper-card">
                                        <img src="<?= $subItem['cards']['image']['url'] ?>" alt="dishes">
                                        <div class="text">
                                            <span data-text="<?= $subItem['cards']['meal'] ?>"><?= $subItem['cards']['meal'] ?></span>
											<?= $subItem['cards']['title'] ?>
                                            <div>
                                                <span>
                                                    <?= $subItem['cards']['callories'] ?> Ккал, <?= $subItem['cards']['gram'] ?> г.
                                                </span>
                                                <button>Подробнее</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
							<?php }
						} ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="menu-card">

</div>
>>>>>>> 20e18c58d6330a7a5da435d4f1847f46e99bf2de:wp-content/themes/kravt-food/components/menus.php
