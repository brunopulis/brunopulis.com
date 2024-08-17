<?php
/**
 * Template Name: Serviços
 *
 * The template for displaying Serviços page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <section class="services" id="blog" aria-labelledby="blog-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1><?php the_title(); ?></h1>
          <?php odin_breadcrumbs(); ?>
          <div class="services__headline">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
        <div class="col-md-4">
          <?php the_content(); ?>
        </div>
      </div>

      <div class="row">
        <h2>Mais serviços para advogados</h2>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
