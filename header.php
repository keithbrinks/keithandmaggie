<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<div class="page-wrap">

		<header class="site-header">

				<p class="getting-married">We're getting married!</p>
				<?php if (is_front_page()) { ?>
					<h1 class="site-title">
						<a href="<?php bloginfo('url'); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Keith <span>&amp;</span> Maggie</a>
					</h1>
				<?php } else { ?>
					<p class="site-title">
						<a href="<?php bloginfo('url'); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Keith <span>&amp;</span> Maggie</a>
					</p>
				<?php } ?>
				<p class="wedding-date">April 9th, 2016</p>

				<nav class="site-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'site_nav' ) ); ?>
				</nav>

		</header>
