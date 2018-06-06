<?php
/**
 * The sidebar containing the widget area for front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business Shop
 */
$display_widget2 = get_theme_mod('store_corner_display_widget2_setting',0);
if($display_widget2==1){ ?>
<div class="col-md-12 front-widget">
<?php if ( is_active_sidebar( 'business-shop-widget-2' ) ){
	dynamic_sidebar( 'business-shop-widget-2' );
	} ?>
</div>
<?php } ?>