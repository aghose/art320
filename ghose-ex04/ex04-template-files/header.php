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
				<ul>
					<li><a href="index.html" title="Home">Home</a></li>
					<li><a href="about.html" title="About">About</a></li>
					<li><a href="gallery.html" title="Gallery">Gallery</a></li>
					<li><a href="contact.html" title="Contact">Contact</a></li>
				</ul>
			</nav>

			<div id="banner"></div> <!-- close banner -->
		</header>

		<section>
