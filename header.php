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
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} ?>

	<a id="skippy" class="visually-hidden sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

  <?php get_template_part( 'template-parts/top', 'bar' ); ?>

  <header id="header" class="d-flex align-items-center bg-dark">
    <div class="container d-flex justify-content-between">
      <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img src="<?php echo TEMPLATE_PATH; ?>/assets/images/logo.png" alt="" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain" aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <nav class="collapse navbar-collapse navbar-main-navigation" id="navbar">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'main-menu',
              'depth'          => 2,
              'container'      => false,
              'menu_class'     => 'nav navbar-nav',
              'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
              'walker'         => new Odin_Bootstrap_Nav_Walker()
            )
          );
				?>
      </nav>
    </div>
  </header><!-- End Header -->
>
	<section class="hero">
		<div class="container">
			<div class="row">
        <div class="col-xs-12 col-md-6">
            <h1 class="">Olá, eu sou <span class="" rel="me">Bruno Pulis.</span></h1>
            <p class="lead">Ajudo você a construir, testar e prototipar interfaces acessíveis.</p>
        </div>

        <div class="col-xs-12 col-md-6">

        </div>
			</div>
		</div>
	</section>

	<div id="wrapper" class="container">
		<div class="row">
