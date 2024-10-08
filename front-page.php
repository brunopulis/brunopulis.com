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
  <?php get_template_part( 'template-parts/home', 'hero' ); ?>
  <?php // get_template_part( 'template-parts/home', 'portfolio' ); ?>
  <?php get_template_part( 'template-parts/home', 'blog' ); ?>
  <?php get_template_part( 'template-parts/home', 'letters' ); ?>
</main>
<?php
get_footer();
