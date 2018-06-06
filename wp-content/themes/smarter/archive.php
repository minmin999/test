<?php
/**
 * The template for displaying Archive pages.
 *
 * @package ThinkUpThemes
 */

get_header(); ?>

			<?php if( have_posts() ): ?>

				<?php while( have_posts() ): the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('blog-style1'); ?>>

						<?php if ( has_post_thumbnail() ) {
							$column1 = ' two_fifth';
							$column2 = ' three_fifth last';
						} else {
							$column1 = NULL;
							$column2 = NULL;
						} ?>

						<header class="entry-header<?php echo $column1; ?>">
							<?php smarter_thinkup_input_blogimage(); ?>
						</header>		

						<div class="entry-content<?php echo $column2; ?>">
							<?php smarter_thinkup_input_blogtitle(); ?>

							<?php smarter_thinkup_input_blogmeta(); ?>

							<?php smarter_thinkup_input_blogtext(); ?>
							<?php smarter_thinkup_input_readmore(); ?>
						</div>

					<div class="clearboth"></div>
					</article><!-- #post-<?php get_the_ID(); ?> -->	

				<?php endwhile; ?>

				<?php the_posts_pagination(); ?>

			<?php else: ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>		

			<?php endif; ?>

<?php get_footer() ?>