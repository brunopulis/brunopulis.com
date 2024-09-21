<?php
/**
 * The template for displaying blog page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row">
      <div class="">
        <h1 class="entry-title" id="letters-title">Blog A</h1>
        <p>Assine meu <a href="<?php bloginfo('url'); ?>/feed">RSS Feed</a></p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 6,
          'order' => 'DESC'
        );

        $blog = new WP_Query( $args );

        if ( $blog->have_posts() ) :
          while ( $blog->have_posts() ) : $blog->the_post();
      ?>
        <article class="home-blog__item col-lg-4">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">
                <a href="<?php the_permalink(); ?>" class="c-card__link">
                  <?php the_title(); ?>
                </a>
              </h3>
              <time class="card-date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('j F, Y'); ?>
              </time>

              <div class="c-card__content">
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="card-link">Leia o texto <span class="visually-hidden">sobre: <?php the_title();?></span></a>
              </div>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
      <div class="pagination">
        <?php 
          echo paginate_links( 
            array( 
              'before_page_number'=> '<span class="visually-hidden" aria-hidden="true">',
              'after_page_number'=> '</span>',
              'next_text'    => 'Artigos antigos',
              'prev_text'    => 'Novos artigos'
            ) 
          );
        ?>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>

  <?php get_template_part( 'template-parts/newsletter' ); ?>
</main>
<?php
get_footer();
