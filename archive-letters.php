<?php
/**
 * Template Name: Newsletter Archive
 *
 * @package Bruno_Pulis
 * @since 2.2.0
 */
get_header(); ?>

<main id="content"> 
  <section class="hero hero--letters">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <?php odin_breadcrumbs(); ?>
          <span class="tagline">Insights valiosos sobre acessibilidade, Obsidian e organização digital.</span>
          <h1>Assine a Pulis Letters</h1>
          <p>Junte-se a mais de 300 assinantes e receba dicas sobre acessibilidade, <br> Obsidian e organização digital toda quinta-feira de manhã.</p>
          <?php echo do_shortcode( '[wpforms id="1048"]' );  ?>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h2>Edições anteriores</h2>
        <div class="row">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'      => 'letters',
              'paged'          => $paged,
              'posts_per_page' => 3,
              'order'          => 'DESC'
            );

            $letters = new WP_Query( $args );

            if ( $letters->have_posts() ) :
              while ( $letters->have_posts() ) : $letters->the_post();
                $edition = get_field( 'letters_edition' );
          ?>
            <div class="col-md-12 mb-3">
              <article class="card card__letter card__letter--small letter__item">
                <div class="c-card__body letter__body">
                  <div class="letter__edition">
                    <span><span aria-label="Edição: ">#</span> <?php echo $edition; ?></span>
                  </div>
                  <h3 class="c-card__title letter__title">
                    <a href="<?php the_permalink(); ?>" class="c-card__title">
                      <?php the_title(); ?>
                    </a>
                  </h3>
                  <time class="c-card__meta" datetime="<?php echo get_the_date('Y-m-d');?>">
                </div>
              </article>
            </div>
          <?php endwhile; ?>
          <div class="d-flex justify-content-start">
            <?php
              echo odin_pagination( 2, 1, true, $letters); 
            ?>
          </div>
          <?php wp_reset_postdata(); ?>
          
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4 letters--mail">
        <?php require_once( 'template-parts/components/newsletter-sidebar.php' ); ?>
      </div>
    </div>
    <div class="row">
      <?php get_template_part( 'template-parts/components/home', 'testimonials' ); ?>
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();
