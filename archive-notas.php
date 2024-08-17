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
      <?php odin_breadcrumbs(); ?>
      
      <h1>Notas</h1>
      <p>As notas são minhas postagens mais curtas, como se fossem tweets.
Em breve vou criar um feed específico para elas. <br/> Também são distribuídas nos meus perfis das redes sociais.</p>
     
      <div class="col-md-8">
        <div class="row">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'      => 'notas',
              'paged' => $paged,
              'posts_per_page' => 10,
              'order'          => 'DESC'
            );

            $notes = new WP_Query( $args );
            
            if ( $notes->have_posts() ) :
              while ( $notes->have_posts() ) : $notes->the_post();
          ?>
            <div class="col-md-12 mb-3">
              <blockquote class="c-note h-entry">
                <div class="c-note__body">
                  <span class="c-note__time">
                    <?php the_date(); ?>
                  </span>

                  <div class="c-note__content e-content p-name">
                    <p><?php the_content(); ?></p>
                  </div>
                </div>
              </blockquote>
            </div>
          <?php endwhile; ?>
          <div class="pagination">
            <?php wp_pagenavi( array( 'query' => $notes ) ); ?>
          </div>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();
