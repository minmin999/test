<?php
/**
 * This is footer widget section.
 *
 * @package Switty
 */

?>
<?php
// Return if hidden using post meta.
if ( get_post_meta( get_the_ID(), '_switty_show_hide_ftr_wdgt', true ) == 'on' )
{
	return;
}

// Proceed.
$number_of_footer_widgets = absint( get_theme_mod( 'number_of_footer_widgets', '0' ) );

if ( 0 === $number_of_footer_widgets ) {
	return;
}

?>

<div class="container-fluid footer clearfix">
	<div class="container">

<?php
// If set 1 widget in customize.
if ( 1 === $number_of_footer_widgets ) {
	if ( is_active_sidebar( 'footer_1' ) ) {

		echo '<div class="row pdt10 pdb5">';

		echo '<div class="col-md-12">';

		if ( is_active_sidebar( 'footer_1' ) ) {
				dynamic_sidebar( 'footer_1' );
		}

		echo '</div>';

		echo '</div>';
	}
}
?>


<?php
// If set 2 widgets in customize.
if ( 2 === $number_of_footer_widgets ) {
	if ( is_active_sidebar( 'footer_1' ) || is_active_sidebar( 'footer_2' ) ) {

		echo '<div class="row pdt10 pdb5">';

		echo '<div class="col-md-6">';

		if ( is_active_sidebar( 'footer_1' ) ) {
			dynamic_sidebar( 'footer_1' );
		}

		echo '</div>';

		echo '<div class="col-md-6">';

		if ( is_active_sidebar( 'footer_2' ) ) {
			dynamic_sidebar( 'footer_2' );
		}

		echo '</div>';

		echo '</div>';
	}
}
?>


<?php
// If set 3 widgets in customize.
if ( 3 === $number_of_footer_widgets ) {
	if ( is_active_sidebar( 'footer_1' ) || is_active_sidebar( 'footer_2' ) || is_active_sidebar( 'footer_3' ) ) {

		echo '<div class="row pdt10 pdb5">';

		echo '<div class="col-md-4">';

		if ( is_active_sidebar( 'footer_1' ) ) {
			dynamic_sidebar( 'footer_1' );
		}

		echo '</div>';

		echo '<div class="col-md-4">';

		if ( is_active_sidebar( 'footer_2' ) ) {
			dynamic_sidebar( 'footer_2' );
		}

		echo '</div>';

		echo '<div class="col-md-4">';

		if ( is_active_sidebar( 'footer_3' ) ) {
			dynamic_sidebar( 'footer_3' );
		}

		echo '</div>';

		echo '</div>';
	}
}
?>


<?php
// If set 4 widgets in customize.
if ( 4 === $number_of_footer_widgets ) {
	if ( is_active_sidebar( 'footer_1' ) || is_active_sidebar( 'footer_2' ) || is_active_sidebar( 'footer_3' ) || is_active_sidebar( 'footer_4' ) ) {

		echo '<div class="row pdt10 pdb5">';

		echo '<div class="col-md-3">';

		if ( is_active_sidebar( 'footer_1' ) ) {
			dynamic_sidebar( 'footer_1' );
		}

		echo '</div>';

		echo '<div class="col-md-3">';

		if ( is_active_sidebar( 'footer_2' ) ) {
			dynamic_sidebar( 'footer_2' );
		}

		echo '</div>';

		echo '<div class="col-md-3">';

		if ( is_active_sidebar( 'footer_3' ) ) {
			dynamic_sidebar( 'footer_3' );
		}

		echo '</div>';

		echo '<div class="col-md-3">';

		if ( is_active_sidebar( 'footer_4' ) ) {
			dynamic_sidebar( 'footer_4' );
		}

		echo '</div>';

		echo '</div>';
	} // End if().
} // End if().
?>

	</div>
</div>
