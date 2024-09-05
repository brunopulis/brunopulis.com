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
   
      <?php if ( have_posts() ) : ?>
        <header class="archive-header">
          <h1 class="archive-title"><?php echo single_term_title(); ?></h1>
          <?php odin_breadcrumbs(); ?>
        </header>

        <div class="category-description">
          <?php echo get_the_archive_description('', ''); ?>
        </div>
    
        <div class="row mt-5">
          <h2 class="visually-hidden">Artigos da categoria</h2>
          <div class="col-lg-8">
            <ul class="category__list">
              <div class="row">
              <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-lg-6">
                <li class="category__item">
                  <div class="category--inner">
                    <?php if ( has_post_thumbnail() ):  ?>
                      <div class="category__thumbnail">
                        <?php the_post_thumbnail(); ?>  
                      </div>
                    <?php endif; ?>
                    <div class="category__content">
                      <h3 class="h4">
                        <a href="<?php the_permalink() ?>" class="category__link" rel="bookmark"><?php the_title(); ?></a>
                      </h3>

                      <div class="category__excerpt">
                        <?php the_excerpt(); ?>
                      </div>
                    </div>
                    <div class="category__content--meta">
                      <time class="time" datetime="<?php echo get_the_date('Y-m-d g:i:s'); ?>">
                        <?php echo get_the_date('F j, Y'); ?>
                      </time>
                    </div>
                  </div>  
                </li>
                </div>
              <?php endwhile; ?>
              </div>
            </ul>

            <?php wp_pagenavi(); ?>
            <?php else: ?>
              <p>Desculpe, não encontramos nenhum post.</p>
            <?php endif; ?>
          </div>
          <div class="col-md-4">
            <?php echo get_sidebar('archive'); ?>
          </div>
        </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
