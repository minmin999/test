<?php
/**
 * Sidebar for woo commerce pages- loop and single.
 *
 * @package Switty
 */

?>
<div class="col-md-4">
	<div class="right-content" >
		<?php
		if ( is_active_sidebar( 'sidebar_woo' ) ) {
			dynamic_sidebar( 'sidebar_woo' );
		}
		?>
	</div>
</div>
