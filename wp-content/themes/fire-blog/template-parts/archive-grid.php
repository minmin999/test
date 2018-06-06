<?php
global $post;
$post_id = $post->ID;
$image = get_the_post_thumbnail_url();
$post_cat = wp_get_post_terms( $post_id, 'category' );
$comments_count = wp_count_comments($post_id);
$total_comments = $comments_count->total_comments;
?>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="small-blog-box blog-box clearfix">
        <div class="blog-media">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'fire_blog_homepage_posts' ); ?>        
            </a>
        </div>
        <!-- end blog-media -->

        <div class="blog-desc text-center <?php echo has_post_thumbnail() ? '' : 'no_thumbnail'; ?>">

            <?php 
            if( !empty($post_cat) ): ?>
                <span class="cat-title">
                    <a href="<?php echo esc_url(get_term_link( $post_cat[0]->term_id ));?>">
                        <?php echo esc_html( $post_cat[0]->name );?>            
                    </a>
                </span>
            <?php endif; ?>
            
            <div class="blog-meta">
                 <span>
                    <a href="<?php echo esc_url( home_url() ); ?>/<?php echo date( 'Y/m' , strtotime( get_the_date() ) ); ?>"><i class="fa fa-calendar"></i> <?php echo esc_html(get_the_date()); ?></a> &nbsp;&nbsp;<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) )); ?>"><i class="fa fa-user"></i> <?php the_author_meta( 'user_login' , $post->post_author );?></a>&nbsp;&nbsp;
                    <a href="<?php the_permalink(); ?>/#respond"><i class="fa fa-comment"></i> <?php echo esc_html($total_comments == 0 ? esc_html__('0 Comment','fire-blog') : sprintf( _n( '%s Comment', '%s Comments', $total_comments, 'fire-blog' ), $total_comments )); ?></a>
                </span>
            </div>
            <!-- end meta -->

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <p><?php the_excerpt(); ?></p>

            <?php 
            fire_blog_get_three_social_links( $post_id , $image );
            ?>

            <div class="blog-bottom">
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                    <?php esc_html_e( 'Continue Reading', 'fire-blog' ); ?>
                </a>
            </div><!-- end bottom -->
        </div><!-- end desc -->
    </div><!-- end blog-box -->
</div><!-- end col -->