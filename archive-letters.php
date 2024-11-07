<?php
/**
 * Template Name: Newsletter
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bruno_Pulis
 * @since 2.2.0
 */
get_header(); ?>

<main id="content"> 
  <section class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <?php odin_breadcrumbs(); ?>
          <span class="tagline">Insights valiosos sobre acessibilidade, Obsidian e organização digital.</span>
          <h1>Assine a Pulis Letters</h1>
          <p>
          Inscreva-se para se juntar a 500.000+ outros assinantes e receba e-mails regulares sobre neurociência, saúde e ferramentas relacionadas à ciência do Dr. Andrew Huberman.
          </p>
          <?php echo do_shortcode( '[wpforms id="1048"]' );  ?>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>Edições anteriores</h2>
        <div class="row">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'      => 'letters',
              'paged'          => $paged,
              'posts_per_page' => 3,
              'order'          => 'DESC'
            );

            $letters = new WP_Query( $args );

            if ( $letters->have_posts() ) :
              while ( $letters->have_posts() ) : $letters->the_post();
                $edition = get_field( 'letters_edition' );
          ?>
            <div class="col-md-12 mb-3">
              <article class="card card__letter card__letter--small letter__item">
                <div class="c-card__body letter__body">
                  <div class="letter__edition">
                    <span><span aria-label="Edição: ">#</span> <?php echo $edition; ?></span>
                  </div>
                  <h3 class="c-card__title letter__title">
                    <a href="<?php the_permalink(); ?>" class="c-card__title">
                      <?php the_title(); ?>
                    </a>
                  </h3>
                </div>
              </article>
            </div>
          <?php endwhile; ?>
          <div class="pagination d-flex justify-content-center">
            <?php
              echo odin_pagination( 2, 1, false, $letters); 
            ?>
          </div>
          <?php wp_reset_postdata(); ?>
          
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-4">
        <?php require_once( 'template-parts/components/newsletter-sidebar.php' ); ?>
      </div>
    </div>
    <div class="row">
      <?php get_template_part( 'template-parts/components/home', 'testimonials' ); ?>
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();
