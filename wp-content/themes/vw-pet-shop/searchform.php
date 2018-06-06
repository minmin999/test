<?php
/**
 * The template for displaying search forms in VW Pet Shop
 *
 * @package VW Pet Shop
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_html_x( 'Search', 'placeholder','vw-pet-shop' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_html_x( 'Search', 'submit button','vw-pet-shop' ); ?>">
</form>