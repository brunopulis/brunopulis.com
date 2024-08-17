<?php
/**
 * Template Name: Portfolio
 *
 * The template for displaying Serviços page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <section>
    <div class="container">
      <div class="row">
        <h1 class="entry-title">Portfólio</h1>
        <div class="d-flex align-items-center justify-content-between">
          
        </div>
      </div>

      <div class="row mt-5 ">
        <ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu" id="menu-filter">
          <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
          <li class="list-inline-item"><a class="" data-filter=".seo">Seo</a></li>
          <li class="list-inline-item"><a class="" data-filter=".webdesign">Webdesign</a></li>
          <li class="list-inline-item"><a class="" data-filter=".WORK">WORK</a></li>
          <li class="list-inline-item"><a class="" data-filter=".wordpress">Wordpress</a></li>
        </ul>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <?php
          $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 3,
            'order' => 'DESC'
          );

          $blog = new WP_Query( $args );

          if ( $blog->have_posts() ) :
            while ( $blog->have_posts() ) : $blog->the_post();
        ?>
          <article class="home-blog__item col-lg-4">
            <div class="c-card">
              <div class="c-card__body">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(); ?>
                </a>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
