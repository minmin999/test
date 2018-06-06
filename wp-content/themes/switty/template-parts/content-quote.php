<?php
/**
 * This file will load inside single.php, generally to display single post.
 *
 * @package Switty
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix postsloop mrt50' ); ?>>
	<div class="content-first pdb20" itemscope itemtype="http://schema.org/CreativeWork">

		<?php
		if ( '1' == get_theme_mod( 'single_post_thumbnail', '1' ) ) {
			switty_thumbnail();
		}
		?>
			
		<div class="content-second pdl20 pdr20">
			<h1 class="the-title entry-title" itemprop="headline"><?php the_title(); ?></h1>
		</div>
					
		<div class="content-third pdl20 pdr20">
			
			<?php switty_core_meta(); ?>
			
			<div class="entry-content" itemprop="text">
					
				<?php the_content(); ?>
						
				<div class="clearfix pdt20"></div>
						
				<?php
				wp_link_pages( array(
						'before'           => '<p class="pagelinks">' . esc_attr__( 'Pages:', 'switty' ),
						'after'            => '</p>',
						'link_before'      => '<span class="pagelinksa">',
						'link_after'       => '</span>',
						)
				);
				?>
						
				<?php
				if ( has_tag() ) { ?>
					<div class="singletags">
						<p>
							<span class="fa fa-tag"></span>
							<?php esc_attr_e( 'Tags: ', 'switty' ); ?>
							<?php the_tags( '', ' - ', '' ); ?>
						</p>
					</div>
				<?php } ?>
						
			</div>

			<?php comments_template(); ?>
				
		</div>
			
	</div>
</div>
