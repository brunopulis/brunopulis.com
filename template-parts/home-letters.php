<section class="" aria-labelledby="letters-title">
  <div class="container">
    <div class="row">
      <div class="d-flex align-items-center justify-content-between">
        <h2 id="letters-title">Pulis Letters</h2>
        <a href="<?php the_permalink(); ?>/category/letters" class="button">veja todas as edições <span class="visually-hidden"> da <span lang="en">newsletter</span></span></a>
      </div>
      <p>Insights valiosos sobre acessibilidade, Obsidian e organização digital.</p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
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
          ?>
            <div class="col-md-6 mb-5">
              <article class="c-card h-100">
                <div class="c-card__body">
                  <h3 class="c-card__title">
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
      <div class="col-md-4">
        <article class="newsletter h-100">
          <h2>Assine a Pulis <span lang="en">Letters</span></h2>
          <p>
            Junte-se a mais de 200 assinantes e receba dicas sobre acessibilidade
            Obsidian e organização digital toda quinta-feira de manhã.
          </p>
        </article>
      </div>
    </div>
  </div>
</section>
