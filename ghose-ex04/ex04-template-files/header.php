<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body <?php wp_head(); ?> >

	<div id="wrapper">
		<header>

			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</nav>

			<div id="banner"></div> <!-- close banner -->
		</header>

		<section>
