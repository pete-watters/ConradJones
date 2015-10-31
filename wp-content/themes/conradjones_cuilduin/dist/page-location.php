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
			<?php if( function_exists('cyclone_slider') ) cyclone_slider('location-slideshow'); ?>
	<div class="front-page slider-description">
			<span class="slider-description-text">Superb new 2, 3 and 4 bedroom 'A' -rated houses</span>
	</div>
</section>
	<section class="page-content primary" role="main">


		<div class="page" title="Page 4">
			<div class="section">
				<div class="layoutArea">
					<div class="column">
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

					</div>

					<div class="luas-map">
<!--						<a href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/luasline.gif" rel="lightbox">-->
<!--							<img class="alignright wp-image-306 size-full"  src="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/luasline.gif" alt="luasMap" data-id="306" />-->
<!--						</a>-->

						<!-- <a href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/luasMap.jpg" rel="lightbox">
							<img class="alignright wp-image-306 size-full"  src="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/luasMap.jpg" alt="luasMap" width="2344" height="316" data-id="306" />
						</a> -->

					</div>


				</div>
			</div>
		</div>

	</section>

  <section class="page-content secondary secondary-location">
    <?php query_posts('cat=5'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </section>
<?php get_footer(); ?>
