<?php
$data = get_field( 'main-section_10' )   ;
?>

<section class="container personal_diet">
    <div class="head">
		<?= $data['head'] ?>
        <div>
			<?= $data['text'] ?>
        </div>
    </div>
    <button>
		<?= file_get_contents( get_template_directory() . '/src/svg/Arrow2.svg' ) ?></br>
        Подобрать</br>
        рацион
    </button>
    <div class="wrapper">
        <img src="<?= $data['image']['url'] ?>" alt="image with tips">
		<?php foreach ( $data['tips'] as $item ) { ?>
            <span class="tip">
                 <span class="plus"></span>
                 <div class="tip_text">
                     <?= $item['text'] ?>
                 </div>
             </span>
		<?php } ?>
    </div>
</section>
