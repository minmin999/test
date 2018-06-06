<?php
/**
 * Blog functions.
 *
 * @package ThinkUpThemes
 */


/* ----------------------------------------------------------------------------------
	HIDE POST TITLE
---------------------------------------------------------------------------------- */

function smarter_thinkup_input_blogtitle() {

	echo	'<h2 class="blog-title">',
			'<a href="' . esc_url( get_permalink() ) . '" title="' . esc_attr( sprintf( __( 'Permalink to %s', 'smarter' ), the_title_attribute( 'echo=0' ) ) ) . '">' . get_the_title() . '</a>',
			'</h2>';
}


/* ----------------------------------------------------------------------------------
	BLOG CONTENT
---------------------------------------------------------------------------------- */

/* Input post thumbnail / featured media */
function smarter_thinkup_input_blogimage() {
global $post;

	if ( has_post_thumbnail() ) {
		echo '<div class="blog-thumb"><a href="' . esc_url( get_permalink( $post->ID ) ) . '">' . get_the_post_thumbnail( $post->ID, 'smarter-thinkup-column2-4/5' ) . '</a></div>';
	}
}

/* Input post excerpt / content to blog page */
function smarter_thinkup_input_blogtext() {
global $post;

// Get theme options values.
$thinkup_blog_postswitch = smarter_thinkup_var ( 'thinkup_blog_postswitch' );

	// Output full content - EDD plugin compatibility
	if( function_exists( 'EDD' ) and is_post_type_archive( 'download' ) ) {
		the_content();
		return;
	}

	// Output post content
	if ( is_search() ) {
		the_excerpt();
	} else if ( ! is_search() ) {
		if ( ( empty( $thinkup_blog_postswitch ) or $thinkup_blog_postswitch == 'option1' ) ) {
			if( ! is_numeric( strpos( $post->post_content, '<!--more-->' ) ) ) {
				the_excerpt();
			} else {
				the_content();
				wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'smarter' ), 'after'  => '</div>', ) );
			}
		} else if ( $thinkup_blog_postswitch == 'option2' ) {
			the_content();
			wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'smarter' ), 'after'  => '</div>', ) );
		}
	}
}


/* ----------------------------------------------------------------------------------
	BLOG META CONTENT & POST META CONTENT
---------------------------------------------------------------------------------- */

// Input sticky post
function smarter_thinkup_input_sticky() {
	printf( '<span class="sticky"><i class="fa fa-thumb-tack"></i><a href="%1$s" title="%2$s">' . __( 'Sticky', 'smarter' ) . '</a></span>',
		esc_url( get_permalink() ),
		esc_attr( get_the_title() )
	);
}

/* Input blog date */
function smarter_thinkup_input_blogdate() {
	printf( '<span class="date"><i class="fa fa-calendar-o"></i><a href="%1$s" title="%2$s"><time datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( get_the_title() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);
}

/* Input blog comments */
function smarter_thinkup_input_blogcomment() {

	if ( '0' != get_comments_number() ) {
	echo	'<span class="comment"><i class="fa fa-comments"></i>';
		if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) {;
			comments_popup_link( '%', '%', '%' );
		};
	echo	'</span>';
	}
}

/* Input blog categories */
function smarter_thinkup_input_blogcategory() {
$categories_list = get_the_category_list( __( ', ', 'smarter' ) );

	if ( $categories_list && smarter_thinkup_input_categorizedblog() ) {
		echo	'<span class="category"><i class="fa fa-folder-open"></i>';
		printf( '%1$s', $categories_list );
		echo	'</span>';
	};
}

/* Input blog tags */
function smarter_thinkup_input_blogtag() {
$tags_list = get_the_tag_list( '', __( ', ', 'smarter' ) );

	if ( $tags_list ) {
		echo	'<span class="tags"><i class="fa fa-tags"></i>';
		printf( '%1$s', $tags_list );
		echo	'</span>';
	};
}

/* Input blog author - Style 1 */
function smarter_thinkup_input_blogauthor1() {
	printf( '<span class="author"> ' . __( 'Posted by', 'smarter' ) . ' <a href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'smarter' ), get_the_author() ) ),
		get_the_author()
	);
}

/* Input blog author - Style 2 */
function smarter_thinkup_input_blogauthor2() {
	printf( '<span class="author"><i class="fa fa-pencil"></i><a href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'smarter' ), get_the_author() ) ),
		get_the_author()
	);
}


//----------------------------------------------------------------------------------
//	CUSTOM READ MORE BUTTON.
//----------------------------------------------------------------------------------

/* Input 'Read more' link */
function smarter_thinkup_input_readmore() {
global $post;

	echo '<p><a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">' . __( 'Read More', 'smarter') . '</a></p>';
}


/* ----------------------------------------------------------------------------------
	INPUT BLOG META CONTENT
---------------------------------------------------------------------------------- */

/* Add meta content to blog style */
function smarter_thinkup_input_blogmeta() {

	echo '<div class="entry-meta">';
		if ( is_sticky() && is_home() && ! is_paged() ) { smarter_thinkup_input_sticky(); }

		smarter_thinkup_input_blogauthor1();
		smarter_thinkup_input_blogdate();
		smarter_thinkup_input_blogcomment();
		smarter_thinkup_input_blogcategory();
		smarter_thinkup_input_blogtag();
	echo '</div>';
}


/* ----------------------------------------------------------------------------------
	INPUT POST META CONTENT
---------------------------------------------------------------------------------- */

function smarter_thinkup_input_postmeta() {

	echo '<header class="entry-header entry-meta">';
		smarter_thinkup_input_blogauthor2();
		smarter_thinkup_input_blogdate();
		smarter_thinkup_input_blogcomment();
		smarter_thinkup_input_blogcategory();
		smarter_thinkup_input_blogtag();
	echo '</header><!-- .entry-header -->';
}


/* ----------------------------------------------------------------------------------
	SHOW AUTHOR BIO
---------------------------------------------------------------------------------- */

/* HTML for Author Bio */
function smarter_thinkup_input_postauthorbiocode() {

	echo	'<div id="author-bio">',
			'<div id="author-image" class="one_sixth">',
			get_avatar( get_the_author_meta( 'email' ), '90' ),
			'</div>',
			'<div id="author-text" class="five_sixth last">',
			'<h3><a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"/>' . __( 'Written by', 'smarter' ) . ' ' . get_the_author() . '</a></h3>',
			wpautop( get_the_author_meta( 'description' ) ),
			'</div>',
			'</div>';
}

/* Output Author Bio */
function smarter_thinkup_input_postauthorbio() {

// Get theme options values.
$thinkup_post_authorbio = smarter_thinkup_var ( 'thinkup_post_authorbio' );

	if ( $thinkup_post_authorbio == '1' ) {
		smarter_thinkup_input_postauthorbiocode();
	}
}


/* ----------------------------------------------------------------------------------
	TEMPLATE FOR COMMENTS AND PINGBACKS (PREVIOUSLY IN TEMPLATE-TAGS).
---------------------------------------------------------------------------------- */

/* Display comments at bottom of post, page and project pages. */
function smarter_thinkup_input_allowcomments() {
	if ( comments_open() || '0' != get_comments_number() )
		comments_template( '/comments.php', true );
}


/* ----------------------------------------------------------------------------------
	TEMPLATE FOR COMMENTS AND PINGBACKS (PREVIOUSLY IN TEMPLATE-TAGS).
---------------------------------------------------------------------------------- */

function smarter_thinkup_input_commenttemplate( $comment, $args, $depth ) {

	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'smarter'); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'smarter' ), ' ' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
					<?php echo get_avatar( $comment, 60 ); ?>
			<footer>
				<span class="comment-author">
					<?php printf( __( 'By', 'smarter' ) . '  %s', sprintf( '%s', get_comment_author_link() ) ); ?>
				</span>
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em><?php _e( 'Your comment is awaiting moderation.', 'smarter'); ?></em>
					<br />
				<?php endif; ?>

				<span class="comment-meta">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time datetime="<?php esc_attr( comment_time( 'c' ) ); ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( '- %1$s', get_comment_date() ); ?>
					</time></a>
					<?php edit_comment_link( __( 'Edit', 'smarter' ), ' ' );
					?>
				</span>

				<span class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</span>

			<div class="comment-content"><?php comment_text(); ?></div>
			</footer>
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}


/* List comments in single page */
function smarter_thinkup_input_comments() {
	$args = array( 
		'callback' => 'smarter_thinkup_input_commenttemplate', 
	);
	wp_list_comments( $args );
}