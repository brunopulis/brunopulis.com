<?php
/**
 * Template Name: Blog
 *
 * The template for displaying blog page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <?php
    while ( have_posts() ) : the_post();
      get_template_part( 'content', 'blog' );
    endwhile;
  ?>
</main>
<?php
get_footer();
