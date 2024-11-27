<?php
/**
 * The template for displaying Archive pages.
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
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-9 mx-auto">
        <header class="page-header">
          <?php odin_breadcrumbs(); ?>    
          <h1><?php the_archive_title(); ?></h1>
        </header>

        <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'order' => 'DESC'
          );

          $blog = new WP_Query( $args );

          if ( $blog->have_posts() ) :
            while ( $blog->have_posts() ) : $blog->the_post();
        ?>
          <article class="c-card">
            <h3 class="c-card__title entry-title blog__title">
              <a href="<?php the_permalink(); ?>" rel="permalink" class="c-card__link">
                <?php the_title(); ?>
              </a>
            </h3>
            <p class="post-date">
              <time class="time" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('j F, Y'); ?>
              </time>
            </p>
          </article>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
        <?php wp_pagenavi(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php require_once('template-parts/components/newsletter.php'); ?>
</main><!-- #main -->

<?php
get_footer();
