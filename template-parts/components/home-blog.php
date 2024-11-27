<section class="section" aria-labelledby="blog-title">
  <header class="section__header">
    <div class="container">
      <div class="section__wrap">
        <h2 class="section-title" id="blog-title">Últimas publicações</h2>
        <a href="<?php bloginfo( 'url' ) ?>/blog" class="button button--grey">veja todas as publicações <span class="visually-hidden">do blog</span></a>
      </div>
    </div>
  </header>

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
        <article class="col-lg-4">
          <div class="card h-100">
            <?php
              $category = get_the_category();
              $category_name = $category[0]->cat_name;
            ?>
            <?php the_post_thumbnail( 'blog-thumbnails', array( 'class' => 'card-img-top' ) ); ?>
            <div class="card-body">
              <span class="card-category"><?php echo $category_name; ?></span>
              <h3 class="card-title card-title--blog"><?php the_title(); ?></h3>
              <div class="card-text">
                <p><?php the_excerpt(); ?></p>
              </div>
              
              <time class="card-date c-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('j F, Y'); ?>
              </time>
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
