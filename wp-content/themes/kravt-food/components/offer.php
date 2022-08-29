<?php
$data = get_field( 'main-section_7' );
?>

<section class="container offer">
    <div class="wrapper">
		<?= $data['head'] ?>
        <div class="block">
            <div>
                <img src="<?= get_template_directory_uri() . '/build/img/Frame12745.png' ?>" alt="bowl">
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

        <img class="abs1" src="<?= get_template_directory_uri() . '/build/img/bowl1.png' ?>" alt="bowl">
    </div>
    <div class="wheel">
        <img src="<?= get_template_directory_uri() . '/build/img/girls-round.png' ?>" alt="girl in frame">
		<?= file_get_contents( get_template_directory_uri() . '/src/svg/rotate-words2.svg' ) ?>
    </div>
</section>


<div class="order-card modal">
    <div class="close">
        <span class="plus"></span>
    </div>
    <div class="wrapper">
        <div class="block">
            <h3>Оформление</br>заказа</h3>
            <p>Выберите удобный способ:</p>
        </div>
        <div class="block">
            <div>
                <button id='liteOrder'>Быстрый заказ</button>
                <span>Быстро оформить с менеджером</span>
            </div>
            <div>
                <button id="fullOrder">Оформить на сайте</button>
                <span>Заполнить все самостоятельно</span>
            </div>
        </div>
    </div>
</div>