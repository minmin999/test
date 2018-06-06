<?php
/**
 * Use: add the function for child theme
 * 
 * @package ostore-child
 */
/**
 * Woocommerce Class Plugin
 */
if ( ! function_exists( 'popular_ecommerce_is_woocommerce_activated' ) ) {
	function popular_ecommerce_is_woocommerce_activated() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

/************************************************************
 *              Popular Single Product Id
 *Description: get the woocommerce single products id
 ***********************************************************/
if( ! function_exists( 'popular_ecommerce_get_woocommerce_products_id' ) ) {
	function popular_ecommerce_get_woocommerce_products_id( ){
        if( !popular_ecommerce_is_woocommerce_activated()): return; endif;
        
            //products
            $product_args = array(
                'post_type' => 'product',
                'posts_per_page' => -1
            );
            $query = new WP_Query( $product_args );
            if($query->have_posts()) { while( $query->have_posts() ) { $query->the_post();
                $products_ids[ get_the_ID() ] = get_the_title();  
            }}
            
            wp_reset_postdata();

            return $products_ids;
        
            
        
	}

}



/************************************************************
 *              Popular eCommerce Single Functions
 *Description: single products function 
 ***********************************************************/
if( ! function_exists( 'popular_ecommerce_homepage_single_products_slider' ) ) {
	function popular_ecommerce_homepage_single_products_slider( ){
        if( !popular_ecommerce_is_woocommerce_activated()  ): return; endif;

    if( get_theme_mod('popular_ecommerce_single_products_section_enable',false) == true  ):
        //customizer Setting call
        $popular_ecommerce_single_products_slider_header_title = get_theme_mod( 'popular_ecommerce_single_products_slider_header_title','CHOOSE THE BEST' );
        $popular_ecommerce_single_products_slider_header_desc = get_theme_mod( 'popular_ecommerce_single_products_slider_header_desc','MIRUM EST NOTARE QUAM LITTERA GOTHICA QUAM NUNC PUTAMUS PARUM CLARAM!' );
        $popular_ecommerce_single_products_ids = get_theme_mod( 'popular_ecommerce_single_products_id',array());
        
        ?>
            <!-- singl-product -->
            <section class="single-product">
                <div class="container">
                    
                    <!-- Start Header Secion -->
                    <?php if( $popular_ecommerce_single_products_slider_header_title != '' || $popular_ecommerce_single_products_slider_header_title != '' ): ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading-text">
                                    <?php if( $popular_ecommerce_single_products_slider_header_title != '' ): ?><h2><?php echo esc_html( $popular_ecommerce_single_products_slider_header_title ); ?></h2><?php endif; ?>
                                    <?php if( $popular_ecommerce_single_products_slider_header_desc != '' ): ?><p><?php echo esc_attr( $popular_ecommerce_single_products_slider_header_desc ); ?></p><?php endif; ?>
                                   
                                    <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/images/line.png'); ?>" alt="line">
                                </div>	
                            </div>	
                        </div>
                    <?php endif; ?>
                    <!-- End Header Section -->
                    
                    <div class="owl-carousel product-slider">
                            <?php foreach( $popular_ecommerce_single_products_ids as $prodctu_count => $product_id ){ 
                               
                               //Products cart
                               $product = new WC_Product( intval($product_id) );

                                ?>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="single-img">
                                                <img src="<?php echo esc_url( get_the_post_thumbnail_url( $product->get_id(), 'full' ) ); ?>" alt="line">
                                            </div>	
                                        </div>
                                        <div class="col-md-7">
                                            <div class="single-text">
                                                <h3><?php echo esc_attr( $product->get_name() ); ?></h3>
                                                <span class="products-price" >
                                                    <?php
                                                        //Single Products Price
                                                        $single_products_price_symbol = get_woocommerce_currency_symbol();
                                                        $single_products_get_price = $product->get_price();
                                                        $single_products_get_regular_price = $product->get_regular_price();

                                                        //Price Display Section
                                                        if( $single_products_get_regular_price == '' || $single_products_get_regular_price == $single_products_get_price ){
                                                            echo "<strong>".esc_html($single_products_price_symbol).esc_html($single_products_get_price)."</strong>"; 
                                                        }else{
                                                            echo "<strong><del>".esc_html($single_products_price_symbol).esc_html($single_products_get_regular_price)."</del> - ".esc_html($single_products_price_symbol).esc_html($single_products_get_price)."</strong>"; 
                                                        }

                                                    ?>
                                                <p><?php echo wp_kses_post( $product->get_description() );?></p>
                                                <div class="add-cart">
                                                    <button class="btn block" type="text"><a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>"><?php echo esc_html__('learn more','popular-ecommerce'); ?></button>
                                                    <button class="btn lite-blue woocommerce" type="text">
                                                        <?php
                                                            //Add to Cart
                                                            echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                                                sprintf( '<a href="/%s/?add-to-cart=%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-quantity="1">add to cart</a>',
                                                                    esc_attr( get_bloginfo('name') ),
                                                                    esc_attr( $product_id ),
                                                                    esc_attr( $product_id ),
                                                                    esc_attr( $product->get_sku() ),
                                                                    $product->is_purchasable() ? 'add_to_cart_button' : '',
                                                                    esc_attr( $product->get_type() ),
                                                                    esc_html( $product->add_to_cart_text() )
                                                                ),
                                                            $product );

                                                        ?>
                                                    </button>
                                                </div>	
                                            </div>	
                                        </div>
                                    </div>
                                </div>  	
                            <?php }  ?>
                        </div>	

                </div>	
            </section>	
            <!-- # End Popular eCommerce Single Products Slider -->
        <?php
        endif;
	}

}
add_action('popular_ecommerce_homepage_slider','popular_ecommerce_homepage_single_products_slider');

/**
 * Footer Copyright section
*/
if ( ! function_exists( 'popular_ecommerce_footer_copyright' ) ) {    
    function popular_ecommerce_footer_copyright() {
    ?>
    <div class="col-sm-6 col-xs-12 coppyright">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'popular-ecommerce' ) ); ?>"><?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf( esc_html__( 'Proudly powered by %s', 'popular-ecommerce' ), 'WordPress' );
            ?></a>
            <span class="sep"> | </span><a href="<?php echo esc_url('www.themerelic.com'); ?>" >
            <?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( 'Theme: %1$s by %2$s.', 'popular-ecommerce' ), 'Popular eCommerce', 'ThemeRelic' );
            ?>
        </a>
    </div>
    <?php
    }
}
add_action( 'popular_ecommerce_copyright_section', 'popular_ecommerce_footer_copyright');