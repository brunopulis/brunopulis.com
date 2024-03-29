<section  class="recent-blog-posts mt-5" id="recent-blog-posts">
  <div class="headline">
    <h2 class="display-4"><em>Pulis Letters</em></h2>
  </div>

  <div class="container">
    <ul class="row list-unstyled">
      <?php
        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
          'category__in' => array( get_cat_ID( $post->post_name ), get_cat_ID( 'letters' ) ),
          'order'          => 'DESC'
        );

        $letters = new WP_Query( $args );

        if ( $letters->have_posts() ) :
          while ( $letters->have_posts() ) : $letters->the_post();
      ?>
        <li class="col-md-4 mb-5">
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

    <a href="<?php the_permalink(); ?>/category/letters" class="button button--letters btn btn-secondary">Leia outras edições</a>
  </div>
</section>
