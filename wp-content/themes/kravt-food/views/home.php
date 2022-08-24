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
  include( get_stylesheet_directory() . '/components/slider.php' );
	include( get_stylesheet_directory() . '/components/benefits.php' );
	include( get_stylesheet_directory() . '/components/calculator.php' );
	include( get_stylesheet_directory() . '/components/programs.php' );
	include( get_stylesheet_directory() . '/components/nutrition.php' );
	include( get_stylesheet_directory() . '/components/menus.php' );
	include( get_stylesheet_directory() . '/components/offer.php' );
	include( get_stylesheet_directory() . '/components/specialists.php' );
	include( get_stylesheet_directory() . '/components/standarts.php' );
	include( get_stylesheet_directory() . '/components/personal_diet.php' );
	include( get_stylesheet_directory() . '/components/confidence.php' );
	include( get_stylesheet_directory() . '/components/faq.php' );
	include( get_stylesheet_directory() . '/components/uncertainty.php' );
	include( get_stylesheet_directory() . '/components/delivery.php' );
	include( get_stylesheet_directory() . '/components/payments.php' );
	include( get_stylesheet_directory() . '/components/which_program.php' );
	include( get_stylesheet_directory() . '/components/banner.php' );
	include( get_stylesheet_directory() . '/components/support.php' ) ?>
</main>
<?php
 get_footer();
?>                                                