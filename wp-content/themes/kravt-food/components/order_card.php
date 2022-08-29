<?php
if ($_POST['state'] == 1) { ?>
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
<?php } ?>

<?php
if ($_POST['state'] == 2) { ?>
    <div class="block">
        <h3>Быстрый заказ</h3>
        <p>Введите номер телефона, на который мы сможем позвонить и быстро оформить ваш заказ</p>
    </div>
    <div class="block">
        <form class="block" id='order-meal_form'>
            <input type="text" id="order-meal_name" placeholder="Имя">
            <input type="text" id="order-meal_telephone" placeholder="Телефон">
            <label for="personal_data">
                <input type="checkbox" id="personal_data">
                Соглашаюсь с условиями обработки персональных данных
            </label>
            <button>Перезвоните мне</button>
        </form>
    </div>
<?php } ?>

<?php
if ($_POST['state'] == 3) { ?>
    <h3>Оформление заказа:</h3>
    <div class="block selected">
        <h3>Сбалансированное питание</h3>
        <div class="min-wrapper">
            <img src="/wp-content/themes/kravt-food/build/img/Frame12745.png" alt="bowl">
            <div>
                <span>
                    Продолжительность
                </span>
                <span>
                    <b>5</b> дней
                </span>
            </div>
            <div>
                <span>Стоимость:</span>
                <span><b>26 000 ₽</b></span>
            </div>
        </div>
        <img class="abs1" src="/wp-content/themes/kravt-food/build/img/bowl1.png" alt="bowl">
    </div>
    <form action="">
        <div class="group">
            <span>Контактные данные</span>
            <div>
                <input type="text" id="order-meal_name" placeholder="Имя">
                <input type="text" id="order-meal_telephone" placeholder="Телефон">
                <input type="text" id="order-meal_email" placeholder="Email">
            </div>
        </div>
        <div class="group">
            <span>Куда доставить</span>
            <div>
                <input type="text" id="order-meal_town" placeholder="Город">
                <input type="text" id="order-meal_street" placeholder="Улица">
            </div>
            <div>
                <input type="text" id="order-meal_house" placeholder="Дом">
                <input type="text" id="order-meal_cadre" placeholder="Корпус">
                <input type="text" id="order-meal_entrance" placeholder="Подъезд">
                <input type="text" id="order-meal_floor" placeholder="Этаж">
                <input type="text" id="order-meal_flat" placeholder="Квартира">
            </div>
        </div>
    </form>
<?php } ?>