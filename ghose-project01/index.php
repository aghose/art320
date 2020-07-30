
<?php get_header(); ?>


<main>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>
    <?php wp_link_pages(); ?>

    <div><?php comments_template();?></div><!--delete this div to remove commentblock -->

  <?php endwhile; ?>


  <div><?php posts_nav_link(); ?></div><!-- .navigation -->
<?php endif; ?>


</main>

<?php get_footer(); ?>
