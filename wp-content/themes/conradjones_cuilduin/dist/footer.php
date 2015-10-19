<?php
/**
 * conradjones_cuilduin template for displaying the footer
 *
 * @package WordPress
 * @subpackage conradjones_cuilduin
 * @since conradjones_cuilduin 1.0
 */
?>
<footer>

			<div class="harcourt-developments">
					<span class="harcourt-developments-logo">
							
					</span>
			</div>
			<div class="hooke-mcdonald">
					<span class="hooke-mcdonald-logo"></span>
					<div class="hooke-mcdonald-contact">
					<span class="hooke-mcdonald-contact-phone">01 631 8402</span>
					<span class="hooke-mcdonald-contact-email">sales@hookemacdonald.ie</span>
					</div>
			</div>

				<ul class="footer-widgets"><?php
					if ( function_exists( 'dynamic_sidebar' ) ) :
						dynamic_sidebar( 'footer-sidebar' );
					endif; ?>
				</ul>

			</div>
		<?php wp_footer(); ?>

	  	<?php include('nav-bottom.php') ?>
		</footer>
	</body>
</html>
