<section  class="recent-blog-posts mt-5" aria-labelledby="blog-title">
  <div class="headline p-1">
    <div class="container">
      <div class="row">
        <h2 id="letters-title">Últimos artigos</h2>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <ul class="home-blog__list">
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
          <li class="home-blog__item">
            <article class="c-card c-card--transparent">
              <div class="c-card__body">
                <p class="post-date">
                  <time class="time" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php echo get_the_date('j F, Y'); ?>
                  </time>
                </p>
                <h3 class="c-card__title">
                  <a href="<?php the_permalink(); ?>" class="c-card__title">
                    <?php the_title(); ?>
                  </a>
                </h3>
              </div>
            </article>
          </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </ul>
    </div>
    <a href="<?php the_permalink(); ?>/blog" class="button button--wheat">Leia outras edições</a>
  </div>
</section>
