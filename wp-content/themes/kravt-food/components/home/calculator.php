<?php
$data = get_field( 'main-section_3' );
?>

<section class="container calculator">
    <div class="left">
		<?= $data[ 'head' ] ?>
        <form id="calculator">
            <div class="pregnant">
				<?= file_get_contents( get_stylesheet_directory() . '/src/svg/pregnant.svg' ) ?>
                <label>Вы беременны?<input type="checkbox" id="pregnant"></label>
            </div>
            <div class="wrapper global">
                <div class="wrapper info">
                    <div class="wrapper-item">
                        <label>Ваш пол:</label>
                        <div>
                            <input type="radio" name="gender" label="Мужчина">
                            <input type="radio" name="gender" label="Женщина">
                        </div>
                    </div>
                    <div class="wrapper-item">
                        <div>
                            <label>Возраст:</label>
                            <input type="number" min="0" placeholder="лет">
                        </div>
                        <div>
                            <label>Рост:</label>
                            <input type="number" min="0" placeholder="см">
                        </div>
                        <div>
                            <label>Вес:</label>
                            <input type="number" min="0" placeholder="кг">
                        </div>
                    </div>
                </div>

                <div class="wrapper goal">
                    <label>
                        Ваша цель:</br>
                    </label>
                    <div class="wrapper-item">
                        <label>
                            <input type="radio" name="goal" label='Похудеть'>
							<?= file_get_contents( get_template_directory() . '/src/svg/Slim.svg' ) ?>
                        </label>
                        <label>
                            <input type="radio" name="goal" label="Поддержать вес">
							<?= file_get_contents( get_template_directory() . '/src/svg/Active.svg' ) ?>
                        </label>
                        <label>
                            <input type="radio" name="goal" label="Набрать вес">
							<?= file_get_contents( get_template_directory() . '/src/svg/Muscles.svg' ) ?>
                        </label>
                    </div>
                </div>
                <div class="wrapper activity">
                    <label>
                        Ваш уровень активности:</br>
                    </label>
                    <div class="wrapper-item">
                        <div>
                            <input type="radio" name="active" id="active_1">
                            <label for="active_1">Низкий
								<?= file_get_contents( get_template_directory() . '/src/svg/inactive.svg' ) ?>
                                <p>Сидячая работа, отсутствие занятий или выполнение легких упражнений</p>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="active" id="active_2">
                            <label for="active_2">Средний
								<?= file_get_contents( get_template_directory() . '/src/svg/average_activity.svg' ) ?>
                                <p>Активная работа, занятия в зале до 3-х раз в неделю</p></label>
                        </div>
                        <div>
                            <input type="radio" name="active" id="active_3">
                            <label for="active_3">Высокий
								<?= file_get_contents( get_template_directory() . '/src/svg/active1.svg' ) ?>
                                <p>Физически активная работа или интенсивные тенировки в зале до 3-5 раз в
                                    неделю</p></label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="right">
        <p>Настройте калькулятор с учетом ваших</br>особенностей и цели</p>
        <div class="manager">
            <div class="manager-person">
                <img src="<?= $data['image']['url'] ?>" alt="manager">
				<?= $data['text'] ?>
            </div>
            <div class="manager-link">
                <a href="<?= $data['tg_link'] ?>"><?= file_get_contents( get_stylesheet_directory() . '/src/svg/telegram.svg' ) ?></a>
                <a href="<?= $data['wa_link'] ?>"><?= file_get_contents( get_stylesheet_directory() . '/src/svg/whatsapp.svg' ) ?></a>
            </div>
        </div>
        <div class="calculated">
            <p>Суточная норма калорий по формуле</br>Миффлина–Сан Жеора:</p>
            <span id="calculated-value">1692 ккал</span>
            <p class="calculated-recommendation">Вам подходит программа:</p>
            <span id="calculated-program">Сбалансированное питание</span>
            <span id="calculated-recommendation"><b>1800</b> ккал</span>
            <button id="calculated-link">
                смотреть
                программу <?= file_get_contents( get_stylesheet_directory() . '/src/svg/Arrow2.svg' ) ?></button>
        </div>
    </div>
    <div class="bottom" id="reset">
		<?= file_get_contents( get_template_directory() . '/src/svg/setting-4.svg' ) ?>
        <span>Сбросить параметры</span>
    </div>
</section>