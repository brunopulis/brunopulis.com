<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Bruno_Pulis
 * @since 2.2.0
 */

get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row">
    <div>
        <?php odin_breadcrumbs(); ?>
        <?php
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content/content', 'page' );
          endwhile;
        ?>
      </div>
    </div>
  </div>
  <?php require_once('template-parts/components/newsletter.php'); ?>
</main>

<?php
get_footer();
