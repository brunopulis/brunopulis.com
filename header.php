<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="color-scheme" content="light dark" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} ?>

	<a class="visually-hidden" ref="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>
  <header class="site-header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="<?php bloginfo('url') ?>/">Bruno Pulis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain"
                aria-controls="navMain"
                aria-expanded="false"
                aria-label="Menu Principal">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMain">
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'main-menu',
                'depth'          => 2,
                'container'      => false,
                'menu_class'     => 'navbar-nav mx-auto',
                'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
                'walker'         => new Odin_Bootstrap_Nav_Walker()
              )
            );
          ?>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item cta-btn">
              <a class="nav-link button__cta button--wheat" href="https://subscribepage.io/cartas">Assinar newsletter</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
