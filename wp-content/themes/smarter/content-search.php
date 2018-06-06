<?php
/**
 * The template for displaying content on the search results page.
 *
 * @package ThinkUpThemes
 */
?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('blog-style1'); ?>>

						<div class="entry-content">
							<?php smarter_thinkup_input_blogtitle(); ?>

							<?php smarter_thinkup_input_blogmeta(); ?>

							<?php the_excerpt(); ?>
							<?php smarter_thinkup_input_readmore(); ?>
						</div>

					</article><!-- #post-<?php get_the_ID(); ?> -->	