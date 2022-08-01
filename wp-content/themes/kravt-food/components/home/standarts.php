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
        <img src="/wp-content/themes/kravt-food/build/img/f12.png" alt="kravt-food">
        <img src="<?= $data['image']['url'] ?>" alt="table of dishes">
    </div>
</section>
