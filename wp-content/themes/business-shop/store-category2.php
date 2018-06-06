<?php 
/**
* Template part for displaying products.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Store Corner
*/
if(store_corner_is_wc()){ 
$display_col3 = get_theme_mod('store_corner_display_coll3_setting',0); 
$product_cat3 = get_theme_mod('store_corner_product_cat3');
if($display_col3==1 && is_array($product_cat3)){ ?>
<div class="container-fluid bs-categorys bs-margin">
	<div class="container">
		<div class="row bs-top-categorys">
		<?php foreach($product_cat3 as $cat){
			$cat_data = get_term_by('slug', $cat, 'product_cat');
			$cat_name = $cat_data->name;
			$cat_id = $cat_data->term_id;
			$term_link = get_term_link( $cat, 'product_cat' );
			$cat_thumb_id = get_woocommerce_term_meta( $cat_id, 'thumbnail_id', true );
			$shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );?>
			<div class="col-md-4 col-sm-4 home-cat">
				<div class="home-cat-prod">
					<div class="img-thumbnail">
					<?php if($shop_catalog_img!=''){ ?>
						<img class="img-responsive" src="<?php echo esc_url($shop_catalog_img[0]); ?>" alt="<?php echo esc_attr($cat_name); ?>" />
					<?php }else{ ?>
						<img src="images/" class="img-responsive" alt="<?php echo esc_attr($cat_name); ?>" />
					<?php } ?>
						<div class="overlay">
							<a href="<?php echo esc_url($term_link); ?>"><?php echo esc_attr($cat_name); ?></a>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>
<?php } } ?>