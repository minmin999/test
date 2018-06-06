<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package VW Tour Lite
 */

get_header(); ?>

<?php do_action( 'vw_tour_lite_page_top' ); ?>

<div id="content-vw" class="container">
    <div class="middle-align">
        <?php while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title();?></h1>
            <?php the_content();

            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'vw-tour-lite' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'vw-tour-lite' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ) ); ?>               
        <?php endwhile; // end of the loop. ?>
        <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
        ?>
        <div class="clear"></div>    
    </div>
</div>

<?php do_action( 'vw_tour_lite_page_bottom' ); ?>

<?php get_footer(); ?>