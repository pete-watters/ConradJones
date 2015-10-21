<?php
/**
 * conradjones_cuilduin template for displaying Pages
 *
 * @package WordPress
 * @subpackage conradjones_cuilduin
 * @since conradjones_cuilduin 1.0
 */

get_header(); ?>

	<section class="page-content primary" role="main">
		<?php
					$my_id = 16;
					$post_id_1 = get_post($my_id);
					$title = $post_id_1->post_title;
					$content = $post_id_1->post_content;
					echo '<h1>' . $title . '</h1>';
					echo '<p>' . $content . '</p>';
		?>
		</section>

<?php get_footer(); ?>
