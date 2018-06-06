<?php
/**
 * The template part for displaying services
 *
 * @package ts-charity
 * @subpackage ts-charity
 * @since ts-charity 1.0
 */
?>
<div class="col-md-4 col-sm-4">
  <div class="page-box grid">
    <div class="box-image"><?php the_post_thumbnail();  ?></div>
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
</div>