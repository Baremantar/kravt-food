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
</main>
<?php
get_footer();
?>                                                