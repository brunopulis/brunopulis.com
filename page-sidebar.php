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

<main id="content" class="">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'order' => 'DESC'
          );

            $blog = new WP_Query( $args );

            if ( $blog->have_posts() ) :
              while ( $blog->have_posts() ) : $blog->the_post();
        ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-img">
              <?php the_post_thumbnail();  ?>
            </div>
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <div class="entry-meta">
              <?php echo get_post_meta(); ?>
            </div>
            <div class="entry-content">
              <?php
                the_content();
              ?>
            </div>
          </article>
          <?php
                endwhile;
            endif;
          ?>
        </div>
      </div>
    </div>
</main><!-- #main -->

<?php

get_footer();
