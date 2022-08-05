<?php
$data = get_field( 'main-section_13' );
?>

<section class="container-smaller delivery">
    <h2>доставка</h2>
    <div class="wrapper">
        <div class="wrapper-item">
            <div class="block">
                <div>
                    <span>01</span> <?= file_get_contents( get_template_directory() . '/src/svg/van.svg' ) ?>
                </div>
				<?= $data['text_1'] ?>
            </div>
            <div class="block">
                <div>
                    <span>02</span> <?= file_get_contents( get_template_directory() . '/src/svg/box.svg' ) ?>
                </div>
				<?= $data['text_2'] ?>
            </div>
        </div>
        <div class="wrapper-item">
            <div class="block">
                <div>
					<?= file_get_contents( get_template_directory() . '/src/svg/green-area.svg' ) ?>
                    <span><strong>-</strong></span>
                    <span><strong>зона платной доставки</strong></br>доставка с 6:00 до 12:00</span>
                </div>
                <div>
					<?= file_get_contents( get_template_directory() . '/src/svg/red-area.svg' ) ?>
                    <span><strong>-</strong></span>
                    <span><strong>зона ,бесплатной доставки</strong></br>сокращает время доставки до 1 часа</span>
                </div>
            </div>
            <div class="block">
                <img src="/wp-content/themes/kravt-food/build/img/spb-map.png" alt="">
                <div class="select">
                    <p>Узнайте, в зоне ли доставки ваш адрес:</p>

                    <span>
                        <?= file_get_contents(get_template_directory().'/src/svg/pin.svg') ?>
                        Местоположение
                        <?= file_get_contents(get_template_directory().'/src/svg/arrow3.svg') ?>
                    </span>

                    <!--<select id="mySelect">-->
                    <!--                        <option value>Select...</option>-->
                    <!--                        <option value="foo">Foo</option>-->
                    <!--                        <option value="buz">Buz</option>-->
                    <!--                    </select>-->
                </div>
            </div>
        </div>
    </div>
</section>