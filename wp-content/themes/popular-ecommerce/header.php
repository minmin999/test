<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ostore-child
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div>
	<!-- Header -->
	
	<div id="header-wrap" class="header-wrap-2">
		    <!-- Header Logo -->
			<div class="header_top_wrap" <?php if(get_header_image()): ?>style="background:url(<?php echo esc_url(get_header_image())?>) center no-repeat;" <?php endif; ?>>
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="search">
								<a href="#">
									<form class="form-open clearfix" name="myform" method="GET" action="<?php echo esc_url(home_url('/')); ?>">
										<span ><i class="fa fa-search"></i></span>
										<input type="text"  name="s" class="searchbox" maxlength="128" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__('Search...', 'popular-ecommerce'); ?>">
										<?php if (class_exists('WooCommerce')) : ?>
											<input type="hidden" value="product" name="post_type">
										<?php endif; ?>
									</form>
								</a>
							</div>
						</div>    
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							
							<!-- Site Logo -->
							<div class="site-branding">
								<?php the_custom_logo(); ?>
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
									$description = get_bloginfo( 'description', 'display' );
									if ( $description || is_customize_preview() ) : ?>
										<p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
								<?php
								endif; 
								?>
							</div><!-- .site-branding -->
							<!-- .site-branding -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="pull-right clearfix">
								<?php if( ostore_is_woocommerce_activated() ): ?>
									<div class="cart clearfix">
										<?php 
										    esc_html(ostore_top_wishlist()); 
											esc_html(ostore_top_cart()); 
										?>
									</div>
								<?php endif; ?>
								<div class="menu-bar">
									<a href="javascript:;" class="toggle" id="sidenav-toggle">
										<i class="fa fa-bars" aria-hidden="true"></i>
									</a>
									
									<nav class="sidenav" data-sidenav data-sidenav-toggle="#sidenav-toggle">
										<?php
											wp_nav_menu( array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
												'container'		 =>	 'ul',
												'menu_class'	 =>  'sidenav-menu'
											) );

										?>
									</nav>
									
								</div>	
							</div>
						</div>
					</div>
			    </div>
			</div>
		</div>	
	<div id="content" class="">