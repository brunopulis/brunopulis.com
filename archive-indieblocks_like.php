<?php
/**
 * Template Name: Like Archive
 *
 * The template for displaying Serviços page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row mb-3">
      <div class="d-flex justify-content-start align-items-baseline">
        <p style="padding-right: 10px">Você está em:</p>
        <?php odin_breadcrumbs(); ?>
      </div>
      <h1 class="entry-title">Likes</h1>
      <p>As notas são minhas postagens curtas, como se fossem meu pequeno microblog. <br> Elas têm seu próprio <a href="<?php bloginfo('url') ?>/notas/feed/">feed RSS</a> e são automaticamente distribuídas.</p>
    </div>

    <div class="row notes">
      <div class="">
        <?php
          $args = array(
            'post_type'      => 'indieblocks_like',
            'posts_per_page' => 10,
            'order'          => 'DESC'
          );

          $notes = new WP_Query( $args );
          
          if ( $notes->have_posts() ) :
            while ( $notes->have_posts() ) : $notes->the_post();
        ?>
          <article class="note h-entry">
            <div class="note__body">
              <h2 class="note__title">
                <a href="<?php the_permalink(); ?>" class="note__link c-card__link">
                  <?php the_title(); ?>
                </a>
              </h2>
              
              <div class="note__text">
                <p><?php the_content(); ?></p>
              </div>

              <footer class="note__footer">
                <time class="note__date" datetime="<?php echo get_the_date('Y-m-d H:m:s'); ?>">
                  <?php echo get_the_date('j F, Y'); ?>
                </time>
              </footer>
            </div>
          </article>
          <?php endwhile; ?>
          <div class="pagination">
            
          </div>
          <?php wp_reset_postdata(); ?>
          <?php else: ?>
            <p>Nenhuma nota encontrada.</p>
          <?php endif; ?>  
        </div>
      </div>
    </div>
  </div>
  <?php require_once('template-parts/components/newsletter.php'); ?>
</main><!-- #main -->

<?php
get_footer();
