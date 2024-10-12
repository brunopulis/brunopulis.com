<section  class="section" aria-labelledby="blog-title">
  <div class="container">
    <div class="row">
      <div class="d-flex align-items-center justify-content-between">
        <h2 class="section-title" id="blog-title">Últimas publicações</h2>
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
          <div class="card">
            <?php
              $category = get_the_category();
              $firstCategory = $category[0]->cat_name;
              $slugCategory  = $category[0]->category_nicename;
            ?>
            <span class="card-category card-category--<?php // echo $slugCategory; ?>">
              <?php // echo $firstCategory; ?>
            </span>
            <div class="card-body">
              <h3 class="card-title"><?php the_title(); ?></h3>
              <time class="card-date c-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('j F, Y'); ?>
              </time>

              <div class="card-text">
                <p><?php the_excerpt(); ?></p>
              </div>

              <a href="<?php the_permalink(); ?>" class="card-link">Leia o texto <span class="visually-hidden">sobre: <?php the_title();?></span></a>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
