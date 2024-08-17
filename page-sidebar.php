<?php
/**
 * Template Name: With Sidebar
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

<main id="content">
  <div class="container">
    <div class="row" style="padding-top: 80px;">
      <div class="col-md-7">
        <?php
          while ( have_posts() ) : the_post();
            get_template_part( 'content', 'page' );
          endwhile;
        ?>
      </div>
      <aside class="col-md-5">
        <?php the_post_thumbnail('img-fluid'); ?>
      </aside>
    </div>
  </div>
</main>

<?php
get_footer();