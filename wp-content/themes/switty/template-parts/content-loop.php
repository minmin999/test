<?php
/**
 * This file will load inside loop, Generally in index.php.
 *
 * @package Switty
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix postsloop mrt50' ); ?> itemscope itemtype="http://schema.org/CreativeWork">
	<div class="content-first noverflow pdb20">

		<?php
		if ( '1' == get_theme_mod( 'archive_post_thumbnail', '1' ) ) {
			switty_thumbnail();
		}
		?>
			
		<div class="content-second pdl20 pdr20">
			<h2 class="the-title" itemprop="headline"><a class="entry-title" rel="bookmark" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h2>
		</div>
			
		<div class="content-third pdl20 pdr20">
			
			<?php switty_core_meta(); ?>
			
			<div class="entry-content" itemprop="text">
				
				<?php
				if ( 'excerpt' === get_theme_mod( 'excerpt_or_content', 'excerpt' ) ) {
					the_excerpt();
				} elseif ( 'content' === get_theme_mod( 'excerpt_or_content', 'excerpt' ) ) {
					the_content();
					
					wp_link_pages( array(
							'before'           => '<p class="pagelinks">' . esc_attr__( 'Pages:', 'switty' ),
							'after'            => '</p>',
							'link_before'      => '<span class="pagelinksa">',
							'link_after'       => '</span>',
							)
					);
				}
				?>
				
			</div>
					
		</div>
			
	</div>
</div>
