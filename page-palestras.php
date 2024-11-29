<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Bruno_Pulis
 * @since 2.2.0
 */

get_header(); ?>

<main id="content">
  <section class="hero">
    <div class="container col-12">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="d-flex justify-content-start align-items-baseline">
            <p style="padding-right: 10px">Você está em:</p>
            <?php odin_breadcrumbs(); ?>
          </div>
          <h1>
            <?php echo get_field('primary_headline'); ?>
          </h1>
          <div class="c-hero__lead">
            <?php echo get_field('primary_headline_copiar'); ?>
          </div>
          <a href="<?php echo get_field('page'); ?>" class="c-hero__link">
            <?php echo get_field( 'button_cta_label' ); ?>
          </a>
        </div>
        <div class="col-lg-6">
          <figure class="c-hero__image">
            <?php the_post_thumbnail(); ?>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <div class="row">
        <h2>Depoimentos</h2>
        <div class="depoiments">
          <?php
            $args = array(
              'post_type'      => 'depoiments',
              'posts_per_page' => 4,
              'meta_key'      => 'depoiments_type',
              'meta_value'    => 'palestras',
              'order'          => 'DESC'
            );

            $depoiments = new WP_Query( $args );

            if ( $depoiments->have_posts() ) :
              while ( $depoiments->have_posts() ) : $depoiments->the_post();
                $edition = get_field( 'letters_edition' );
          ?>
            <article class="card h-100 testimonial__item">
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
                  <?php if ( has_post_thumbnail() ):  ?>
                    <img src="http://lorempixel.com.br/120/48" width="120" height="48">
                  <?php endif; ?>
                </div>
              </div>
            </article>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="row mb-5">
        <h2 class="section-title g-0 mb-3" id="testimonials-title">Próximos eventos</h2>
        <ul class="list-grid">
          <?php
            $args = array(
              'post_type'      => 'palestra',
              'posts_per_page' => -1,
              'post_status'    => 'future',
              'order'          => 'DESC',
              'orderby' => 'date'
            );

            $talks = new WP_Query( $args );

            if ( $talks->have_posts() ) :
              while ( $talks->have_posts() ) : $talks->the_post();
                $date     = get_field( 'speaking_date' );
                $location = get_field( 'speaking_location' );
          ?>
            <li class="talk">
              <article class="card-body">
                <h3 class="card-title"><?php the_title(); ?></h3>
                <div class="mt-2">
                  <ul class="talk__list">
                    <li class="talk__item">
                      <svg aria-hidden="true" class="talk__icon talk__icon--small talk__icon--blue" width="16" height="16">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/solid.svg#calendar">
                      </svg>
                      <time class="talk__date" datetime="<?php echo $date; ?>"><?php echo $date; ?></time>
                    </li>
                    <li class="talk__item">
                      <svg aria-hidden="true" class="talk__icon talk__icon--small talk__icon--blue" width="16" height="16">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/solid.svg#map-pin">
                      </svg>
                      <p><?php echo $location; ?></p>
                    </li>
                  </ul>
                </div>
              </article>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else: ?>
            <p>Não existe nenhum evento agendado.</p>
          <?php endif; ?>
        </ul>
      </div>
      <div class="row">
        <h2 class="section-title g-0 mb-3" id="testimonials-title">Eventos anteriores</h2>
        <ul class="list-grid">
          <?php
            $args = array(
              'post_type'      => 'palestra',
              'posts_per_page' => -1,
              'post_status'     => 'published',
              'order'          => 'DESC',
              'orderby' => 'date'
            );

            $talks = new WP_Query( $args );

            if ( $talks->have_posts() ) :
              while ( $talks->have_posts() ) : $talks->the_post();
                $date     = get_field( 'speaking_date' );
                $location = get_field( 'speaking_location' );
          ?>
            <li class="talk">
              <article class="card-body">
                <h3 class="card-title"><?php the_title(); ?></h3>
                <div class="mt-2">
                  <ul class="talk__list">
                    <li class="talk__item">
                      <svg aria-hidden="true" class="talk__icon talk__icon--small talk__icon--blue" width="16" height="16">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/solid.svg#calendar">
                      </svg>
                      <time class="talk__date" datetime="<?php echo $date; ?>"><?php echo $date; ?></time>
                    </li>
                    <li class="talk__item">
                      <svg aria-hidden="true" class="talk__icon talk__icon--small talk__icon--blue" width="16" height="16">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/solid.svg#map-pin">
                      </svg>
                      <p><?php echo $location; ?></p>
                    </li>
                  </ul>
                </div>
              </article>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </section>

  <a href="<?php echo get_field('page'); ?>" class="button">
    <?php echo get_field( 'button_cta_label' ); ?>
  </a>
  <?php require_once('template-parts/components/newsletter.php'); ?>
</main>
<?php
get_footer();
