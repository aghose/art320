
<?php get_header(); ?>

<article>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<?php the_content(); ?>
<?php wp_link_pages(); ?>

<div><?php comments_template();?></div><!--delete this div to remove commentblock -->

<?php endwhile; ?>


<div><?php posts_nav_link(); ?></div><!-- .navigation -->
<?php endif; ?>
</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
