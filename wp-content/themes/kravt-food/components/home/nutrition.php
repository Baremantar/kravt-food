<section class="container nutrition">
    <div class="wrapper">
        <div class="wrapper-item">
            <h4>Сбалансированное
                питание</h4>
            <p>Для тех, кто хочет похудеть комфортно и безопасно, а также поддержать или набрать вес. Универсальный
                рацион для ведения здорового образа жизни.</p>
            <div class="block">
                <div>
                    <p>Нутриенты в 1 дне:</p>
                    <span>
                        <?= file_get_contents( get_template_directory() . '/src/svg/belki.svg' ) ?>
                        <?= file_get_contents( get_template_directory() . '/src/svg/zhiri.svg' ) ?>
                        <?= file_get_contents( get_template_directory() . '/src/svg/uglevodi.svg' ) ?>
                    </span>
                </div>
                <div>
                    <p>Цена за день:</p>
                    <span>от <strong>4800 ₽</strong></span>
                </div>
            </div>
        </div>
        <div class="wrapper-item">
            <div class="block">
                <p class="text1">Разнообразное меню</p>
                <p class="text2">Несколько видов рыбы, морепродукты, птица, постная говядина, молочные продукты,
                    крупы, овощи,
                    фрукты</p>
                <img src="/wp-content/themes/kravt-food/build/img/bowl.png" alt="bowl with vegetables">
            </div>
            <div class="block">
                <div>
                    <img src="/wp-content/themes/kravt-food/build/img/3.png" alt="">
                    <img src="/wp-content/themes/kravt-food/build/img/2.png" alt="">
                    <img src="/wp-content/themes/kravt-food/build/img/1.png" alt="">
                </div>
                <p class="text1">Помощь нутрициолога</p>
                <p class="text2">Ведем вас с первых дней, помогаем советами и отвечаем на вопросы, связанные с
                    питанием</p>
            </div>
            <div class="block">
                <p class="text1">Все необходимое</p>
                <p class="text2">Удобная термосумка, прочные столовые приборы, плотные салфетки, бутылка родниковой
                    воды</p>
                <img src="/wp-content/themes/kravt-food/build/img/eco.png" alt="">
            </div>
        </div>
        <div class="wrapper-item">
            <div class="block">
                <p class="head">Шаг 1</p>
                <div class="select">
                    <p>Выберите</br>калорийность питания</p>
                    <div class="select-days">
                        <p>
                            <b>1800</b>ккал
                        </p>
						<?= file_get_contents( get_template_directory() . '/src/svg/Arrow3.svg' ) ?>
                        <div class="list">
                            <span class="list-item">
                                <b>900</b>ккал
                            </span>
                            <span class="list-item">
                                <b>1200</b>ккал
                            </span>
                            <span class="list-item">
                                <b>1500</b>ккал
                            </span>
                            <span class="list-item">
                                <b>1800</b>ккал
                            </span>
                            <span class="list-item">
                                <b>2100</b>ккал
                            </span>
                            <span class="list-item">
                                <b>2500</b>ккал
                            </span>
                        </div>
                    </div>
                </div>
                <span>
                        <?php echo file_get_contents( get_stylesheet_directory() . '/src/svg/Calculator.svg' ); ?>
                        Рассчитать норму калорий
                    </span>
            </div>
            <div class="block">
                <p class="head">
                    <span class="nutrition-info">Вы можете выбрать меню как на несколько дней подряд, так и на производьные даты по своему усмотрению</span>
                    Шаг 2
					<?php echo file_get_contents( get_stylesheet_directory() . '/src/svg/info.svg' ); ?>
                </p>
                <div class="select">
                    <p>Продолжительность питания:</p>
                    <div class="select-days">
                        <p>
                            <b>1</b>дeнь</br>
                            <span>5200 ₽/день</span>
                        </p>
						<?= file_get_contents( get_template_directory() . '/src/svg/Arrow3.svg' ) ?>
                        <div class="list">
                            <span class="list-item">
                                <b>1</b>день</br>
                                <span>5400 ₽/день</span>
                            </span>
                            <span class="list-item">
                                <b>5</b>дней</br>
                                <span>5200 ₽/день</span>
                            </span>
                            <span class="list-item">
                                <b>7</b>дней</br>
                                <span>5200 ₽/день</span>
                            </span>
                            <span class="list-item">
                                <b>14</b>дней</br>
                                <span>4800 ₽/день</span>
                            </span>
                            <span class="list-item">
                                <b>21</b></br>
                                <span>4800 ₽/день</span>
                            </span>
                            <span class="list-item">
                                <b>30</b>дней</br>
                                <span>4800 ₽/день</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="tumbler">
                    <input type="radio" name="date" label="Дни программы" checked>
                    <input type="radio" name="date" label="Календарь">
                </div>
            </div>
            <div class="block">
                <p class="head">Шаг 3 <span>Вы выбрали:</span></p>
                <div>
                    <p>Сбалансированное питание</p>
                    <p>Калорийность: <strong>1800 ккал</strong></p>
                    <p>Продолжительность: <span><strong>5 дней</strong>5200 ₽/день</span></p>
                    <p>Итого за 5 дней: <strong>26 000 ₽</strong></p>
                    <button>
                        оформить заказ
						<?= file_get_contents( get_stylesheet_directory() . '/src/svg/Arrow2.svg' ) ?></button>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>