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
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
    </div>
    <div class="depoiments">
      <?php
        $args = array(
          'post_type'      => 'depoiments',
          'posts_per_page' => -1,
          'order'          => 'DESC'
        );

        $depoiments = new WP_Query( $args );

        if ( $depoiments->have_posts() ) :
          while ( $depoiments->have_posts() ) : $depoiments->the_post();
            $name_client = get_field( 'depoiments_name' );
            $job_title   = get_field( 'depoiments_job_title' );
            $client_site = get_field( 'depoiments_site' );
      ?>
        <article class="testimonial__item testimonial__item--border">
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
                <p><?php echo $client_site; ?></p>
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
  <?php require_once('template-parts/components/newsletter.php'); ?>
</main>
<?php
get_footer();
