<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until id="main-core".
 *
 * @package ThinkUpThemes
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="//gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="body-core" class="hfeed site">

	<header id="site-header">

		<?php if ( get_header_image() ) : ?>
			<div class="custom-header"><img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt=""></div>
		<?php endif; // End header image check. ?>

		<div id="pre-header">
		<div class="wrap-safari">
		<div id="pre-header-core" class="main-navigation">
  
		<?php if ( has_nav_menu( 'pre_header_menu' ) ) : ?>
		<?php wp_nav_menu( array( 'container_class' => 'header-links', 'container_id' => 'pre-header-links-inner', 'theme_location' => 'pre_header_menu' ) ); ?>
		<?php endif; ?>

		</div>
		</div>
		</div>
		<!-- #pre-header -->

		<div id="header">
		<div id="header-core">

		<div id="header-top">

			<div id="logo">
			<?php /* Custom Logo */ echo smarter_thinkup_custom_logo(); ?>
			</div>

			<?php /* Social Media Icons */ smarter_thinkup_input_socialmedia(); ?>

			<?php /* Header Search */ smarter_thinkup_input_headersearch(); ?>

		</div>

			<div id="header-links" class="main-navigation">
			<div id="header-links-inner" class="header-links">
				<?php wp_nav_menu(array('container' => false, 'theme_location'  => 'header_menu' ) ); ?>
			</div>
			</div>
			<!-- #header-links .main-navigation -->

			<?php /* Add responsive header menu */ smarter_thinkup_input_responsivehtml1(); ?>

		</div>

			<?php /* Add responsive header menu */ smarter_thinkup_input_responsivehtml2(); ?>

		</div>
		<!-- #header -->
		<?php /* Custom Slider */ smarter_thinkup_input_sliderhome(); ?>
	</header>
	<!-- header -->

	<?php /*  Call To Action - Intro */ smarter_thinkup_input_ctaintro(); ?>
	<?php /*  Pre-Designed HomePage Content */ smarter_thinkup_input_homepagesection(); ?>

	<div id="content">
	<div id="content-core">
	<?php /* Custom Breadcrumbs */ smarter_thinkup_input_breadcrumbswitch(); ?>

		<div id="main">
		<?php /* Custom Intro */ smarter_thinkup_custom_intro(); ?>

		<div id="main-core">