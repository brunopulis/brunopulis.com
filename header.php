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
  <link rel="stylesheet" href="<?php echo TEMPLATE_PATH; ?>/assets/css/custom.css">
</head>

<body <?php body_class(''); ?> style="min-height: 478px;">
	<?php if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} ?>

	<a class="skip-to-content contrast" ref="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

  <header>
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="contrast">
              Bruno Pulis
            </a>
          </li>
        </ul>

        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'main-menu',
              'depth'          => 2,
              'container'      => false,
              'menu_class'     => '',
              'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
              'walker'         => new Odin_Bootstrap_Nav_Walker()
            )
          );
        ?>

        <ul class="icons">
          <li><a href="#" class="btn-primary">Agendar consultoria</a></li>
        </ul>
      </nav>
    </div>
  </header>
