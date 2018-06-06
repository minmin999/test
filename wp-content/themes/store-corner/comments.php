<?php if ( post_password_required() ) : ?>
	<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'store-corner' ); ?></p>
	<?php return; endif; ?>
    <?php if ( have_comments() ) : ?>
	<div class="row bs-comment" id="comments">		
	<h2><?php echo comments_number(__('No Comments','store-corner'), __('1 Comment','store-corner'), __('% Comments','store-corner'))	; ?></h2>
	<?php wp_list_comments( array( 'callback' => 'store_corner_comment' ) ); ?>		
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="row blog-pagination">
			<div class="col-md-12 navi"><ul class="pager">
			<li class="previous"><?php previous_comments_link( __( '&larr; Older Comments', 'store-corner' ) ); ?></li>
			<li class="next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'store-corner' ) ); ?></li>
			</ul></div>
		</nav>
		<?php endif;  ?>
	</div>		
	<?php endif; ?>
	
<?php if ( comments_open() ) : ?>
	<div class="row bs-comment-form">
	<?php $fields=array(
		'author' => '<div class="form-group col-md-6"><label id="name-label"><input name="author" id="name" type="text" class="form-control" placeholder="'. __( 'Name*','store-corner').'"></label></div>',
		'email' => '<div class="form-group col-md-6"><label id="email-label"><input  name="email" id="email" type="text" class="form-control" placeholder="'. __( 'Email*','store-corner').'"></label></div>',
	);
	function store_corner_comment_fields($fields) { 
		return $fields;
	}
	add_filter('wl_comment_form_default_fields','store_corner_comment_fields');
		$defaults = array(
		'fields'=> apply_filters( 'wl_comment_form_default_fields', $fields ),
		'comment_field'=> '<div class="form-group col-md-12"><label id="comment-label">
		<textarea id="comment" name="comment" class="form-control" rows="5" placeholder="'. __( 'Message*','store-corner').'"></textarea></label></div>',		
		'logged_in_as' => '<p class="logged-in-as">' . __( "Logged in as ","store-corner" ).'<a href="'. admin_url( 'profile.php' ).'">'.$user_identity.'</a>'. '<a href="'. wp_logout_url( get_permalink() ).'" title="'. __('Log out of this account','store-corner').'">'.__(" Log out?","store-corner").'</a>' . '</p>',
		'title_reply_to' => __( 'Leave Your comments Here to %s','store-corner'),
		'class_submit' => 'btn comment-link',
		'label_submit'=>__( 'Post Comment','store-corner'),
		'comment_notes_before'=> '',
		'comment_notes_after'=>'',
		'title_reply'=> __('Leave Your Comment Here','store-corner'),		
		'role_form'=> 'form',		
		);
		comment_form($defaults); ?>	
</div>
<?php endif; // If registration required and not logged in ?>