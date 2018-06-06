<?php
/**
 * This is copyright section of footer.
 *
 * @package Switty
 */

?>
<div class="container-fluid footer-copyright">
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<div class="cprtlft_ctmzr">
					<?php
						echo do_shortcode( wp_kses_post( get_theme_mod( 'left_copy_con', __( '<p>&copy; Copyright text. Some right reserved.</p>', 'switty' ) ) ) );
					?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="cprtrgt_ctmzr fr spclfl">
					<?php
						echo do_shortcode( wp_kses_post( get_theme_mod( 'right_copy_con', __( '<p>Powered by <a href="https://wordpress.org/themes/switty/" target="_blank">Switty WordPress Theme</a>.</p>', 'switty' ) ) ) );
					?>
				</div>
			</div>

		</div>
	</div>
</div>
