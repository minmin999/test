<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Store Corner
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if(is_singular() && pings_open()){ ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php }
wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<!-- Wrapper Start -->
<div class="wrapper">
<header class="header1 bs-header">
<?php $sc_topbar= get_theme_mod( 'store_corner_display_topbar_setting', 0);
	$sc_topmenu = get_theme_mod( 'store_corner_display_topmenu_setting', 0);
		if($sc_topbar==1){	?>
	<div class="container-fluid bs-topbar">
		<div class="container">
			<div class="row bs-topbar-detail">
				<div class="col-md-6 col-sm-6 bs-add-info">
				<?php for($i=1; $i<=3; $i++){
				$sc_icon = get_theme_mod('store_corner_header_icon_'.$i); 
				$sc_icon_data = get_theme_mod('store_corner_header_heading_'.$i); 
				 ?>
					<ul class="bs-mail">
						<li class="bs-mail-icon">
						<?php if($sc_icon!=''){ ?>
							<i class="<?php echo esc_attr($sc_icon); ?>"></i>
						<?php } if($sc_icon_data!=''){ ?>
							<?php echo esc_attr($sc_icon_data); ?>
						
						<?php } ?>
						</li>
					</ul>
				<?php }  ?>
				</div>
				
				<div class="col-md-4 col-sm-4 bs-top-cart">
					<?php if($sc_topmenu==1){
						wp_nav_menu( array(
						'theme_location' => 'store_corner_header',
						'menu_class' => 'bs-cart',
						)
					); }	?>
				</div>
                                <?php $sc_social= get_theme_mod( 'store_corner_display_social_setting', 0);
				if($sc_social==1){ ?>
				<div class="col-md-2 col-sm-2 bs-social-info">
					<?php for($i=1; $i<=5; $i++){
				$sc_social = get_theme_mod('store_corner_social_icon_'.$i); 
				$sc_social_link = get_theme_mod('store_corner_social_link_'.$i); 
				 if($sc_social!='' && $sc_social_link!=''){ ?>
				 <a href="<?php echo esc_url($sc_social_link); ?>" target="_blank"><i class="<?php echo esc_attr($sc_social); ?>"></i></a>
					<?php } } ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>
	<nav class="navbar navbar-default bs-menu">
		<div class="container-fluid bs-logo-bar">
			<div class="container">
				<div class="row sc-header-bar">
					<div class="col-md-3 col-sm-12 bs-logo">
					<?php $store_corner_logo_id = get_theme_mod( 'custom_logo' );
				$store_corner_logo_data = wp_get_attachment_image_src( $store_corner_logo_id , 'full' );
				$store_corner_logo = $store_corner_logo_data[0];	?>
				 <h1 class="site-title">
				 <a class="logo-wrapper" href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php if(isset($store_corner_logo)){ ?>
				<img src="<?php echo esc_url($store_corner_logo); ?>" alt="<?php bloginfo( 'name' ); ?>" >
				<?php }else { ?>
				   <?php bloginfo( 'name' ); ?>
					<?php } ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					</div>
					<div class="col-md-9 col-sm-12 bs-add-category">
						<div class="row bs-menu-head">
							<?php 
							if(store_corner_is_wc()){
								get_template_part('searchform-product');
							}
							store_corner_mini_cart(); ?>
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							  </button>
							  <a class="navbar-brand" href="<?php echo esc_url(home_url( '/' )); ?>"></a>
							</div>
                                                        <div class="collapse navbar-collapse" id="myNavbar">
							<?php wp_nav_menu( array(
									'theme_location' => 'store_corner_primary',
									'menu_class' => 'nav navbar-nav navbar-right tc-main-menu',
									'fallback_cb' => 'store_corner_fallback_page_menu',
									'walker' => new store_corner_nav_walker(),
									)
								);	?>
	
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>