<?php
/**
 * conradjones_cuilduin template for displaying Pages
 *
 * @package WordPress
 * @subpackage conradjones_cuilduin
 * @since conradjones_cuilduin 1.0
 */

get_header(); ?>
<section class="front-page slider-area slider-area-specifications">
	<div class="front-page slider-description">
			<span class="slider-description-text">Super energy efficient ‘A’-rated houses</span>
	</div>
</section>
	<section class="page-content primary primary-specifications" role="main">
		<span class="specifications-warranty-thumb"></span>
		<span class="specifications-warranty-text">
			Each home is covered by a <b>10 year structural warranty</b> insurance policy.
		</span>
	</section>

  <section class="page-content secondary-specifications">
    <?php
		$args = array(
				'cat'      => 6,
				'posts_per_page'     => -1,
				'orderby' => 'date',
				'order'    => 'ASC'
				);

		query_posts($args);
		?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="specifications-container">
	       <?php the_content(); ?>
			</div>
    <?php endwhile; endif; ?>
  </section>

<?php get_footer(); ?>
