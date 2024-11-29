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
        <div class="d-flex justify-content-start align-items-baseline">
          <p style="padding-right: 10px">Você está em:</p>
          <?php odin_breadcrumbs(); ?>
        </div>
        <h1 class="entry-title" id="letters-title">Blog</h1>
        <p>Visite também:</p>

        <ul class="blog__list list-unstyled">
          <li class="blog__item"><a href="<?php bloginfo ( 'url' ); ?>/blogroll" class="blog__link">Sites legais</a></li>
          <li class="blog__item"><a href="<?php bloginfo ( 'url' ); ?>/notes" class="blog__link">Notas rápidas</a></li>
          <li class="blog__item"><a href="<?php bloginfo ( 'url' ); ?>/links" class="blog__link">Links</a></li>
          <li class="blog__item"><a href="<?php bloginfo ( 'url' ); ?>/likes" class="blog__link">Likes</a></li>      
          <li class="blog__item"><a href="<?php bloginfo ( 'url' ); ?>/livros" class="blog__link">Biblioteca</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'post',
          'paged' => $paged,
          'posts_per_page' => 9,
          'order' => 'DESC'
        );

        $blog = new WP_Query( $args );

        if ( $blog->have_posts() ) :
          while ( $blog->have_posts() ) : $blog->the_post();
      ?>
        <article class="home-blog__item col-lg-4">
          <div class="card h-100">
            <?php
              $category = get_the_category();
              $category_name = $category[0]->cat_name;
            ?>
            <?php the_post_thumbnail( 'blog-thumbnails', array( 'class' => 'card-img-top' ) ); ?>
            <div class="card-body">
              <span class="card-category"><?php echo $category_name; ?></span>
              <h3 class="card-title card-title--blog">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <div class="card-text">
                <p><?php the_excerpt(); ?></p>
              </div>
              
              <time class="card-date c-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('j F, Y'); ?>
              </time>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
      <div class="d-flex justify-content-start">
        <?php echo odin_pagination( 2, 1, false, $blog ); ?>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>

  <?php get_template_part( 'template-parts/newsletter' ); ?>
</main>
<?php
get_footer();
