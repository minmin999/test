<?php
/**
 * This is header image section.
 *
 * @package Switty
 */

?>
<?php
// Do not display, if hidden for a post using post meta.
if ( get_post_meta( get_the_ID(), '_switty_show_hide_hdr_img', true ) == 'on' )
{
	return;
}

if ( get_header_image() )
{
?>
	<div class="container-fluid">
		<div class="row">
			<div class="alignc">
				<img class="headerimg" src="<?php header_image(); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
			</div>
		</div>
	</div>
<?php
}
?>
