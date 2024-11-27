<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<main id="content">
  <?php get_template_part( 'template-parts/heros/home', 'hero' ); ?>
  <?php get_template_part( 'template-parts/components/home', 'about' ); ?>
  <?php get_template_part( 'template-parts/components/home', 'services' ); ?>
  <?php get_template_part( 'template-parts/components/home', 'portfolio' ); ?>
  <?php get_template_part( 'template-parts/components/home', 'testimonials' ); ?>
  <?php get_template_part( 'template-parts/components/home', 'blog' ); ?>
  <?php get_template_part( 'template-parts/components/home', 'letters' ); ?>
</main>
<?php
get_footer();
