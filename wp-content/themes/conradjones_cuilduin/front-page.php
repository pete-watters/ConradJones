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

	<?php if( function_exists('cyclone_slider') ) cyclone_slider('house-slideshow'); ?>

	<section class="page-content primary" role="main">
		<?php
			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'loop', get_post_format() );

				endwhile;

			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>
		<div class="pagination">

			<?php get_template_part( 'template-part', 'pagination' ); ?>

		</div>
	</section>

	<section class="page-content secondary">
		<?php if( function_exists('cyclone_slider') ) cyclone_slider('location'); ?>
	</section>

<?php get_footer(); ?>
