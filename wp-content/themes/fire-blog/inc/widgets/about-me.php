<?php

// Register and load the widget
function fire_blog_about_author_widget() {
    register_widget( 'fire_blog_about_author_widget' );
}
add_action( 'widgets_init', 'fire_blog_about_author_widget' );
 
// Creating the widget 
class fire_blog_about_author_widget extends WP_Widget {
 
    function __construct() {
        parent::__construct(
         
        // Base ID of your widget
        'fire_blog_about_author_widget', 
         
        // Widget name will appear in UI
        esc_html__( 'FireBlog Author Widget' , 'fire-blog'), 
         
        // Widget description
        array( 'description' => esc_html__( 'Custom author Widget Layout', 'fire-blog' ), ) 
        );
    }
 
    // Creating widget front-end
     
    public function widget( $args, $instance ) { 
        $blog_pages_id = $instance[ 'fire_blog_pages' ];
        $content_words = ! empty( $instance['excerpt'] ) ? $instance['excerpt'] : 20;
        $post_c = get_post($blog_pages_id); 
        $page_content = $post_c->post_content;
        $page_author = $post_c->post_author;
        $avatar = get_avatar(  $page_author, 150 );
        $page_image = get_the_post_thumbnail_url( $post_c->ID, 'thumbnail' );
        ?>
        
        <div class="widget clearfix about-author">
           
           <?php echo wp_kses_post( $args['before_title'] ) . esc_html( apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base ) ) . wp_kses_post( $args['after_title'] ); ?>

            <div class="about-widget text-center">
                <div class="entry">
                    <a href="<?php echo esc_url( get_permalink( $post_c->ID ) ); ?>">
                        <img src="<?php echo esc_url($page_image); ?>" alt="" class="rounded-circle img-fluid">
                    </a>
                </div>
                <div class="content_links" >
                    <p><?php echo esc_html( wp_trim_words( $page_content, $content_words, '...' ) ); ?></p>

                    <div class="blog-social">
                        <?php
                        if(! empty( $instance['facebook-link']) ){
                            echo '<a href="'.esc_url($instance['facebook-link']).'"><div class="socibox"><span class="fa fa-facebook"></span></div></a>';
                        }
                        if(! empty( $instance['twitter-link']) ){
                            echo '<a href="'.esc_url($instance['twitter-link']).'"><div class="socibox"><span class="fa fa-twitter"></span></div></a>';
                        }
                        if(! empty( $instance['instagram-link']) ){
                            echo '<a href="'.esc_url($instance['instagram-link']).'"><div class="socibox"><span class="fa fa-instagram"></span></div></a>';
                        }
                        if(! empty( $instance['google-plus-link']) ){
                            echo '<a href="'.esc_url($instance['google-plus-link']).'"><div class="socibox"><span class="fa fa-google-plus"></span></div></a>';
                        }

                        ?>
                       
                    </div><!-- end blog-social -->
                </div>
            </div><!-- end about -->
        </div><!-- end widget --> 
        <?php
    }    
    // Widget Backend 
    public function form( $instance ) {

        $title = !empty( $instance[ 'title' ] ) ?  $instance[ 'title' ] : '';
        $blog_pages = !empty( $instance[ 'fire_blog_pages' ] ) ?  $instance[ 'fire_blog_pages' ] : '';
        $excerpt = !empty( $instance[ 'excerpt' ] ) ?  $instance[ 'excerpt' ] : '';
        $facebook_link = !empty( $instance[ 'facebook-link' ] ) ?  $instance[ 'facebook-link' ] : '';
        $twitter_link = !empty($instance['twitter-link']) ? $instance['twitter-link'] : '';
        $google_plus_link = !empty($instance['google-plus-link']) ? $instance['google-plus-link'] : '';
        $instagram_link = !empty($instance['instagram-link']) ? $instance['instagram-link'] : '';
        ?>
         <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:' , 'fire-blog' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' , 'fire-blog' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'fire_blog_pages' ) ); ?>"><?php esc_html_e( 'Select author page:' , 'fire-blog' ); ?></label> 
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id( 'fire_blog_pages' )); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fire_blog_pages' ) ); ?>">
                <?php
                fire_blog_all_pages_option($blog_pages);
                ?>               
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'excerpt' ) ); ?>"><?php esc_html_e( 'Excerpt Length(Number of words):' , 'fire-blog' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'excerpt' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'excerpt' , 'fire-blog' )); ?>" type="number" value="<?php echo esc_attr( $excerpt ); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'facebook-link' ) ); ?>"><?php esc_html_e( 'Facebook Link:' , 'fire-blog' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook-link' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'facebook-link' , 'fire-blog' )); ?>" type="text" value="<?php echo esc_url( $facebook_link ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'twitter-link' ) ); ?>"><?php esc_html_e( 'Twitter Link:' , 'fire-blog' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter-link' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'twitter-link' , 'fire-blog' )); ?>" type="text" value="<?php echo esc_url( $twitter_link ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'google-plus-link' ) ); ?>"><?php esc_html_e( 'Google Plus Link:' , 'fire-blog' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'google-plus-link' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'google-plus-link' , 'fire-blog' )); ?>" type="text" value="<?php echo esc_url( $google_plus_link ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'instagram-link' ) ); ?>"><?php esc_html_e( 'Instagram Link:' , 'fire-blog' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'instagram-link' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'instagram-link' , 'fire-blog' )); ?>" type="text" value="<?php echo esc_url( $instagram_link ); ?>" />
        </p>

        <?php        
    }
     
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {

        $instance = array();

        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

        $instance['fire_blog_pages'] = ( ! empty( $new_instance['fire_blog_pages'] ) ) ? sanitize_text_field( $new_instance['fire_blog_pages'] ) : '';

        $instance['excerpt'] = ( ! empty( $new_instance['excerpt'] ) ) ? sanitize_text_field( $new_instance['excerpt'] ) : '';

        $instance['facebook-link'] = ( ! empty( $new_instance['facebook-link'] ) ) ? esc_url_raw( $new_instance['facebook-link'] ) : '';

        $instance['twitter-link'] = ( ! empty( $new_instance['twitter-link'] ) ) ? esc_url_raw( $new_instance['twitter-link'] ) : '';

        $instance['instagram-link'] = ( ! empty( $new_instance['instagram-link'] ) ) ? esc_url_raw( $new_instance['instagram-link'] ) : '';

        $instance['google-plus-link'] = ( ! empty( $new_instance['google-plus-link'] ) ) ? esc_url_raw( $new_instance['google-plus-link'] ) : '';

        return $instance;
    }
    
}