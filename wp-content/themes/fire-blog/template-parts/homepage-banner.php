<?php 
$banner_image = get_theme_mod( 'banner_image_home' );
$banner_title = get_theme_mod( 'banner_title' , esc_html( 'FireBlog Lite', 'fire-blog' ) );
$banner_subtitle = get_theme_mod( 'banner_subtitle' , esc_html( 'Minimal Blog WordPress Theme', 'fire-blog' ) );

if( empty( $banner_image ) ){
	$banner_image = get_template_directory_uri() . '/images/breadcrum.jpg';
}
?>

<div class="breadcrumb-wrapper homepage_banner" style="background-image: url( <?php echo esc_url( $banner_image ); ?> )">
	<div class="section-title">
		<h2 class="banner_title"><?php echo esc_html( $banner_title ); ?></h2>
		<p class="banner_subtitle">
			<?php echo esc_html( $banner_subtitle ); ?>
		</p>
	</div>
	<div class="overlay"></div>
</div>