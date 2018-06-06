<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VW Blog Magazine
 */
?>
<div id="footer" class="copyright-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <?php dynamic_sidebar('footer-1');?>
            </div>
            <div class="col-md-3 col-sm-3">
                <?php dynamic_sidebar('footer-2');?>
            </div>
            <div class="col-md-3 col-sm-3">
                <?php dynamic_sidebar('footer-3');?>
            </div>
            <div class="col-md-3 col-sm-3">
                <?php dynamic_sidebar('footer-4');?>
            </div>
        </div>
    </div>
</div>

<div id="footer-2" class="inner">
  	<div class="copyright text-center">
        <p><?php echo esc_html(get_theme_mod('vw_blog_magazine_footer_copy',__('Blog WordPress Theme By','vw-blog-magazine'))); ?> <?php vw_blog_magazine_credit(); ?></p>
        <a href="#" class="scrollup"><i class="fas fa-sort-up"></i></a>
  	</div>
  	<div class="clear"></div>
</div>

<?php wp_footer(); ?>
</body>
</html>
