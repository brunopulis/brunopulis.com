<section class="section" aria-labelledby="letters-title">
  <div class="container">
    <div class="row">
      <div class="section-wrapper">
        <h2 id="letters-title">Pulis Letters</h2>
        <a href="<?php the_permalink(); ?>/category/letters" class="button">veja todas as edições <span class="visually-hidden"> da <span></span></span></a>
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
                $edition = get_field( 'letters_edition' );
          ?>
            <div class="col-md-6 mb-3">
              <article class="letter__item c-card h-100">
                <div class="c-card__body letter__body">
                  <div class="letter__edition">
                    <span><span aria-label="Edição: ">#</span> <?php echo $edition; ?></span>
                  </div>
                  <h3 class="c-card__title letter__title">
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
        <article class="newsletter">
          <h2 class="newsletter__title">Assine a Pulis <span lang="en">Letters</span></h2>
          <div class="newsletter__intro">
            <p>
              Junte-se a mais de 200 assinantes e receba dicas sobre acessibilidade
              Obsidian e organização digital toda quinta-feira de manhã.
            </p>
          </div>
          <form class="c-newsletter__form" id="form-newsletter">
            <div class="c-newsletter-container">
              <div class="c-newsletter__form-field">
                <label for="email" class="visually-hidden">E-mail</label>
                <input type="email" id="email" name="fields[email]" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Seu melhor e-mail" class="form-control">
              </div>

              <div class="c-newsletter__form-field">
                <input type="submit" class="c-newsletter__form-button btn btn-primary" value="Assinar" />
              </div>
            </div>
          </form>
        </article>
      </div>
    </div>
  </div>
</section>
