<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <title>DITR Animal Rescue</title>
  <?php wp_head(); ?>
</head>


<body>
  <!-- the "wrapper" class encapsulates everything, including the header -->
  <div id="page container">

    <header>
      <section>
        <h1>Diamonds In The Rough Animal Rescue INC.</h1>
      </section>
      <nav>
        <div class="navbar">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
      </nav>
    </header>
