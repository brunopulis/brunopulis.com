<section  class="section" aria-labelledby="portfolio-title">
  <header class="section__header">
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
          'posts_per_page' => 3,
          'order' => 'DESC'
        );

        $project = new WP_Query( $args );

        if ( $project->have_posts() ) :
          while ( $project->have_posts() ) : $project->the_post();
      ?>
        <article class="col-lg-4">
          <a href="<?php the_permalink() ?>" aria-label="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail() ): ?>
              <?php the_post_thumbnail(); ?>
            <?php endif; ?>
          </a>
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt();?></p>
          <?php
            $project_categories = get_the_terms(get_the_ID(), 'portfolio_attributes');
            if ($project_categories && !is_wp_error($project_categories)) :
          ?>
            <ul class="list">
              <?php foreach ($project_categories as $category) : ?>
                <li class="list__item">
                  <span class="list-badge list-badge--grey"><?php echo esc_html($category->name); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <a href="<?php the_permalink(); ?>" class="project__link">
                Ver projeto <span class="visually-hidden"><?php the_title(); ?></span>
                <svg aria-hidden="true" class="project__icon">
                  <use xlink:href="http://localhost/brunopulis/wp-content/themes/pulis/assets/images/svgs/solid.svg#chevron-right">
                </use></svg>
              </a>
        </article>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
