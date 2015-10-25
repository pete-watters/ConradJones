<?php
/**
 * conradjones_cuilduin template for displaying the Front-Page
 *
 * @package WordPress
 * @subpackage conradjones_cuilduin
 * @since conradjones_cuilduin 1.0
 */

get_header(); ?>

	<div class="home-widgets"><?php
		if ( function_exists( 'dynamic_sidebar' ) ) :
			dynamic_sidebar( 'home-sidebar' );
		endif; ?>
	</div>
	<section class="front-page slider-area">
		<?php if( function_exists('cyclone_slider') ) cyclone_slider('house-slideshow'); ?>
		<div class="front-page slider-description">
				<span class="slider-description-text">Superb new 2, 3 and 4 bedroom 'A' -rated houses</span>
		</div>
	</section>

	<section class="page-content primary" role="main">
			<div class="page-content-primary-article-container">


					<?php
								$my_id = 276;
								$post_id_1 = get_post($my_id);
								$title = $post_id_1->post_title;
								$content = $post_id_1->post_content;
								echo '<h1 class="page-content-primary-article-container-h1">' . $title . '</h1>';
								echo '<p>' . $content . '</p>';
					?>
						<div class="page-content-primary-action-container">
								<div class="register-interest">
									<span class="register-interest-text">
												<a href="http://comhairleteicneolaiochta.ie/projects/cuilduin/contact/">	REGISTER INTEREST</a>
									</span>
								</div>
								<div class="download-brochure download-brochure-button">
										<span class="download-brochure-text download-brochure-button-text">
												DOWNLOAD BROCHURE
										</span>
								</div>
							</div>

			</div>



		<aside class="page-content-primary-action-aside download-brochure">
			<span class="download-brochure-text">VIEW <br> BROCHURE</span>
		</aside>
	</section>

	<section class="page-content secondary">
		<h1>Country Living &bull; City Life</h1>
		<?php echo do_shortcode('[print_slider_plus_lightbox]'); ?>
					<div class="view-gallery">
							<span class="view-gallery">
									VIEW GALLERY
							</span>
					</div>
	</section>

<?php get_footer(); ?>
