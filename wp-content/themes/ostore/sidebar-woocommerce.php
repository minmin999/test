<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oStore
 */

if ( ! is_active_sidebar( 'woocommerce' ) ) {
	return;
}
?>
<div class="col-md-3 col-sm-12">
	<aside id="woocommerce-sidebar" class="widget-area">
		<?php dynamic_sidebar( 'woocommerce' ); ?>
	</aside><!-- #woocommerce sidebar -->
</div>