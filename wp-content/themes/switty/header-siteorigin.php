<?php
/**
 * The header file of SO page builder.
 *
 * @package Switty
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<?php switty_head(); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<?php get_template_part( 'template-parts/header', 'nav' ); ?>

<?php get_template_part( 'template-parts/header', 'sidebar-nav' ); ?>

<?php get_template_part( 'template-parts/header', 'img' ); ?>

<div id="maincontainer" class="container-fluid">
	<div class="container">
		<div class="row">
