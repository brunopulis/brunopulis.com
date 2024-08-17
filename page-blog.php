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
  <?php get_template_part( 'content', 'blog' ); ?>
</main>
<?php
get_footer();
