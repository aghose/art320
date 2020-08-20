<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Nova+Mono&family=Red+Rose&family=Ubuntu&display=swap" rel="stylesheet">
  <title>Aghose</title>
  <?php wp_head(); ?>
</head>
<body>

  <div id="wrapper" class="">

    <header>
      <h1>Akash Ghose</h1>
      <nav id="navbar">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </nav>
    </header>
