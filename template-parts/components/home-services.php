<section class="section section--services" id="services" aria-labelledby="services-title">
  <div class="container">
    <div class="row">
      <div class="d-flex align-items-center justify-content-between">
        <h2 class="section-title" id="services-title">Meus serviços</h2>
        <a href="http://localhost/brunopulis/blog" class="button">veja todas os serviços</a>
      </div>
    </div>

    <div class="row">
      <?php
        $args = array(
          'post_type'      => 'services',
          'posts_per_page' => 3,
          'order'          => 'ASC'
        );

        $services = new WP_Query( $args );

        if ( $services->have_posts() ) :
          while ( $services->have_posts() ) : $services->the_post();
          
          $customClass = get_field('services_classes');
      ?>
        <div class="col-lg-4 mb-4">
          <article class="c-card h-100">
            <div class="service c-card__body">
              <header class="service__header">
                <svg aria-hidden="true" class="service__icon service__icon--<?php echo $customClass; ?>">
                  <use xlink:href="<?php echo TEMPLATE_PATH; ?>/assets/images/svgs/solid.svg#<?php echo $customClass; ?>">
                </use>
                </svg>
                <h3 class="c-card__title"><?php the_title(); ?></h3>
              </header>
              <div class="c-card__content">
                <?php the_content(); ?>
              </div>
            </div>
          </article>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
