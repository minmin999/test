<?php
/**
 * The template part for displaying services
 * @package The WP Fitness
 * @subpackage the_wp_fitness
 * @since 1.0
 */
?>

<?php
	$content = apply_filters( 'the_content', get_the_content() );
	$video = false;

	// Only get video from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
	}
?>

<div class="blog-sec">
  	<div class="mainimage">
	    <?php
			if ( ! is_single() ) {
				// If not a single post, highlight the video file.
				if ( ! empty( $video ) ) {
					foreach ( $video as $video_html ) {
						echo '<div class="entry-video">';
							echo $video_html;
						echo '</div>';
					}
				};
			}; 
		?>    
  	</div>
  	<h3><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?></a></h3>
  	<div class="post-info">
      	<i class="fa fa-calendar" aria-hidden="true"></i><span class="entry-date"><?php the_date(); ?></span>
      	<i class="fa fa-user" aria-hidden="true"></i><span class="entry-author"> <?php the_author(); ?></span>
      	<i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','the-wp-fitness'), __('0 Comments','the-wp-fitness'), __('% Comments','the-wp-fitness') ); ?></span> 
  	</div>
 	<p><?php the_excerpt(); ?></p>
  	<div class="blogbtn">
      	<a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read Full', 'the-wp-fitness' ); ?>"><?php esc_html_e('Read Full','the-wp-fitness'); ?></a>
  	</div>
</div>