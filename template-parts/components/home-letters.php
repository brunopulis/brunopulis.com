<section class="section" aria-labelledby="letters-title">
  <header class="section__header" role="banner">
    <div class="container">
      <div class="section__wrap">
        <h2 class="section-title" id="letters-title">Pulis Letters</h2>
        <a href="<?php the_permalink(); ?>/letters" class="button button--grey">veja todas as edições <span class="visually-hidden"> da <span></span></span></a>
      </div>
      <p>Insights valiosos sobre acessibilidade, Obsidian e organização digital.</p>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="row">
          <?php
            $args = array(
              'post_type'      => 'letters',
              'posts_per_page' => 4,
              'order'          => 'DESC'
            );

            $letters = new WP_Query( $args );

            if ( $letters->have_posts() ) :
              while ( $letters->have_posts() ) : $letters->the_post();
                $edition = get_field( 'letters_edition' );
          ?>
            <div class="col-md-6 mb-3">
              <article class="card card__letter card__letter--small letter__item">
                <div class="c-card__body letter__body">
                  <div class="letter__edition">
                    <span>
                      <span aria-hidden="true">#</span>
                      <span class="visually-hidden">Edição:</span>
                      <?php echo $edition; ?>
                    </span>
                  </div>
                  <h3 class="card-title c-card__title letter__title">
                    <a href="<?php the_permalink(); ?>" class="c-card__title">
                      <?php the_title(); ?>
                    </a>
                  </h3>
                </div>
              </article>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <?php require_once( 'newsletter-sidebar.php' ); ?>
      </div>
    </div>
  </div>
</section>
