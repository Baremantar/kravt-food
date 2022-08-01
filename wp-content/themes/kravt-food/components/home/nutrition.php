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
                    <p>
                        Выберите</br>калорийность питания:
                    </p>
                    <select>
						<?php foreach ( get_field( 'main-section_5' )['callories'] as $item ) {
							?>
                            <option value="<?= $item['value'] ?>"><?= $item['value'] ?> ккал</option>

							<?php
						} ?>
                    </select>
                </div>
                <span>
                    <?php echo file_get_contents( get_stylesheet_directory() . '/src/svg/Calculator.svg' ); ?>
                    Рассчитать норму калорий
                </span>
            </div>
            <div class="block">
                <p class="head">
                    Шаг 2
					<?php echo file_get_contents( get_stylesheet_directory() . '/src/svg/info.svg' ); ?>
                </p>
                <div class="select">
                    <p>Продолжительность питания:</p>
                    <select>
		                <?php for ($i = 1; $i <= 5; $i++) {
			                ?>
                            <option value="<?= $i ?>"><?= $i ?> дней</option>

			                <?php
		                } ?>
                    </select>
                </div>
                <div>
                    <input type="radio" name="date" label="Дни программы">
                    <input type="radio" name="date" label="Календарь">
                </div>
            </div>
            <div class="block">
                <p class="head">Шаг 3 <span>Вы выбрали:</span></p>
                <div>
                    <p>Сбалансированное питание</p>
                    <p>Калорийность: <strong>1800 ккал</strong></p>
                    <p>Продолжительность: <span><strong>1800 ккал</strong>5200 ₽/день</span></p>
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