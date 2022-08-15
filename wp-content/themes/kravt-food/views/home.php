<?php
/*
Template Name: Homepage
*/
?>

<?php
get_header();
?>
<main class="homepage">
	<?php
  include( get_stylesheet_directory() . '/components/home/slider.php' );
	include( get_stylesheet_directory() . '/components/home/benefits.php' );
	include( get_stylesheet_directory() . '/components/home/calculator.php' );
	include( get_stylesheet_directory() . '/components/home/programs.php' );
	include( get_stylesheet_directory() . '/components/home/nutrition.php' );
	include( get_stylesheet_directory() . '/components/home/menus.php' );
	include( get_stylesheet_directory() . '/components/home/offer.php' );
	include( get_stylesheet_directory() . '/components/home/specialists.php' );
	include( get_stylesheet_directory() . '/components/home/standarts.php' );
	include( get_stylesheet_directory() . '/components/home/personal_diet.php' );
	include( get_stylesheet_directory() . '/components/home/confidence.php' );
	include( get_stylesheet_directory() . '/components/home/faq.php' );
	include( get_stylesheet_directory() . '/components/home/uncertainty.php' );
	include( get_stylesheet_directory() . '/components/home/delivery.php' );
	include( get_stylesheet_directory() . '/components/home/payments.php' );
	include( get_stylesheet_directory() . '/components/home/which_program.php' );
	include( get_stylesheet_directory() . '/components/home/banner.php' );
	include( get_stylesheet_directory() . '/components/support.php' ) ?>
</main>
<?php
 get_footer();
?>                                                