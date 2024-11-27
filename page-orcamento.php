<?php
/**
 * Template Name: Orçamento
 *
 * The template for displaying services page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div>
          Você está em: <?php odin_breadcrumbs(); ?>

          <h1 class="entry-title"><?php the_title(); ?></h1>

          <?php the_content(); ?>
        </div>

      </div>

      <div class="col-lg-4">
        <h2>Confira que já aprovou meu trabalho!</h2>
        depoiments section
      </div>
    </div>
  </div>
  <?php require_once('template-parts/components/newsletter.php'); ?>
</main>
<?php
get_footer();
