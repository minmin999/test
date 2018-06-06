<?php
/**
 * The template file for Full Width for Elementor page builder.
 *
 * Template Name: Full Width for Elementor page builder
 *
 * @package Switty
 */

?>
<?php get_header( 'elementor' ); ?>
<div class="col-md-12">
	<?php
	while ( have_posts() ) : the_post();
	?>
	<div id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
		<div class="content-first" itemscope itemtype="http://schema.org/CreativeWork">
	
			<div class="content-third">
				<div class="entry-content" itemprop="text">
					
					<?php the_content(); ?>
						
					<div class="clearfix"></div>
						
					<?php
					wp_link_pages( array(
							'before'           => '<p class="pagelinks">' . esc_attr__( 'Pages:', 'switty' ),
							'after'            => '</p>',
							'link_before'      => '<span class="pagelinksa">',
							'link_after'       => '</span>',
							)
					);
					?>
					
				</div>
				
				<?php comments_template(); ?>
				
			</div>
			
		</div>
	</div>
	<?php
	endwhile;
	?>
</div>
<?php get_footer(); ?>
