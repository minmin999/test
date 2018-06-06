<?php
/**
 * This file will load when there is no post.
 *
 * @package Switty
 */

?>
<div id="post-none" class="clearfix postsloop mrt50" >
	<div class="content-first pdb20">

		<div class="alignc">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/img/nothing-found.png' ); ?>" class="aligncenter thumbnailloopimg wp-post-image" alt="" height="260" width="1140">
		</div>
			
		<div class="content-second pdl20 pdr20">
			<h1 class="the-title entry-title"><?php esc_attr_e( 'Nothing Found', 'switty' ); ?></h1>
		</div>
					
		<div class="content-third pdl20 pdr20">

			<div class="entry-content">
						
				<p><?php esc_attr_e( 'It looks like nothing was found at this location. Maybe try a search?', 'switty' ); ?></p>
					
				<?php get_search_form(); ?>

			</div>
				
		</div>
			
	</div>
</div>
