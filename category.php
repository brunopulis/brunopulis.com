<?php
/**
 * The template for displaying Category pages.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<main id="primary" class="site-content">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <?php if ( have_posts() ) : ?>
          <header class="archive-header">
            <h1 class="archive-title"><?php the_archive_title(); ?></h1>
          </header>

          <ul class="category__list">
            <?php while ( have_posts() ) : the_post(); ?>
              <li class="category__item"><a href="<?php the_permalink() ?>" class="category__link" rel="bookmark"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
          </ul>
        <?php else: ?>
          <p>Desculpe, não encontramos nenhum post.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
