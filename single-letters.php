<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>


<main id="content">
  <div class="container">
    <div class="row">
      <?php
        while ( have_posts() ) : the_post();
          get_template_part( 'template-parts/content/content-letters' );
        endwhile;
      ?>
    </div>
  </div>

  <?php require_once('template-parts/components/newsletter.php'); ?>
</main>
<?php

get_footer();
