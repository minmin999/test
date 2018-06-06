<?php
/**
 * The template part for displaying slider
 *
 * @package VW Tours Lite 
 * @subpackage vw_tours_lite
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

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>    
  <div class="services-box">
    <div class="service-image">
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
    <div class="service-text">
      <header class="entry-header">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  
      </header>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="read-more"><?php echo esc_html_e('Read More','vw-tour-lite'); ?></a>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>