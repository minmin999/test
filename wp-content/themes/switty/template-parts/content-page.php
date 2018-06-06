<?php
/**
 * This file will load inside page.php, Generally display content of a single page.
 *
 * @package Switty
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix postsloop mrt50' ); ?>>
	<div class="content-first pdb20">

		<?php switty_thumbnail(); ?>
			
		<div class="content-second pdl20 pdr20">
			<h1 class="the-title entry-title"><?php the_title(); ?></h1>
		</div>
					
		<div class="content-third pdl20 pdr20">
			<div class="entry-content">
					
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
					
			</div>
				
			<?php comments_template(); ?>
				
		</div>
			
	</div>
</div>
