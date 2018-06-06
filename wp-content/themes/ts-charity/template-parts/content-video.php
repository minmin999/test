<?php
/**
 * The template part for displaying services
 *
 * @package ts-charity
 * @subpackage ts-charity
 * @since ts-charity 1.0
 */
?> 

<?php
	$content = apply_filters( 'the_content', get_the_content() );
	$video   = false;

	// Only get video from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
	}
?>

<div class="page-box">
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
  <div class="new-text">
    <h4><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>   
    <p><?php the_excerpt();?></p>
    <div class="content-bttn">
      <div class="second-border">
        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'ts-charity' ); ?>"><?php esc_html_e('Read More','ts-charity'); ?></a>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>