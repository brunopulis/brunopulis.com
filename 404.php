<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Bruno_Pulis
 * @since 2.2.0
 */

get_header(); ?>

<div class="galaxy"></div>
	<main id="main" class="site-main">
			<header class="page-header">
				<h1 class="page-title">
					<span aria-hidden="true">🌎</span>
					<?php esc_html_e( 'Perdido no espaço', 'bruno-pulis' ); ?>
				</h1>
			</header><!-- .page-header -->

			<a class="button--secondary" href="<?php echo get_home_url() ?>">Voltar para página inicial</a>
	</main><!-- #main -->

<main id="content">
  <div class="container">
    <div class="row">
      <header class="page-header">
        <h1 class="page-title"><?php _e( 'Not Found', 'bruno-pulis' ); ?></h1>
      </header>

      <div class="page-content col-12">
        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'bruno-pulis' ); ?></p>
        <?php get_search_form(); ?>
      </div><!-- .page-content -->
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();
