<?php
/**
 * The template for displaying the footer
 */

?>

		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<?php
					get_template_part( 'template-parts/footer/footer', 'widgets' );

					get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div>
		</footer>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>