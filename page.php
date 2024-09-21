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
    <div class="col-md-8">
        <?php
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content/content', 'page' );
          endwhile;
        ?>
      </div>
      <aside class="col-md-4" style="padding-top: 80px;">
        <?php the_post_thumbnail(); ?>
      </aside>
    </div>
  </div>
  <?php require_once('template-parts/newsletter.php'); ?>
</main>

<?php
get_footer();
