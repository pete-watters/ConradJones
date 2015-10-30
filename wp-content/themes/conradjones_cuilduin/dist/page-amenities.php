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
						<?php
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							//	the_post_thumbnail();

								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
								$url = $thumb['0'];
						?>
					<div class="secondary-amenities-container-thumbnail"
						style="background:url(<?php echo trim($url, ' ');?>);background-size:cover;">
						<?php } ?>

						<img src="<?php echo trim($url, ' ');?>" alt="" style="display: none;">
						
					</div>
					<div class="secondary-amenities-container-content">
						 <h3><?php the_title(); ?></h3>
						 <?php the_content(); ?>
					</div>
			</div>
    <?php endwhile; endif; ?>
  </section>
<?php get_footer(); ?>
