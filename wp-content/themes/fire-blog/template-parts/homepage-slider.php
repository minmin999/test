<?php
$slider_cat = get_theme_mod( 'slider_category' );
$count = 0;
$args = array(
	'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 4,
	'cat' => $slider_cat,
);

$slider = new WP_Query( $args );

if( $slider->have_posts() ): ?>

    <section class="slider-section">

        <div class="slider multiple-items">

        	<?php while( $slider->have_posts() ):$slider->the_post(); ?>

                <div class="carousel-item<?php echo $count == 0 || $count == 1 ? ' active' : ''; ?>">

                    <?php the_post_thumbnail( 'fire_blog_homepage_slider' ); ?>

                    <div class="carousel-caption d-none d-md-block">
                        <h2><?php the_title(); ?></h2>
                        <p><?php echo esc_html( wp_trim_words( get_the_content(), 20, '...' ) ); ?></p>
                        <div class="blog-bottom text-center">
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e( 'Continue Reading', 'fire-blog' ); ?></a>
                        </div><!-- end bottom -->
                    </div>

                </div>

                <?php 
                $count++;
        	endwhile;
            wp_reset_postdata(); 
             ?>

        </div>

    </section><!-- end slider section -->
    
    <?php
endif;