<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row">
      <?php if ( have_posts() ) : ?>
        <header class="col-xs-12 col-sm-12 col-md-8 mx-auto">
          <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'odin' ), get_search_query() ); ?></h1>
        </header><!-- .page-header -->

        <?php
          // Start the Loop.
          while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
          endwhile;

          // Post navigation.
          odin_paging_nav();
        else :
          // If no content, include the "No posts found" template.
          get_template_part( 'content', 'none' );
      endif;
      ?>
    </div>
  </div>
</main>

<?php
get_footer();
