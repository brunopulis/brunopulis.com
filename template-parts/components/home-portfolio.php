<section  class="section" aria-labelledby="blog-title">
  <div class="headline p-1">
    <div class="container">
      <div class="row">
        <h2 id="letters-title">Últimos trabalhos</h2>

      </div>

      <div class="row mt-5 ">
        <ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu" id="menu-filter">
          <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
          <li class="list-inline-item"><a class="" data-filter=".seo">Seo</a></li>
          <li class="list-inline-item"><a class="" data-filter=".webdesign">Webdesign</a></li>
          <li class="list-inline-item"><a class="" data-filter=".WORK">WORK</a></li>
          <li class="list-inline-item"><a class="" data-filter=".wordpress">Wordpress</a></li>
        </ul>
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
          <div class="c-card">
            <div class="c-card__body">
              <h3 class="c-card__title">
                <a href="<?php the_permalink(); ?>" class="c-card__title">
                  <?php the_title(); ?>
                </a>
              </h3>
              <span class="post-date">
                <time class="time" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date('j F, Y'); ?>
                </time>
              </span>
              <p><?php the_excerpt(); ?></p>
              <a href="#">Leia o texto <span class="visually-hidden">sobre: <?php the_title();?></span></a>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
