<section class="testimonials" aria-labelledby="testimonials-title">
  <div class="container">
    <div class="row">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <h2 class="section-title" id="testimonials-title">Confira quem aprova!</h2>
          <p class="lead">Veja como posso te ajudar.</p>
        </div>
        <a href="<?php bloginfo( 'url' ) ?>/blog" class="button">veja todos os depoimentos</a>
      </div>
    </div>
  </div>
  <div class="container mt-5 mb-5">
    <div class="row g-2">
      <?php
        $args = array(
          'post_type'      => 'depoiments',
          'posts_per_page' => 3,
          'order'          => 'DESC'
        );

        $depoiments = new WP_Query( $args );

        if ( $depoiments->have_posts() ) :
          while ( $depoiments->have_posts() ) : $depoiments->the_post();
            $name_client = get_field( 'depoiments_name' );
            $job_title   = get_field( 'depoiments_job_title' );
      ?>
        <div class="col-md-4">
          <article class="testimonial__item">
            <div class="testimonial__rating" style="margin-bottom: 30px;">
              <?php for ($i=0; $i < 5; $i++): ?>
                <svg aria-hidden="true" class="" width="20" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/regular.svg#star"></svg>
              <?php endfor; ?>
            </div>
            <blockquote class="testimonial__quote">
              <p><?php the_content(); ?></p>
            </blockquote>

            <div class="testimonial__container">
              <div class="d-flex">
                <?php if ( has_post_thumbnail() ):  ?>
                  <div class="testimonial__client-image">
                    <img src="http://lorempixel.com.br/56/56" class="rounded-circle" width="56" height="56">
                  </div>
                <?php endif; ?>

                <div class="testimonial__client">
                  <p><?php echo $name_client; ?></p>
                  <p><?php echo $job_title; ?></p>
                </div>
                <img src="http://lorempixel.com.br/120/48" width="120" height="48">
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
