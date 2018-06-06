<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ts-charity
 */
?>
    <div  id="footer" class="copyright-wrapper">
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
    <div class="copyright">
        <div class="footer-bor-two">
            <p><?php echo esc_html(get_theme_mod('ts_charity_footer_copy',__('copyright 2018 Charity Theme By','ts-charity'))); ?> <?php ts_charity_credit(); ?></p>
        </div>
    </div>
    <?php wp_footer(); ?>
    </body>
</html>