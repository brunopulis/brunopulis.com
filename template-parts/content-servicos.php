
<?php
/**
 *
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<section class="services" id="blog" aria-labelledby="blog-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><?php the_title(); ?></h1>
        <p>
          Ofereço serviços diferentes para ajudá-lo com suas necessidades de acessibilidade digital. 
          Você pode reservar individualmente ou em combinação.
        </p>
      </div>
    </div>
    
    <div class="row">
      <div class="container">
        <div class="row">
          <?php
            $args = array(
              'post_type'      => 'services',
              'posts_per_page' => 6,
              'order'          => 'ASC'
            );

            $services = new WP_Query( $args );

            if ( $services->have_posts() ) :
              while ( $services->have_posts() ) : $services->the_post();
          ?>
          <div class="col-lg-4 mb-4">
            <article class="c-card h-100">
              <div class="c-card__body">
                <h3 class="c-card__title"><?php the_title(); ?></h3>
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
    </div>
    
    <p>
      Se estiver interessado em trabalhar comigo, sinta-se à vontade para enviar um e-mail para hello@brunopulis.com.
    </p>
  </div>
</section>
