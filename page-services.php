<?php
/**
 * Template Name: My services
 *
 * The template for displaying services page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
<section class="u-full-width hero">
	<div class="container col-xxl-12 py-5">
		<div class="row align-items-center g-5">
      <div class="col-lg-6">
        <h1 class="c-hero__title">
          <?php the_title(); ?>
        </h1>
        <p class="c-hero__lead">
          <?php echo get_field('hero_content'); ?>
        </p>

        <a href="<?php bloginfo('url'); ?>/servicos" class="c-hero__link">Conheça meus serviços</a>
			</div>
					
      <div class="col-lg-6">
        <figure class="c-hero__image">
          <img src="<?php echo TEMPLATE_PATH; ?>/assets/images/profile.png" loading="lazy" alt="">
        </figure>
      </div>
		</div>
	</div>
</section>
<?php require_once('template-parts/newsletter.php'); ?>
</main>
<?php
get_footer();
