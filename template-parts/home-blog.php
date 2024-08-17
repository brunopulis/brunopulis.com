<section  class="section" aria-labelledby="blog-title">
  <div class="container">
    <div class="row">
      <div class="section-wrapper">
        <h2 id="letters-title">Últimas publicações</h2>
        <a href="<?php bloginfo( 'url' ) ?>/blog" class="button">veja todas as publicações <span class="visually-hidden">do blog</span></a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'order' => 'DESC'
        );

        $blog = new WP_Query( $args );

        if ( $blog->have_posts() ) :
          while ( $blog->have_posts() ) : $blog->the_post();
      ?>
        <article class="home-blog__item col-lg-4">
          <div class="c-card h-100">
            <div class="c-card__body">
              <h3 class="c-card__title">
                <a href="<?php the_permalink(); ?>" class="c-card__link">
                  <?php the_title(); ?>
                </a>
              </h3>
              <time class="c-card__meta" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('j F, Y'); ?>
              </time>

              <div class="c-card__content">
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="c-card__link">Leia o texto <span class="visually-hidden">sobre: <?php the_title();?></span></a>
              </div>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
