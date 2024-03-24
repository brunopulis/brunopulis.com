<section  class="recent-blog-posts mt-5" id="recent-blog-posts">
  <div class="headline">
    <h2 class="display-4">Últimos artigos</h2>
  </div>

  <div class="container">
    <ul class="row list-unstyled">
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
        <li class="col-md-6 mb-5">
          <article class="c-card">
            <div class="c-card__body">
              <h3 class="c-card__title">
                <a href="<?php the_permalink(); ?>" class="c-card__title">
                  <?php the_title(); ?>
                </a>
              </h3>

              <time class="c-card__time time" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('j F, Y'); ?>
              </time>
            </div>
          </article>
        </li>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </ul>
  </div>
</section>
