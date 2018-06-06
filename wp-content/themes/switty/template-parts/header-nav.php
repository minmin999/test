<?php
/**
 * The main nav and logo section.
 *
 * @package Switty
 */

?>
<nav id="navbar" class="navbar navbar-default navbar-fixed-top" >
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only"><?php esc_attr_e( 'Toggle navigation', 'switty' ); ?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<?php
		if ( has_custom_logo() ) {
		?>
			<div id="logoasimg" itemscope itemtype="http://schema.org/Organization" >
				<?php the_custom_logo(); ?>
			</div>
		<?php
		} else {
		?>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php echo esc_attr( get_bloginfo( 'name' ) ); ?></a>
		<?php
		}
		?>
		
	</div>
						
	<?php
	wp_nav_menu( array(
		'theme_location'    => 'primary',
		'depth'             => 2,
		'container'         => 'div',
		'container_id'      => 'bs-example-navbar-collapse-1',
		'container_class'   => 'collapse navbar-collapse',
		'menu_id' 			=> 'primary-menu',
		'menu_class'        => 'nav navbar-nav navbar-right',
		'fallback_cb'       => 'switty_nav_fallback',
		'walker'            => new Switty_Bootstrap_Navwalker(),
	));
	?>
</div>
</nav>
