<?php
/*
Template Name: Homepage
*/
?>

<?php
get_header();
?>
<main class="homepage">
	<?php include( get_stylesheet_directory() . '/components/home/slider.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/benefits.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/calculator.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/programs.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/nutrition.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/menus.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/offer.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/specialists.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/standarts.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/personal_diet.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/confidence.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/faq.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/uncertainty.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/delivery.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/payments.php' ) ?>
	<?php include( get_stylesheet_directory() . '/components/home/which_program.php' ) ?>
  	<?php include( get_stylesheet_directory() . '/components/home/banner.php' ) ?>
  	<?php include( get_stylesheet_directory() . '/components/support.php' ) ?>
</main>
<?php
get_footer();
?>                                                