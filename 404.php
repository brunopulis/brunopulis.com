<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Bruno_Pulis
 * @since 2.2.0
 */

get_header(); ?>

<main id="content">
  <section class="py-3 py-md-5 min-vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">
            <h1 class="d-flex justify-content-center align-items-center gap-2 mb-4">
              <span class="display-1 fw-bold">4</span>
              <span class="display-1 fw-bold">0</span>
              <span class="display-1 fw-bold">4</span>
            </h1>
            <h2 class="h2 mb-2">Oops! Você está perdido.</h2>
            <p class="mb-5">A página que está procurando não existe.</p>
            <a class="button bsb-btn-5xl rounded-pill px-5 fs-6 m-0" href="<?php echo bloginfo( 'url' ) ?>/">Voltar para Início</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();
