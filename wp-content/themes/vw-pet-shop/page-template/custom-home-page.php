<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php /** slider section **/ ?>
	<?php
	// Get pages set in the customizer (if any)
	$pages = array();
	for ( $count = 1; $count <= 5; $count++ ) {
	$mod = absint( get_theme_mod( 'vw_pet_shop_slidersettings-page-' . $count ));
		if ( 'page-none-selected' != $mod ) {
		  $pages[] = $mod;
		}
	}
	if( !empty($pages) ) :
	  $args = array(
	    'post_type' => 'page',
	    'post__in' => $pages,
	    'orderby' => 'post__in'
	  );
	  $query = new WP_Query( $args );
	  if ( $query->have_posts() ) :
	    $count = 1;
	    ?>
		<div class="slider-main">
	    	<div id="slider" class="nivoSlider">
		      <?php
		        $vw_pet_shop_n = 0;
				while ( $query->have_posts() ) : $query->the_post();
				  
				  $vw_pet_shop_n++;
				  $vw_pet_shop_slideno[] = $vw_pet_shop_n;
				  $vw_pet_shop_slidetitle[] = get_the_title();
				  $vw_pet_shop_content[] = get_the_excerpt();
				  $vw_pet_shop_slidelink[] = esc_url(get_permalink());
				  ?>
				   <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $vw_pet_shop_n ); ?>" />
				  <?php
				$count++;
				endwhile;
				wp_reset_postdata();
		      ?>
		    </div>

		    <?php
		    $vw_pet_shop_k = 0;
	      	foreach( $vw_pet_shop_slideno as $vw_pet_shop_sln )
	      	{ ?>
		      <div id="slidecaption<?php echo esc_attr( $vw_pet_shop_sln ); ?>" class="nivo-html-caption">
		        <div class="slide-cap  ">
		          <div class="container">
		            <h2><?php echo esc_html($vw_pet_shop_slidetitle[$vw_pet_shop_k]); ?></h2>
		            <p><?php echo esc_html($vw_pet_shop_content[$vw_pet_shop_k]); ?></p>
		            <a class="read-more" href="<?php echo esc_url($vw_pet_shop_slidelink[$vw_pet_shop_k] ); ?>"><?php esc_html_e( 'SHOP NOW','vw-pet-shop' ); ?></a>
		          </div>
		        </div>
		      </div>
		        <?php $vw_pet_shop_k++;
		    } ?>
		</div>
	  <?php else : ?>
	      <div class="header-no-slider"></div>
	    <?php
	  endif;
	endif;
?>

<section id="our-products">
	<div class="container">
	    <div class="text-center">
	        <?php if( get_theme_mod('vw_pet_shop_maintitle') != ''){ ?>     
	            <h3><?php echo esc_html(get_theme_mod('vw_pet_shop_maintitle',__('Pet Collection','vw-pet-shop'))); ?></h3>
	        <?php }?>
	    </div>
		<?php $pages = array();
		for ( $count = 0; $count <= 0; $count++ ) {
			$mod = absint( get_theme_mod( 'vw_pet_shop_page' . $count ));
			if ( 'page-none-selected' != $mod ) {
			  $pages[] = $mod;
			}
		}
		if( !empty($pages) ) :
		  $args = array(
		    'post_type' => 'page',
		    'post__in' => $pages,
		    'orderby' => 'post__in'
		  );
		  $query = new WP_Query( $args );
		  if ( $query->have_posts() ) :
		    $count = 0;
				while ( $query->have_posts() ) : $query->the_post(); ?>
				    <div class="row box-image text-center">
				        <p><?php the_content(); ?></p>
				        <div class="clearfix"></div>
				    </div>
				<?php $count++; endwhile; ?>
		  <?php else : ?>
		      <div class="no-postfound"></div>
		  <?php endif;
		endif;
		wp_reset_postdata()?>
	    <div class="clearfix"></div> 
	</div>
</section>

<?php get_footer(); ?>