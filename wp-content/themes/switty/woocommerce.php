<?php
/**
 * This file will hold the contents of woo commerce plugin.
 *
 * @package Switty
 */

?>
<?php get_header(); ?>
<div class="<?php
if ( 'rights' === get_theme_mod( 'woo_layout', 'rights' ) ) {
	echo 'col-md-8';
} else {
	echo 'col-md-12';
}
?>">
	<div class="clearfix postsloop mrt50">
		<div class="content-first pd20">
				
			<div class="content-third">
				<div class="entry-content">
					<?php woocommerce_content(); ?>
				</div>
			
			</div>
			
		</div>
	</div>
</div>
<?php if ( 'rights' === get_theme_mod( 'woo_layout', 'rights' ) ) { get_sidebar( 'woo' ); } ?>
<?php get_footer(); ?>
