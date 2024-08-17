<?php
/**
 * Template Name: Biblioteca
 *
 * The template for displaying Livros page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <section class="services" id="blog" aria-labelledby="blog-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php odin_breadcrumbs(''); ?>
          <div class="services__headline">
            <p>
              Minha biblioteca pessoal.
            </p>
          </div>
        </div>
      </div>
      
      <div class="row services__content">
        <?php
          $args = array(
            'post_type'      => 'biblioteca',
            'posts_per_page' => 6,
            'order'          => 'ASC'
          );

          $reading = new WP_Query( $args );

          if ( $reading->have_posts() ) :
            while ( $reading->have_posts() ) : $reading->the_post();
            
            $cover = get_field( 'book_cover' );
            $author = get_field( 'book_author' );
        ?>
          <div class="col-lg-4 mb-4">
            <article class="">
              <article class="book">
                <figure class="book__cover">
                  <a href="#">
                    <img src="<?php echo $cover; ?>" alt="" class="img-fluid" />
                  </a>
                </figure>

                <div class="book__info">
                  <h3 class="book__title"><?php the_title(); ?></h3>
                  <p class="book__author"><?php echo $author; ?></p>
                  <ul class="book__rating">
                    <li></li>
                  </ul>
                </div>
              </article>
            </article>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
