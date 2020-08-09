<?php get_header(); ?>


<main>
  <!-- content-wrap contains all of the dynamic content of the page -->
  <section id="content-wrap">


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php the_content(); ?>
      <?php wp_link_pages(); ?>
    <?php endwhile; ?>


    <div><?php posts_nav_link(); ?></div><!-- .navigation -->
  <?php endif; ?>




</section>
</main>

<?php get_footer(); ?>
