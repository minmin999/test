<?php
/**
 * The sidebar containing the woocommerce widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Store Corner
 */
?>

<div class="col-md-4 left-side">
<?php if ( is_active_sidebar( 'store-corner-woocommerce' ) ){
	dynamic_sidebar( 'store-corner-woocommerce' );
	} ?>
</div>
