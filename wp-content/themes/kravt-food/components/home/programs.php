<section class="container programs">
	<?= get_field( 'main-section_4' )['head'] ?>
	<div class="wrapper">
		<?php foreach ( get_field( 'main-section_4' )['cards'] as $item ) {
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
				<button>6 программ</button>
			</div>
		<?php } ?>
	</div>
</section>