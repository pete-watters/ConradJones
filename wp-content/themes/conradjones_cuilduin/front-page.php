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

	<section class="page-content primary frontpage-content-container" role="main">
		<div class="homepage-content-container">

			<div class="page-content-primary-article-container homepage-content-container-text">
					<?php
								$my_id = 276;
								$post_id_1 = get_post($my_id);
								$title = $post_id_1->post_title;
								$content = $post_id_1->post_content;
								echo '<h1 class="page-content-primary-article-container-h1">' . $title . '</h1>';
								echo '<p>' . $content . '</p>';
					?>
			</div>

			<div class="page-content-primary-action-container homepage-content-container-actions">
				<div class="homepage-content-container-actions-register">
							<a href="http://comhairleteicneolaiochta.ie/projects/cuilduin/contact/">
								<span class="register-interest-button">

								</span>
							</a>

						</div>

					<div class="homepage-content-container-actions-download download-brochure">
					</div>
			</div>

		</div>
		<div class="download-brochure-container">

			<div class="download-brochure-background">
				<span class="download-brochure-text">VIEW BROCHURE</span>
			</div>
		</div>

	</section>

	<section class="page-content secondary">
		<div class="homepage-content-secondary-container">
			<span class="homepage-content-secondary-container-span"></span>

			<!-- <span class="homepage-content-secondary-container-span-svg homepage-content-secondary-container-span-svg-desktop">
				<h3 style="color:white;font-family: 'CenturyGothic';width:400px;">Country Living -  City Life</h3>
				<svg width="400" height="50">
					<line x1="0" y1="25" x2="290" y2="25" stroke="red" stroke-width="4"  />
					<circle cx="300" cy="25" r="10" stroke="red" stroke-width="4" fill="none" />
					<line x1="310" y1="25" x2="400" y2="25" stroke="red" stroke-width="4"  />
					Sorry, your browser does not support inline SVG.
				</svg>
			</span>
			<span class="homepage-content-secondary-container-span-svg homepage-content-secondary-container-span-svg-mobile">
				<h3 style="color:white;font-family: 'CenturyGothic';width:200px;">Country Living -  City Life</h3>
				<svg width="200" height="50">
					<line x1="0" y1="25" x2="140" y2="25" stroke="red" stroke-width="4"  />
					<circle cx="150" cy="25" r="10" stroke="red" stroke-width="4" fill="none" />
					<line x1="170" y1="25" x2="200" y2="25" stroke="red" stroke-width="4"  />
					Sorry, your browser does not support inline SVG.
				</svg>
			</span> -->


		</div>
		<?php echo do_shortcode('[print_slider_plus_lightbox]'); ?>
					<div class="view-gallery">

					</div>
	</section>

<?php get_footer(); ?>
