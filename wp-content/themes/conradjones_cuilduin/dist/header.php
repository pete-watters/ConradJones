<?php
/**
 * conradjones_cuilduin template for displaying the header
 *
 * @package WordPress
 * @subpackage conradjones_cuilduin
 * @since conradjones_cuilduin 1.0
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie ie-no-support" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>         <html class="ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="site">

			<header class="site-header">
				<div class="header-nav-container">

					<div class="contact-details">
						<span class="contact-details-text">contact Hooke &amp; MacDonald</span>
						<br>
						<span class="contact-details-number">01 631 8402</span>
					</div>
					<div class="register-interest">
						<a href="http://comhairleteicneolaiochta.ie/projects/cuilduin/contact/">
						<span class="register-interest-button">

						</span>
						</a>

					</div>
				</div>

					<?php include('main-nav.php') ?>
			</header>

			<div class="logo-container">
				<span class="logo"></span>
			</div>
