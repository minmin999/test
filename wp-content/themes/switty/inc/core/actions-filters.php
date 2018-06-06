<?php
/**
 * All actions and Filters.
 *
 * @package Switty
 */

/**
 * Custom excerpt length.
 *
 * @param int $length    The length of excerpt.
 */
function switty_custom_excerpt_length( $length ) {
	// Should not affect admin side.
	if ( ! is_admin() ) {
		$length = absint( get_theme_mod( 'excerpt_length', '57' ) );
	}
	return $length;
}
add_filter( 'excerpt_length', 'switty_custom_excerpt_length', 999 );

/**
 * Callback get_comment_author_link.
 */
function switty_comment_author_link( $link ) {
	return str_replace( "rel='external nofollow'", "target='_blank' rel='external nofollow'", $link );
}
add_filter( 'get_comment_author_link', 'switty_comment_author_link' );

/**
 * Display the comment form fields.
 *
 * @param array $fields    form fields.
 */
function switty_comment_form_fields( $fields ) {
	$commenter = wp_get_current_commenter();
	$req      = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;

	$fields   = array(

		'author' => '<div class="form-group comment-form-author"><label for="author">' . __( 'Name', 'switty' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> <input class="form-control" placeholder="' . __( 'Your name', 'switty' ) . '" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',

		'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email', 'switty' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> <input class="form-control" placeholder="' . __( 'Your email', 'switty' ) . '" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',

		'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website', 'switty' ) . '</label> <input class="form-control" placeholder="' . __( 'Your website', 'switty' ) . '" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>',

			);
	return $fields;
}
add_filter( 'comment_form_default_fields', 'switty_comment_form_fields' );

/**
 * Display the comment form textarea.
 *
 * @param array $args    comment form args.
 */
function switty_comment_form( $args ) {
	$args['comment_field'] = '<div class="form-group comment-form-comment">
		<label for="comment">' . _x( 'Comment', 'noun' , 'switty' ) . '<span class="required"> *</span></label> 
		<textarea class="form-control" placeholder="' . __( 'Your comment', 'switty' ) . '" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
		</div>';

	$args['class_submit'] = 'spclbtn'; // since WP 4.1.

	return $args;
}
add_filter( 'comment_form_defaults', 'switty_comment_form' );

/* Display a notice that can be dismissed */

// display notice and link for dismiss, if not pressed dismiss
function switty_admin_notice() {
	global $current_user ;
	$user_id = $current_user->ID;
		
	/* Check that the user hasn't already clicked to ignore the message */
	if( ! get_user_meta( $user_id, 'switty_ignore_notice' ) ) {
		
		echo '<div class="updated"><p>';
			
		printf( __( 'Thank you for activating Switty theme. Let start form <a target="_blank" href="%1$s">Docs File</a> | <a href="%2$s">Hide This Message</a>', 'switty' ), 'https://rinkuyadav.com/docs/switty-doc.docx', '?switty_notics_ignore=0' );
			
			echo "</p></div>";
	}
}
add_action( 'admin_notices', 'switty_admin_notice' );


// if link of ignore notice clicked, store user meta
function switty_handle_notic()
{
	global $current_user;
	$user_id = $current_user->ID;
	if( isset( $_GET['switty_notics_ignore']) && '0' == $_GET['switty_notics_ignore'] ) {
		add_user_meta( $user_id, 'switty_ignore_notice', 'true', true );
	}
}
add_action( 'admin_init', 'switty_handle_notic' );

//delete stored user meta on theme switch
function switty_delete_user_meta_ignore_notice() {
	global $current_user;
	$user_id = $current_user->ID;
	if( get_user_meta( $user_id, 'switty_ignore_notice' ) ) {
		delete_user_meta( $user_id, 'switty_ignore_notice' );
	}
}
add_action( 'switch_theme', 'switty_delete_user_meta_ignore_notice' );

/* Display a notice that can be dismissed END */
