<?php
/**
 * This file will load when visitor will land on a 404 page.
 *
 * @package Switty
 */

get_header();
?>
<div class="col-md-8">

	<div id="post-error-404" class="clearfix postsloop mrt50" >
		<div class="content-first pdb20">

		<div class="alignc">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/img/error-404.png' ); ?>" class="aligncenter thumbnailloopimg wp-post-image" alt="" height="260" width="1140">
		</div>
			
			<div class="content-second pdl20 pdr20">
				<h1 class="the-title entry-title"><?php esc_attr_e( 'Oops! That page can&rsquo;t be found.', 'switty' ); ?></h1>
			</div>
					
			<div class="content-third pdl20 pdr20">

				<div class="entry-content">
						
					<p><?php esc_attr_e( 'It looks like nothing was found at this location. Maybe try a search?', 'switty' ); ?></p>
					
					<?php get_search_form(); ?>

				</div>
				
			</div>
			
		</div>
	</div>

</div>
<?php get_sidebar(); ?>
<?php get_footer();?>
