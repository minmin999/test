<?php
/**
 * Default sidebar, Actually used for blog only.
 *
 * @package Switty
 */

?>
<div class="col-md-4">
	<div class="right-content" >
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			dynamic_sidebar( 'sidebar-1' );
		}
		?>
	</div>
</div>
