<<<<<<< HEAD:wp-content/themes/kravt-food/components/home/benefits.php
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
=======
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
>>>>>>> 20e18c58d6330a7a5da435d4f1847f46e99bf2de:wp-content/themes/kravt-food/components/benefits.php
