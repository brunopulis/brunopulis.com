<?php
/**
 * Template Name: Links
 *
 * The template for displaying Link page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row">  
      <h1 class="entry-title">Links</h1>
      <?php odin_breadcrumbs(); ?>
      <p>Links interessantes que vi ao longo da semana.</p>
     
      <div class="col-md-8">
        <div class="row">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'      => 'bookmark',
              'paged' => $paged,
              'posts_per_page' => 10,
              'order'          => 'DESC'
            );

            $bookmark = new WP_Query( $args );
            
            if ( $bookmark->have_posts() ) :
              while ( $bookmark->have_posts() ) : $bookmark->the_post();
                $sindycateLink = get_field( 'bookmark_url' );
          ?>
            <article class="home-blog__item col-lg-4">
              <div class="c-card h-100">
                <div class="c-card__body">
                  <h3 class="c-card__title">
                    <a href="<?php the_permalink(); ?>" class="c-card__link">
                      <?php the_title(); ?>
                    </a>
                  </h3>
                  <time class="c-card__meta" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php echo get_the_date('j F, Y'); ?>
                  </time>

                  <div class="c-card__content">
                    <p><?php the_content(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="c-card__link">Leia o texto <span class="visually-hidden">sobre: <?php the_title();?></span></a>
                  </div>
                </div>
              </div>
            </article>
            <?php endwhile;?>
            <div class="pagination">
              <?php wp_pagenavi( array( 'query' => $bookmark ) ); ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>Nenhum link encontrado.</p>
        <?php endif; ?>  
        </div>
      </div>
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();
