<?php
$data = get_field( 'main-section_7' );
?>

<section class="container offer">
    <div class="wrapper">
		<?= $data['head'] ?>
        <div class="block">
            <div>
                <img src="/wp-content/themes/kravt-food/build/img/Frame12745.png" alt="bowl">
            </div>
            <div></div>
            <div>
                <p>
                    <span>Итого за 5 дней:</span>
                    <span>
                        5200 ₽/день
                        <strong>
                            26 000 ₽
                        </strong>
                    </span>
                </p>
                <button>
                    Оформить заказ
					<?= file_get_contents( get_template_directory() . '/src/svg/Arrow2.svg' ) ?>
                </button>
                <p><?= file_get_contents( get_template_directory() . '/src/svg/box-tick.svg' ) ?>Доставка раз в день с
                    6:00 до 12:00</p>
            </div>
        </div>

        <img class="abs1" src="/wp-content/themes/kravt-food/build/img/bowl1.png" alt="bowl">
    </div>
    <img class="abs2" src="/wp-content/themes/kravt-food/build/img/Frame684.png" alt="girl in frame">
</section>