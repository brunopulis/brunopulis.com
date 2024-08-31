
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
    <div class="col-md-8">
      <div class="headline">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

        <?php
            $args = array(
              'post_type'      => 'blogrolls',
              'posts_per_page' => 10,
              'order'          => 'DESC'
            );

            $blog = new WP_Query( $args );

            if ( $blog->have_posts() ) :
              while ( $blog->have_posts() ) : $blog->the_post();
        ?>
        <article class="c-card">
          <h3 class="c-card__title">
            <a href="<?php bloginfo('url'); ?>/category/a11y" class="c-card__link"><?php the_title(); ?></a>
          </h3>

          <?php the_content(); ?>
        </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
