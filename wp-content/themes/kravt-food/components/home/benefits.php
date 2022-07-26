<section class="container benefits">
	<div>
		<?= get_field( 'main-section_2' )['head'] ?>
		<img src="<?= get_field( 'main-section_2' )['image']['url'] ?>" alt="logo">
	</div>
	<div>
		<?php foreach ( get_field( 'main-section_2' )['benefits'] as $item ) {
			echo '<div class="item-wrapper">' .
			     file_get_contents( $item['image']['url'] ) .
			     '<div>' . $item['description'] . '</div>' .
			     '</div>';
		} ?>
	</div>
</section>
