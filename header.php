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
<html class="no-js" lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="color-scheme" content="light dark" />
    <meta property="fediverse:creator" content="brunopulis@mastodon.social">
    <link rel="me" href="mailto:hello@brunopulis.com">
    <link rel="webmention" href="https://webmention.io/brunopulis.com/webmention" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="pingback" href="https://webmention.io/brunopulis.com/xmlrpc" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} ?>

	<a class="visually-hidden" ref="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>
  <header class="site-header">
    <nav class="navbar navbar-expand-lg d-flex justify-content-center">
      <div class="container">
        <a class="navbar-brand h-card" href="<?php bloginfo('url') ?>/" rel="me">Bruno Pulis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain"
                aria-controls="navMain"
                aria-expanded="false"
                aria-label="Menu Principal">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navMain">
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'main-menu',
                'depth'          => 2,
                'container'      => false,
                'menu_class'     => 'navbar-nav',
                'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
                'walker'         => new Odin_Bootstrap_Nav_Walker()
              )
            );
          ?>
        </div>
      </div>
    </nav>
  </header>
