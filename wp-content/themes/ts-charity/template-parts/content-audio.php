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
	$audio   = false;

	// Only get audio from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
	}
?>

<div class="page-box">
  <?php
    if ( ! is_single() ) {

      // If not a single post, highlight the audio file.
      if ( ! empty( $audio ) ) {
        foreach ( $audio as $audio_html ) {
          echo '<div class="entry-audio">';
            echo $audio_html;
          echo '</div><!-- .entry-audio -->';
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