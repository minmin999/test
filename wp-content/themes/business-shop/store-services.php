<?php 
/**
 * Template part for displaying services.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Business Shop
 */
$service_display = get_theme_mod( 'store_corner_display_service_setting', 0);
if($service_display == 1){
?>
<div class="container-fluid sc-services">
	<div class="container">
		<div class="row sc-servc">
		<?php for($i=1; $i<=3; $i++){
		if(get_theme_mod( 'service_'.$i)!=''){ ?>
			<a href="<?php echo esc_url(get_permalink(get_theme_mod( 'service_'.$i))); ?>">
			<div class="col-md-4 col-sm-4 serv">
				<div class="serv-content">
				<?php if(get_theme_mod( 'service_icon_'.$i)!=''){ ?>
					<i class="<?php echo esc_attr(get_theme_mod( 'service_icon_'.$i)); ?>"></i>
				<?php } ?>
					<h3 class="ser-name"><?php echo esc_attr(get_the_title(get_theme_mod( 'service_'.$i))); ?></h3>
					<p><?php echo esc_attr(get_the_excerpt(get_theme_mod( 'service_'.$i))); ?></p>
				</div>
			</div>
			</a>
		<?php } 
		}?>
		</div>
	</div>
</div>
<?php } ?>