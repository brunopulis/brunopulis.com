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
      <?php odin_breadcrumbs(); ?>
      
      <h1>Links</h1>
      <p>As notas são minhas postagens mais curtas, como se fossem tweets.
Em breve vou criar um feed específico para elas. <br/> Também são distribuídas nos meus perfis das redes sociais.</p>
     
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
            <div class="col-md-12 mb-3">
              <article class="c-note h-entry">
                <div class="c-note__body e-content">
                  <h3><a href="<?php echo $sindycateLink ?>" class="p-name u-bookmark-of"><?php the_title(); ?></a></h3>

                  <div class="c-note__content e-content p-name">
                    <p><?php the_content(); ?></p>
                  </div>
                </div>
              </article>
            </div>
          <?php endwhile; ?>
          <div class="pagination">
            <?php wp_pagenavi( array( 'query' => $bookmark ) ); ?>
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
