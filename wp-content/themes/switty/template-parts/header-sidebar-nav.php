<?php
/**
 * The sidebar nav.
 *
 * @package Switty
 */

?>

<?php
if ( '1' === get_theme_mod( 'sidebar_menu_onoff', '1' ) ) {
?>
	<div class="side-menu-menu-wrap">
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'sidebar',
			'depth'             => 1,
			'container'         => 'nav',
			'container_id'      => 'side-menu-menu',
			'container_class'   => 'side-menu-menu',
			'menu_id' 			=> 'side-menu',
			'menu_class'        => 'side-menu-icon-list',
			) );
		?>
		<button class="side-menu-close-button" id="side-menu-close-button"></button>
	</div>
	<button class="side-menu-menu-button" id="side-menu-open-button"></button>
<?php
}
?>