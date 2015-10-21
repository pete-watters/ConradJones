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
	<?php if( function_exists('cyclone_slider') ) cyclone_slider('house-slideshow'); ?>
	<div class="front-page slider-description">
			<span class="slider-description-text">Superb new 2, 3 and 4 bedroom 'A' -rated houses</span>
	</div>
</section>
	<section class="page-content primary" role="main">

		<?php
			if ( have_posts() ) : the_post();

				get_template_part( 'loop' ); ?>

				<aside class="post-aside"><?php

					wp_link_pages(
						array(
							'before'           => '<div class="linked-page-nav"><p>' . sprintf( __( '<em>%s</em> is separated in multiple parts:', 'conradjones_cuilduin' ), get_the_title() ) . '<br />',
							'after'            => '</p></div>',
							'next_or_number'   => 'number',
							'separator'        => ' ',
							'pagelink'         => __( '&raquo; Part %', 'conradjones_cuilduin' ),
						)
					); ?>

					<?php
						if ( comments_open() || get_comments_number() > 0 ) :
							comments_template( '', true );
						endif;
					?>

				</aside><?php

			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>

	</section>


  	<section class="page-content secondary">
      <?php
        $current_page_id = $post->ID;
        query_posts(array('post_parent' => $current_page_id, 'post_type' => 'page'));

        while (have_posts()) { the_post(); ?>
          <h2><?php the_title(); ?></h2>
        <?php } ?>
  	</section>

<?php get_footer(); ?>
