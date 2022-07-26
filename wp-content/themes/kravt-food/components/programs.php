<?php
$data = get_field( 'main-section_4' );
?>

<section class="container-smaller programs">
	<?= get_field( 'main-section_4' )['head'] ?>
    <div class="wrapper">
		<?php foreach ( $data['cards'] as $item ) {
			?>
            <div class="wrapper-item">
                <div class="text">
					<?= $item['head'] ?>
					<?= $item['text'] ?>
                </div>
                <div class="images">
					<?php foreach ( $item['photos'] as $photo ) {
						?>
                        <img src="<?= $photo['url'] ?>" alt="питание">
						<?php
					} ?>
                </div>
                <button><?= $item['count']?> программ</button>
            </div>
		<?php } ?>
    </div>
</section>