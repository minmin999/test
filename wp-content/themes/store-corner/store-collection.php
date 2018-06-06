<?php
$recent_cates = get_theme_mod( 'store_corner_display_cate_setting', 0); 
$cates_heading = get_theme_mod( 'store_corner_heading_categories');
if($recent_cates == 1){ ?>
<!-- Category Start -->
	<div class="container-fluid bs-margin bs-catgegory woocommerce">
		<div class="container">
			<div class="row section-heading">
				<?php if($cates_heading!==''){ ?>
				<h1 class="section-head">
						<b></b><span class="section-title"><?php echo esc_attr($cates_heading); ?></span><b></b>
						<span class="section-line"></span>
				</h1>
			<?php } ?>
			</div>
			<?php if(store_corner_is_wc()){ ?>
			<div class="row bs-home-category">
			<?php $prod_categories = get_terms( 'product_cat', array(
					'orderby'    => 'name',
					'order'      => 'ASC',
					'hide_empty' => true
				));

				foreach( $prod_categories as $prod_cat ) :
					$cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
					$shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
					$term_link = get_term_link( $prod_cat, 'product_cat' );
					if( $cat_thumb_id):?>
					<div class="col-md-2 col-sm-2 col-xs-4 category-pro">
						<a href="<?php echo esc_url($term_link); ?>">
						<div class="img-thumbnail">
							<img src="<?php echo $shop_catalog_img[0]; ?>" alt="<?php echo esc_attr($prod_cat-$prod_cat->name); ?>" class="img-responsive"/>
							<div class="overlay"><a href="<?php echo esc_url($term_link); ?>"><?php echo esc_attr($prod_cat->name); ?></a></div>
						</div>
						</a>
					</div>

			<?php endif; endforeach; wp_reset_postdata(); ?>
				
			</div>
			<?php }else{ ?>
			<strong><?php _e('Please Activate the Woocommrece To display the Content','store-corner'); ?></strong>
		<?php } ?>
		</div>
	</div>
	<!-- Category End -->
<?php } ?>