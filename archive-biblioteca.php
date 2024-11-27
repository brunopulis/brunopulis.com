<?php
/**
 * Template Name: Biblioteca Archive
 *
 * @package Bruno_Pulis
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row">
      <?php odin_breadcrumbs(''); ?>
      <h1 class="entry-title" id="bookshelf-section">Biblioteca pessoal</h1>
    </div>

    <div class="bookshelf">
      <div class="row">
        <?php
          $args = array(
            'post_type'      => 'biblioteca',
            'posts_per_page' => 6,
            'order'          => 'ASC'
          );

          $reading = new WP_Query( $args );
          
          if ( $reading->have_posts() ) :
            while ( $reading->have_posts() ) : $reading->the_post();

            $cover        = get_field( 'book_cover' );
            $author       = get_field( 'book_author' );
            $current_year = get_the_time('Y');

            $this_year = get_the_time('Y');
            if( $this_year!=$current_year ):
            $current_year = $this_year;
            echo '<h2 class="current-year">'.$current_year.'</h2>';
            endif;
        ?>
          <div class="col-lg-2 book" data-filter="">
            <a href="#" class="book__cover">
              <img src="<?php echo $cover; ?>" width="180" height="270" loading="lazy" class="img-fluid" alt="">
            </a>

            <div class="book__info">
              <h3 class="book__title"><?php the_title(); ?></h3>
              <p class="book__subtitle">Book subtitle</p>
              <p class="book__author"><?php echo $author; ?></p>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php require_once('template-parts/components/newsletter.php'); ?>
</main>
<?php
get_footer();
