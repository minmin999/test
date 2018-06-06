<?php
/**
 * This will load in all footer files, Generally to add little HTML to display back to top icon.
 *
 * @package Switty
 */

?>
<?php if ( '1' === get_theme_mod( 'back_to_top', '1' ) ) { ?>
	<a id="back-to-top" href="#"><span class="fa fa-chevron-up"></span></a>
<?php } ?>
