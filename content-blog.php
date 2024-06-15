
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
    <div class="col-md-12">
      <div class="headline">
        <h2 id="blog-section">Artigos</h2>
        <p>Assine meu <a class="u-link" href="https://brunopulis.com/feed">RSS Feed</a></p>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-md-8">
        <ul class="c-card--blog">
          <?php
            $args = array(
              'post_type'      => 'post',
              'posts_per_page' => 12,
              'order'          => 'DESC'
            );

            $blog = new WP_Query( $args );

            if ( $blog->have_posts() ) :
              while ( $blog->have_posts() ) : $blog->the_post();
          ?>
            <li class="c-card__list">
              <article class="h-entry">
                <a href="<?php the_permalink(); ?>" class="p-name" rel="permalink"><?php the_title();?></a>
                <time class="dt-published c-card__time" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date('j F, Y'); ?>
                </time>
              </article>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </ul>
      </div>
      <div class="col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>
