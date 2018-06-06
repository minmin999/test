<?php
/**
 * All individual function.
 *
 * @package Switty
 */

/**
 * The posts / loop pagination.
 */
function switty_posts_pagination() {
	if ( 'nextprev' === get_theme_mod( 'display_archive_pagination', 'nextprev' ) ) {
		if ( get_next_posts_link() || get_previous_posts_link() ) {
		?>
			<div class="clearfix"></div>

			<nav class="navigation post-navigation" role="navigation">
				<div class="nav-links">
					
					<div class="nav-previous"><?php next_posts_link( __( '&larr; Older Entries ', 'switty' ) ); ?></div>
					
					<div class="nav-next"><?php previous_posts_link( __( 'Newer Entries &rarr;', 'switty' ) ); ?></div>

				</div>
			</nav>
		<?php
		}
	} else {
		echo '<div class="clearfix"></div>';
		the_posts_pagination( array(
					'prev_text' => __( '&laquo;', 'switty' ),
					'next_text' => __( '&raquo;', 'switty' ),
		) );
	}
}

/**
 * Thumbnail.
 */
function switty_thumbnail() {
	if ( has_post_thumbnail() ) {
	?>
		<div class="alignc">
			<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'aligncenter thumbnailloopimg' ) ); ?>
		</div>
	<?php
	}
}

/**
 * Posts core meta.
 */
function switty_core_meta() {
	?>

	<hr class="mrt10 mrb10" />
	
	<span class="switty-entry-meta">
		
		<span class="vcard author" itemprop="author" itemscope itemtype="http://schema.org/Person"><span class="fn"> <a class="url authorurl" rel="author" itemprop="url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" ><span itemprop="name"><?php the_author(); ?></span></a></span></span>
						
		<?php if ( has_category() ) { ?>
			<span class="categoryurl"><?php the_category( ', ' ); ?></span>
		<?php } ?>
						
		<a href="<?php the_permalink(); ?>" ><span class="post-date updated" itemprop="dateModified"><?php
		if ( 'updated' === get_theme_mod( 'post_date_view', 'updated' ) ) {
			echo the_modified_date();
		} else {
			echo the_date();
		}
		?></span></a>
						
	</span>
			
	<hr class="mrt10 mrb10" />

	<?php
}


/**
 * Head parts.
 */
function switty_head() {
	?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php
	if ( is_singular() && pings_open( get_queried_object() ) ) { ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php
	}
}


/**
 * Menu Fallback.
 *
 * @param array $args    Menu args.
 */
function switty_nav_fallback( $args ) {
	extract( $args );
	$output = null;
	if ( $container ) {
		$output = '<' . $container;
		if ( $container_id ) {
			$output .= ' id="' . $container_id . '"';
		}
		if ( $container_class ) {
			$output .= ' class="' . $container_class . '"';
		}
		$output .= '>';
	}

	$output .= '<ul';
	if ( $menu_id ) {
		$output .= ' id="' . $menu_id . '"';
	}
	if ( $menu_class ) {
		$output .= ' class="' . $menu_class . '"';
	}
	$output .= '>';

	$output .= '<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item current_page_item active"><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_attr__( 'Home', 'switty' ) . '</a></li>';

	$output .= '<li class="menu-item menu-item-type-post_type menu-item-object-page"><a target="_blank" href="http://rinkuyadav.com/switty/">' . esc_attr__( 'Demo', 'switty' ) . '</a></li>';

	$output .= '<li class="menu-item menu-item-type-post_type menu-item-object-page "><a target="_blank" href="http://rinkuyadav.com/switty/switty-theme-documentation">' . esc_attr__( 'Docs', 'switty' ) . '</a></li>';

	$output .= '<li class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#">' . esc_attr__( 'Multi Purpose', 'switty' ) . '</a></li>';

	$output .= '<li class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#">' . esc_attr__( 'Responsive', 'switty' ) . '</a></li>';

	$output .= '<li class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#">' . esc_attr__( 'SEO Friendly', 'switty' ) . '</a></li>';

	$output .= '<li class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#">' . esc_attr__( 'Page Builder', 'switty' ) . '</a></li>';

	if( current_user_can( 'manage_options' ) )
	{
		$output .= '<li class="menu-item menu-item-type-post_type menu-item-object-page "><a target="_blank" href="' . esc_url( home_url( '/wp-admin/nav-menus.php' ) ) . '">' . esc_attr__( 'Edit Menu', 'switty' ) . '</a></li>';
	}

	$output .= '</ul>';
	if ( $container ) {
		$output .= '</' . $container . '>';
	}
	echo wp_kses_post( $output );
}
