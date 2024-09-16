<?php
/**
 * Template Name: Links
 *
 * The template for displaying Link page.
 *
 * @package Bruno_Pulis
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row mb-4">  
      <h1 class="entry-title">Links</h1>
      <?php odin_breadcrumbs(); ?>
      <p>Links interessantes que vi ao longo da semana.</p>
    </div>
     
      <ul class="bookmark__list">
        <?php
          $args = array(
            'post_type'      => 'bookmark',
            'posts_per_page' => -1,
            'order'          => 'DESC'
          );

          $bookmark = new WP_Query( $args );
          
          if ( $bookmark->have_posts() ) :
            while ( $bookmark->have_posts() ) : $bookmark->the_post();
              $sindycateLink = get_field( 'bookmark_url' );
        ?>
          <li class="bookmark__item">
            <h3 class="bookmark__title"><a href="<?php echo $sindycateLink; ?>" class="bookmark__link text-no-underline"><?php the_title(); ?></a></h3>
            <p class="bookmark__text"><?php the_content(); ?></p>
            
            <footer class="bookmark__footer">
              <time class="bookmark__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('j F, Y'); ?>
              </time>
            </footer>
          </li>
          <?php endwhile;?>
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
        <?php else: ?>
          <p>Nenhum link encontrado.</p>
        <?php endif; ?>  
            </ul>
           
        </div>
      </div>
    </div>
  </div>
  <?php require_once('template-parts/newsletter.php'); ?>
</main><!-- #main -->

<?php
get_footer();
