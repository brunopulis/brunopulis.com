<?php
/**
 * Template Name: Serviços
 *
 * The template for displaying Serviços page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <section class="services" id="blog" aria-labelledby="blog-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php odin_breadcrumbs(); ?>
          <div class="services__headline">
            <p>
              Ofereço serviços diferentes para ajudá-lo com suas necessidades de acessibilidade digital. 
              Você pode reservar individualmente ou em combinação.
            </p>
          </div>
        </div>
      </div>
      
      <div class="row services__content">
        <?php
          $args = array(
            'post_type'      => 'services',
            'posts_per_page' => 6,
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
                  <svg aria-hidden="true" class="service__icon service__icon--">
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
      
      <div class="service__contact">
        <p>Se estiver interessado em trabalhar comigo, sinta-se à vontade para <a href="mailto:hello@brunopulis.com?subject=Tenho interesse em seus serviços">enviar um e-mail</a>.</p>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
