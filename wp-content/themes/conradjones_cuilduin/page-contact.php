<?php
/**
 * conradjones_cuilduin template for displaying Pages
 *
 * @package WordPress
 * @subpackage conradjones_cuilduin
 * @since conradjones_cuilduin 1.0
 */

get_header(); ?>

	<section class="page-content primary primary-contact-page" role="main">
    <?php
          $my_id = 469;
          $post_id_1 = get_post($my_id);
          $title = $post_id_1->post_title;
          $content = $post_id_1->post_content;
          echo '<h1 class="page-content-primary-article-container-h1">' . $title . '</h1>';
    ?>
    <?php echo do_shortcode('[contact-form-7 id="468" title="Register Interest"]'); ?>

	</section>

<?php get_footer(); ?>
