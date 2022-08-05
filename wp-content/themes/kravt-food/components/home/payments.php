<section class="container payments">
    <div class="wrapper">
        <div class="wrapper-item">
            <h4>способы оплаты</h4>
        </div>
        <div class="wrapper-item">
            <div class="block">
				<?= file_get_contents( get_template_directory() . '/src/svg/cards.svg' ) ?>
                <div>
                    <p>Картой на сайте
                        <span>
                            <?= file_get_contents( get_template_directory() . '/src/svg/mir.svg' ) ?>
                            <?= file_get_contents( get_template_directory() . '/src/svg/visa.svg' ) ?>
                            <?= file_get_contents( get_template_directory() . '/src/svg/mastercard.svg' ) ?>
                        </span>
                    </p>
                    <p>
                        Принимаем к оплате банковские карты Мир, Visa
                        или Mastercard
                    </p>
                </div>
            </div>
              <hr>
            <div class="block">
				<?= file_get_contents( get_template_directory() . '/src/svg/wallet.svg' ) ?>
                <div>
                    <p>
                        Оплата при получении
                    </p>
                    <p>
                        Курьеру наличными или пластиковыми картами Мир,
                        Visa или Mastercard
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>