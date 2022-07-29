<?php
$data = get_field( 'main-section_2' );
?>

<section class="container benefits">
	<div>
		<?= $data['head'] ?>
		<img src="<?= $data['image']['url'] ?>" alt="logo">
	</div>
	<div>
		<?php foreach ( $data['benefits'] as $item ) {
			echo '<div class="item-wrapper">' .
			     file_get_contents( $item['image']['url'] ) .
			     '<div>' . $item['description'] . '</div>' .
			     '</div>';
		} ?>
	</div>
</section>
