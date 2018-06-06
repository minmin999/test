<?php get_header(); ?>
<?php get_template_part( 'template-parts/template-part', 'head' ); ?>
<!-- start content container -->
<div class="row">
	<?php if ( envo_magazine_is_preview() ) { ?>
		<article class="col-md-8">
	<?php } else { ?>
		<article class="col-md-<?php envo_magazine_main_content_width_columns(); ?>">
	<?php } ?>
			<?php woocommerce_content(); ?>
		</article>       
		<?php get_sidebar( 'right' ); ?>
</div>
<!-- end content container -->

<?php
get_footer();
