<?php
/**
 * The file contain default search form.
 *
 * @package Switty
 */

?>
<form class="form-inline search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
	<div class="form-group">
		<input type="text" name="s" class="form-control mr5" id="terms" placeholder="<?php esc_attr_e( 'Keywords', 'switty' );  ?>" value="<?php echo get_search_query(); ?>" />
		<button type="submit" class="spclbtn"><?php esc_attr_e( 'Search &raquo;', 'switty' );  ?></button>
	</div>
</form>
