<?php
/**
 * Template Name: Notas
 *
 * The template for displaying Serviços page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row">
      <h1 class="entry-title">Notas</h1>
      <?php odin_breadcrumbs(); ?>
      <p>As notas são minhas postagens curtas, como se fossem meu pequeno microblog. <br> Elas têm seu próprio <a href="<?php bloginfo('url') ?>/notas/feed/">feed RSS</a> e são automaticamente distribuídas.</p>
    </div>

    <div class="row">
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type'      => 'notas',
          'paged'          => $paged,
          'posts_per_page' => 10,
          'order'          => 'DESC'
        );

        $notes = new WP_Query( $args );
        
        if ( $notes->have_posts() ) :
          while ( $notes->have_posts() ) : $notes->the_post();
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
        <?php endwhile; ?>
        <div class="pagination">
          <?php wp_pagenavi( array( 'query' => $notes ) ); ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>Nenhuma nota encontrada.</p>
        <?php endif; ?>  
      </ol>
    </div>
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();
