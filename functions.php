<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Sets content width.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
require_once get_template_directory() . '/core/classes/class-shortcodes-menu.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
require_once get_template_directory() . '/core/classes/class-theme-options.php';
require_once get_template_directory() . '/core/classes/class-options-helper.php';
require_once get_template_directory() . '/core/classes/class-post-type.php';
require_once get_template_directory() . '/core/classes/class-taxonomy.php';
require_once get_template_directory() . '/core/classes/class-metabox.php';
require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
require_once get_template_directory() . '/core/classes/class-contact-form.php';
require_once get_template_directory() . '/core/classes/class-post-form.php';
require_once get_template_directory() . '/core/classes/class-user-meta.php';
require_once get_template_directory() . '/core/classes/class-post-status.php';
require_once get_template_directory() . '/core/classes/class-term-meta.php';

// CPT
require_once get_template_directory() . '/inc/functions/cpt.php';
/**
 * Odin Widgets.
 */
require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';

if ( ! function_exists( 'odin_setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @since 2.2.0
	 */
	function odin_setup_features() {
    // Add support for multiple languages.
		load_theme_textdomain( 'odin', get_template_directory() . '/languages' );

    // Register nav menus.
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'odin' ),
        'footer' => __( 'Footer', 'odin' )
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );
    add_theme_support( 'letter-thumbnails', 440, 250, true );

		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 0,
			'height'        => 0,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => '',
			'uploads'       => true,
		);

		add_theme_support( 'custom-header', $default );

		/**
		 * Support Custom Background.
		 */
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);

		add_theme_support( 'custom-background', $defaults );

		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style( 'assets/css/editor-style.css' );

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option( 'posts_per_page' )
			)
		);

    // Add support for Post Formats.
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

    // Support The Excerpt on pages.
		add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Odin 2.2.10
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );
	}
}

add_action( 'after_setup_theme', 'odin_setup_features' );

/**
 * Register widget areas.
 *
 * @since 2.2.0
 */
function odin_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'odin' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'odin' ),
			'before_widget' => '<article id="%1$s" class="widget %2$s">',
			'after_widget' => '</article>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
    )
	);

  register_sidebar(
		array(
			'name' => 'Footer Sidebar 1',
			'id' => 'footer-sidebar-1',
			'description' => 'Appears in the footer area',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => '',
		)
	);
}

add_action( 'widgets_init', 'odin_widgets_init' );

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since 2.2.0
 */
function odin_flush_rewrite() {
	flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'odin_flush_rewrite' );

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function odin_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	wp_enqueue_style( 'odin-style', get_stylesheet_uri(), array(), null, 'all' );

  wp_enqueue_script( 'jquery' );

	// General scripts.
  wp_enqueue_script( 'bootstrap', $template_url . '/assets/js/vendor/bootstrap.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'bootstrap-jquery', $template_url . '/assets/js/vendor/jquery.min.js' );
  wp_enqueue_script( 'custom-scripts', $template_url . '/assets/js/custom/main.js', '', '', true );
	wp_enqueue_script( 'odin-main', $template_url . '/assets/js/main.js', array( 'jquery' ), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function odin_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/style.css';
}

require_once('inc/globals.php');

add_filter( 'stylesheet_uri', 'odin_stylesheet_uri', 10, 2 );

/**
 * Query WooCommerce activation
 *
 * @since  2.2.6
 *
 * @return boolean
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * WooCommerce compatibility files.
 */
if ( is_woocommerce_activated() ) {
	add_theme_support( 'woocommerce' );
	require get_template_directory() . '/inc/woocommerce/hooks.php';
	require get_template_directory() . '/inc/woocommerce/functions.php';
	require get_template_directory() . '/inc/woocommerce/template-tags.php';
}

/**
 * Display a nice welcoming message to folks reading posts via RSS.
 *
 * Kudos Kev Quirk for the idea!
 *
 * @param string $content The current post content.
 *
 * @return string
 */
function jeherve_welcome_rss_readers( $content ) {
  $welcome_messages = array(
    "💖 O RSS é fantástico, e você também o é por usá-lo. 🎆",
    "👏 Parabéns por ser um usuário de RSS. 🎉",
    "🥰 Você está lendo esta postagem por meio do feed RSS. Isso faz de você uma das melhores pessoas da Internet! 🏆",
    "📰 Usar um leitor de feed é a melhor maneira de ler as publicações do meu blog. Como você é inteligente por saber disso! 🚀",
    "🌟 Você está lendo esta publicação por meio do feed RSS, seu astro! 🌠",
    "🪄 Os feeds são maravilhosos, e você é uma pessoa maravilhosa por usá-los. 🔮",
    "❤️‍🔥 Você está lendo esta publicação por meio do feed RSS. Você está em chamas! 🔥",
    "🧨 RSS é dinamite! Obrigado por assinar meu blog. 💥",
    "🤘 Você está inscrito no DanQ.me usando o feed RSS. Você é demais! 🎸",
    "🕵️ Assinar os feeds RSS do DanQ.me significa que você poderá ver publicações secretas de bônus não divulgadas no site principal. Esperto você! 🧠",
    "🧡 Eu adoro os feeds RSS. E adoro você por usá-los. 💙",
    "🎗️ O uso de feeds RSS é uma ótima maneira de se manter atualizado com meu blog. Obrigado por se inscrever! 🤗",
    "🦸 Você é meu herói! (Por usar o RSS para acompanhar meu blog.) 🥇",
  );

  $welcome_message = $welcome_messages[ wp_rand( 0, count( $welcome_messages ) - 1 ) ];

  return sprintf(
    '%1$s<p>%2$s</p>',
    $content,
    $welcome_message
  );
}
add_filter( 'the_content_feed', 'jeherve_welcome_rss_readers' );