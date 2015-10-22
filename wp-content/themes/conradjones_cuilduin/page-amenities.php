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

<!-- print header -->
<section class="page-content primary" role="main">
	<?php
		if ( have_posts() ) : the_post();
			get_template_part( 'loop' );
			else :
			get_template_part( 'loop', 'empty' );
		endif;
	?>
</section>

		<!-- print post contents -->
  <section class="page-content secondary-amenities">
    <?php query_posts('cat=14'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				}
				?>
       <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </section>
<?php get_footer(); ?>
