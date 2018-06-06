<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<div class="header-image"></div>

<?php do_action( 'vw_blog_magazine_above_slider_category' ); ?>

<?php /** Category section **/ ?>
<section id="categry">
	<div class="container">
		<div class="owl-carousel">
		  	<?php 
		    $page_query = new WP_Query(array( 'category_name' => get_theme_mod('vw_blog_magazine_category','theblog')));?>
		    <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
		        <div class="imagebox">
		        	<?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
		        	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		        </div>
		      <?php endwhile; 
		      wp_reset_postdata();
		  	?>
	  		<div class="clearfix"></div>
	  	</div>
	</div>
</section>
<div class="clearfix"></div>

<?php do_action( 'vw_blog_magazine_below_slider_category' ); ?>

<?php /** Category section **/ ?>
<section id="our_blog">
  <div class="container">
  	<div class="row">
	    <div class="col-md-9 col-sm-9">
	    	<div class="row">
	      		<?php $page_query = new WP_Query(array( 'category_name' => get_theme_mod('vw_blog_magazine_section_two','theblog')));?>
	        	<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>     	
		          	<div class="col-md-6 col-sm-6">
		          		<div class="postbox smallpostimage">
					      	<?php 
					          if(has_post_thumbnail()) { ?>
						        <div class="padd-box">
						          	<div class="box-image">
						            	<?php the_post_thumbnail();  ?>
						            	<div class="overlay">
						              	<div class="text"><i class="fas fa-camera"></i></div>
						            	</div>
						          	</div>
						        </div>
					      	<?php } ?>
					      	<div class="new-text">			          	
					          	<div class="box-content">
					            	<h4><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?></a></h4>
					            	<div class="metabox">
						                <span class="entry-date"><?php the_date(); ?></span>
						                <span class="entry-author"><?php the_author(); ?></span>
						                <span class="entry-comments"><?php comments_number( __('0 Comments','vw-blog-magazine'), __('0 Comments','vw-blog-magazine'), __('% Comments','vw-blog-magazine') ); ?></span>
						            </div>
						            <hr class="big">
						            <hr class="small">
						            <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_blog_magazine_string_limit_words( $excerpt,20 ) ); ?></p>
						            <div class="row">
							            <div class="col-md-4">
							              	<a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read Full', 'vw-blog-magazine' ); ?>"><?php esc_html_e('Read Full','vw-blog-magazine'); ?></a>
							            </div>
							            <div class="col-md-8">
							              	<div class="blog-icon">
								                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
								                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
								                <a href="https://plus.google.com/share?url=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
								                <a href="https://twitter.com/share?url=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
								                <a href="http://www.instagram.com/submit?url=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
							              	</div> 
							            </div>
							        </div>
					          	</div>
					      	</div>
					      	<div class="clearfix"></div> 
					  	</div>
		          	</div>	          	
	          		<?php endwhile; 
	          	wp_reset_postdata();
	      		?>
	      	</div>
	    </div>
	    <div class="col-md-3 col-sm-3">
	      <div id="sidebar"><?php dynamic_sidebar('home'); ?></div>
	    </div>
	</div>
  </div>
</section>

<?php do_action( 'vw_blog_magazine_below_blog_category' ); ?>

<div id="content-vw" class="container">
 	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>


<?php get_footer(); ?>