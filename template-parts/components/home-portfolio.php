<section  class="section" aria-labelledby="portfolio-title">
  <header class="section__header" role="banner">
    <div class="container">
      <div class="section__wrap">
        <h2 class="section-title" id="portfolio-title">Últimos trabalhos</h2>
        <a href="<?php bloginfo( 'url' ) ?>/portfolio" class="button button--grey">todos projetos</a>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <?php
        $args = array(
          'post_type' => 'portfolio',
          'posts_per_page' => 6,
          'order' => 'DESC'
        );

        $project = new WP_Query( $args );

        if ( $project->have_posts() ) :
          while ( $project->have_posts() ) : $project->the_post();
      ?>
        <article class="home-blog__item col-lg-4">
          <a href="<?php the_permalink() ?>" aria-label="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail() ): ?>
              <?php the_post_thumbnail(); ?>
            <?php endif; ?>
          </a>  
        </article>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
