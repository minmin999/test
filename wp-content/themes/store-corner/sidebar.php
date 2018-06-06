<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Store Corner
 */
?>

<div class="col-md-4 left-side">
<?php if ( is_active_sidebar( 'store-corner-sidebar' ) ){
	dynamic_sidebar( 'store-corner-sidebar' );
	} ?>
</div>
