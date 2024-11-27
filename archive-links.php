<?php
/**
 * Template Name: Links Archive
 *
 *
 * @package Bruno_Pulis
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row mb-4">
      <?php odin_breadcrumbs(); ?>
      <h1 class="entry-title">Links</h1>
      <p>Links interessantes que coletei ao longo da semana ou gostei.</p>
    </div>

      <ul class="list-grid bookmark__list">
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
          <li class="card bookmark__item">
            <div class="card-body">
              <h2 class="bookmark__title"><a href="<?php echo $sindycateLink; ?>" class="bookmark__link text-no-underline" target="_blank" rel="noopener noreferrer external"><?php the_title(); ?></a></h2>
              <p class="bookmark__text"><?php the_content(); ?></p>

              <footer class="bookmark__footer">
                <time class="bookmark__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date('j F, Y'); ?>
                </time>
              </footer>
            </div>
          </li>
          <?php endwhile;?>
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>Nenhum link encontrado.</p>
        <?php endif; ?>
            </ul>

        </div>
      </div>
    </div>
  </div>
  <?php require_once('template-parts/components/newsletter.php'); ?>
</main><!-- #main -->

<?php
get_footer();
