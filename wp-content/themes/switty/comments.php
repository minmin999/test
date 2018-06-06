<?php
/**
 * This file will load comment section.
 *
 * @package Switty
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) { ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'switty' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'switty'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 42,
			) );
			?>
		</ol><!-- .comment-list -->

		<div class="clearfix"></div>
		
		<?php the_comments_navigation( array(
			'prev_text' => __( '&larr; Older comments', 'switty' ),
			'next_text' => __( 'Newer comments &rarr;', 'switty' ),
		) ); ?>

		<div class="clearfix"></div>

	<?php } // End if(). ?>

	<?php
	// If comments are closed and there are comments, let's leave a little note: Comments are closed.
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) {
	?>
		<p class="no-comments"><?php esc_attr_e( 'Comments are closed.', 'switty' ); ?></p>
	<?php } ?>

	<?php
	// This comment_form will display only if comments_open for this post so no need if condition.
	comment_form( array(
		'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
		'title_reply_after'  => '</h2>',
	) );
	?>

</div><!-- .comments-area -->
