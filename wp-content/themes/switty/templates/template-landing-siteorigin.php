<?php
/**
 * The template file for Landing Page for SiteOrigin Page Builder.
 *
 * Template Name: Landing Page for SiteOrigin Page Builder
 *
 * @package Switty
 */

?>
<?php get_header( 'landing-siteorigin' ); ?>
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
<?php get_footer( 'landing-siteorigin' ); ?>
