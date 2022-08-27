<?php
$data = get_field( 'main-section_2' );
?>

<section class="container benefits">
    <div>
		<?= $data['head'] ?>
        <div class="wheel">
            <img src="<?= $data['image']['url'] ?>" alt="logo">
            <?= file_get_contents(get_template_directory_uri().'/src/svg/rotate-words.svg') ?>
        </div>
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
