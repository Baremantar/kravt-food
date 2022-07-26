<?php
$data = get_field( 'main-section_9' );
?>

<section class="container standarts">
    <div class="wrapper">
        <div class="head">
			<?= $data['head'] ?>
        </div>
        <div class="standart-points">
			<?php foreach ( $data['standarts'] as $item ) {
				foreach ( $item as $subItem ) { ?>
                    <div>
						<?php
						echo file_get_contents( $subItem['image']['url'] );
						echo $subItem['text'];
						?>
                    </div>
				<?php }
			} ?>
        </div>
        <div class="wheel">
            <img src="<?= get_template_directory_uri() . '/build/img/green-vegetables-round.png' ?>" alt="kravt-food">
			<?= file_get_contents( get_template_directory_uri() . '/src/svg/rotate-words3.svg' ) ?>
        </div>
        <img src="<?= $data['image']['url'] ?>" alt="table of dishes">
    </div>
</section>
