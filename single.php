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
          get_template_part( 'content' );

          if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
        endwhile;
      ?>
    </div>
  </div>

  <?php require_once('template-parts/newsletter.php'); ?>
</main>
<?php

get_footer();
