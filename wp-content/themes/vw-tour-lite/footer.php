<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VW Tour Lite
 */
?>

<div class="footersec">
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
<div class="copyright-wrapper">
	<div class="container">
        <div class="copyright">
           <p><?php echo esc_html(get_theme_mod('vw_tour_lite_footer_copy',__('Tour WordPress Theme By','vw-tour-lite'))); ?> <?php vw_tour_lite_credit(); ?></p>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>