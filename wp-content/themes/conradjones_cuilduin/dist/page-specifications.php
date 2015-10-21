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
	<div class="front-page slider-description">
			<span class="slider-description-text">Super energy efficient ‘A’-rated houses</span>
	</div>
</section>
	<section class="page-content primary" role="main">
		<span class="specifications-warranty-thumb"></span>
		<span class="specifications-warranty-text">
			Each home is covered by a <b>10 year structural warranty</b> insurance policy.
		</span>
	</section>

  <section class="page-content secondary-specifications">
    <?php query_posts('cat=6'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="specifications-container">
	       <?php the_content(); ?>
			</div>
    <?php endwhile; endif; ?>
  </section>

<?php get_footer(); ?>
