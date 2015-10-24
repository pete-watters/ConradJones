<?php
/**
 * conradjones_cuilduin template for displaying Pages
 *
 * @package WordPress
 * @subpackage conradjones_cuilduin
 * @since conradjones_cuilduin 1.0
 */

get_header(); ?>

<section class="front-page slider-area">
		<?php if( function_exists('cyclone_slider') ) cyclone_slider('amenities'); ?>
	<div class="front-page slider-description">
			<span class="slider-description-text">Citywest is a centre of shopping and business</span>
	</div>
</section>

		<!-- print post contents -->
  <section class="page-content secondary-amenities">
		<?php
		$args = array(
				'cat'      => 14,
				'posts_per_page'     => -1,
				'orderby' => 'date',
				'order'    => 'ASC'
				);

		query_posts($args);
		?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="secondary-amenities-container">
					<div class="secondary-amenities-container-thumbnail">
						<?php
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail();
							}
							?>
					</div>
					<div class="secondary-amenities-container-content">
	       	     <h3><?php the_title(); ?></h3>
	       	     <?php the_content(); ?>
					</div>
			</div>
    <?php endwhile; endif; ?>
  </section>
<?php get_footer(); ?>
