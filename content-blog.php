
<?php
/**
 *
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<section class="container" id="blog" aria-labelledby="blog-section">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="headline headline--left">
        <h2>Artigos</h2>
      </div>
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 10,
          'order' => 'DESC'
        );

        $blog = new WP_Query( $args );

        if ( $blog->have_posts() ) :
          while ( $blog->have_posts() ) : $blog->the_post();
      ?>
        <article class="c-card">
          <h3 class="c-card__title entry-title blog__title">
            <a href="<?php the_permalink(); ?>" rel="permalink" class="c-card__link">
              <?php the_title(); ?>
            </a>
          </h3>
          <p class="post-date">
            <time class="time" datetime="<?php echo get_the_date('Y-m-d'); ?>">
              <?php echo get_the_date('j F, Y'); ?>
            </time>
          </p>
        </article>
      <?php endwhile; ?>
      <?php odin_paging_nav(); ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
