<?php
/**
 * conradjones_cuilduin template for displaying Archives
 *
 * @package WordPress
 * @subpackage conradjones_cuilduin
 * @since conradjones_cuilduin 1.0
 */

get_header(); ?>

	<section class="page-content primary" role="main"><?php

		if ( have_posts() ) : ?>

			<h1 class="archive-title">
				<?php
					if ( is_category() ):
						printf( __( 'Category Archives: %s', 'conradjones_cuilduin' ), single_cat_title( '', false ) );

					elseif ( is_tag() ):
						printf( __( 'Tag Archives: %s', 'conradjones_cuilduin' ), single_tag_title( '', false ) );

					elseif ( is_tax() ):
						$term     = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
						$taxonomy = get_taxonomy( get_query_var( 'taxonomy' ) );
						printf( __( '%s Archives: %s', 'conradjones_cuilduin' ), $taxonomy->labels->singular_name, $term->name );

					elseif ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'conradjones_cuilduin' ), get_the_date() );

					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'conradjones_cuilduin' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'conradjones_cuilduin' ) ) );

					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'conradjones_cuilduin' ), get_the_date( _x( 'Y', 'yearly archives date format', 'conradjones_cuilduin' ) ) );

					elseif ( is_author() ) : the_post();
						printf( __( 'All posts by %s', 'conradjones_cuilduin' ), get_the_author() );

					else :
						_e( 'Archives', 'conradjones_cuilduin' );

					endif;
				?>
			</h1><?php

			if ( is_category() || is_tag() || is_tax() ):
				$term_description = term_description();
				if ( ! empty( $term_description ) ) : ?>

					<div class="archive-description"><?php
						echo $term_description; ?>
					</div><?php

				endif;
			endif;

			if ( is_author() && get_the_author_meta( 'description' ) ) : ?>

				<div class="archive-description">
					<?php the_author_meta( 'description' ); ?>
				</div><?php

			endif;

			while ( have_posts() ) : the_post();

				get_template_part( 'loop', get_post_format() );

			endwhile;

		else :

			get_template_part( 'loop', 'empty' );

		endif; ?>

		<div class="pagination">

			<?php get_template_part( 'template-part', 'pagination' ); ?>

		</div>
	</section>

<?php get_footer(); ?>