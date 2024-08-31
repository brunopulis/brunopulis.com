<?php
/**
 * Template Name: Search Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<main id="main" class="container">
  <div class="container">
    <div class="row">
      <div class="headline">
        <h1>Pesquisa</h1>
        <?php odin_breadcrumbs(); ?>
      </div>
      <div class="d-flex mx-auto">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</main><!-- #main -->
<?php
get_footer();
