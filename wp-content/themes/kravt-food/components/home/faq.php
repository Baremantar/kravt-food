<?php
$data = get_field( 'main-section_12' );
?>

<section class="container faq">
    <div class="wrapper">
        <div>
            <div class="head"><?= $data['head'] ?></div>
            <div class="switcher">
				<?php foreach ( $data['theme_questions'] as $key => $item ) { ?>
                    <div class="element">
                        <input type="radio" id="faq_<?= $key ?>" name="faq">
                        <label for="faq_<?= $key ?>">
                            <span><?= $item['name'];
	                            ?>
                            </span>
							<?php echo file_get_contents( $item['icon']['url'] ) ?>
                        </label>
                    </div>
				<?php } ?>
            </div>
        </div>
        <div>
			<?php //foreach ( $data['theme_questions'] as $item ) {
				foreach ( $data['theme_questions'][0]['qa'] as $subItem ) { ?>
                    <div class="info">
						<?= $subItem['q'] ?>
                        <span>Отвечает:</span>
                        <div class="manager">
                            <img src="<?= $subItem['man_img']['url'] ?>" alt="doctor">
                            <p>
								<?= $subItem['name'] ?></br>
                                <span>
                                    <?= $subItem['spec'] ?>
                                </span>
                            </p>
                        </div>
                        <?= $subItem['a'] ?>
                        <span class="close"></span>
                    </div>
				<?php }
//} ?>
        </div>
    </div>
</section>