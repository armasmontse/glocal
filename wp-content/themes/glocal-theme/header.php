<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<?php include_once('inc/favicon.php'); ?>

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="<?php echo THEMEURL;?>humans.txt">

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<?php wp_head(); ?>

	<!-- Slick -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>
<body <?php body_class(); ?>>

	<?php

	global $general_options;

	$general_options = array(
		'social' => array(
			'facebook' => array(
				'icon' => 'fab fa-facebook-f',
				'url' => get_field('facebook', 'general-options')
			),
			'twitter' => array(
				'icon' => 'fab fa-twitter',
				'url' => get_field('twitter', 'general-options')
			),
			'instagram' => array(
				'icon' => 'fab fa-instagram',
				'url' => get_field('instagram', 'general-options')
			),
			'youtube' => array(
				'icon' => 'fab fa-youtube',
				'url' => get_field('youtube', 'general-options')
			),
		),
		'email' => get_field('email', 'general-options')
	);

	global $featured_edition;

	$featured_edition = get_field('featured_edition', 'editions-options');

	global $paypal_url;

	$paypal_url = get_field('paypal_url', 'editions-options');

	?>

	<?php

	/**
	 *CLTVO: poner esto en true sólo en la versiones locales.
	 */

	if( !WP_DEBUG ){ include_once('inc/analytics.php'); }

	?>

	<!--[if gt IE 8]><div style="z-index: 1000; padding: 5px 0; text-align: center; position: absolute; top: 0; left: 0; width: 100%; background-color: #312822;"><p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: white;">Consider <a style="color: #EA7640;
	text-decoration: underline;" href="http://www.google.com/intl/es/chrome/browser/" target="_blank">updating your browser</a> in order to render this site correctly.</p></div><!-->
<!--<![endif]-->

	<!-- Aquí abre el main-wrap -->
	<div class="main-wrap">
	<!--Menu -->
	<div>

		<?php

		// Publicidad solo en home
		
		if (is_front_page()):
			get_template_part('views/home/leaderboard-header');
		endif;

		?>

		<header class="header <?php if (is_front_page()): ?>is-home<?php endif ?>" id="header">

			<div class="header__container">
				<div class="header__brand">
					<a href="<?php echo esc_url( home_url( '/' ) ) ?>" class="header__logo">
						<?php include_once get_stylesheet_directory() . '/images/logo.php' ?>
						<?php include_once get_stylesheet_directory() . '/images/logo-sm.php' ?>
					</a>
				</div>
				<div class="header__right">
					<div class="header__right-content">

						<?php get_template_part('views/header/social'); ?>

						<div class="header__search header__icon"  id="header__icon__JS">
							<span class="header__link header__icon-search"><i class="fas fa-search"></i></span>
						</div>

						<button class="header__menu header__menu_JS white"><img src="<?php echo THEMEURL ?>images/menu-collapse-white.svg" alt=""></button>
						<button class="header__menu header__menu_JS black"><img src="<?php echo THEMEURL ?>images/menu-collapse.svg" alt=""></button>
					</div>

					<?php get_template_part('views/header/menu'); ?>

					<!-- Search -->
					<div id="header__searchbar__JS" class="header__searchbar">
						<?php get_search_form(); ?>
					</div>

				</div>
			</div>
		</header>
	</div>

	<?php get_sidebar(); ?>

	<!-- M O D A L  -->
	<?php get_template_part('views/general/modal-news'); ?>
