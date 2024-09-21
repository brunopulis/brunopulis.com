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
 * @package Bruno_Pulis
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
// require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';
require_once get_template_directory() . '/core/classes/class-post-status.php';
require_once get_template_directory() . '/core/classes/class-term-meta.php';

// CPT
require_once get_template_directory() . '/inc/functions/cpt.php';

// Remove
require_once get_template_directory() . '/inc/functions/remove.php';


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
		load_theme_textdomain( 'bruno-pulis', get_template_directory() . '/languages' );

    // Register nav menus.
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'odin' ),
        'footer-menu' => __( 'Footer', 'odin' )
			)
		);

    // Add post_thumbnails suport.
		add_theme_support( 'post-thumbnails' );
    add_theme_support( 'letter-thumbnails', 440, 250, true );
    add_theme_support( 'blogroll-thumbnail', 376, 211, true );

    // Add feed link
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

		// Support Custom Background.
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);
		add_theme_support( 'custom-background', $defaults );

    // Support Custom Editor Style.
		add_editor_style( 'assets/css/editor-style.css' );

    // Add support for infinite scroll.
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
		add_theme_support( 'post-formats', array(
      'aside',
      'gallery',
      'link',
      'image',
      'quote',
      'status',
      'video',
      'audio',
      'chat'
		) );

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
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widgettitle widget-title">',
			'after_title' => '</h2>',
    )
	);

  register_sidebar(
		array(
			'name' => __( 'Archive Sidebar', 'odin' ),
			'id' => 'archive-sidebar',
			'description' => __( 'Archive Sidebar', 'odin' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widgettitle widget__title widget-title">',
			'after_title' => '</h2>',
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
	// wp_enqueue_script( 'odin-main', $template_url . '/assets/js/main.js', array( 'jquery' ), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

/**
 * Allow SVG uploads in the Media Library
 */
function bp_add_file_types_to_uploads($file_types) {
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}

add_filter( 'upload_mimes', 'bp_add_file_types_to_uploads' );

/**
 * Disable Dashicons on the front end for unauthenticated users
 */
add_action( 'wp_enqueue_scripts', 'bs_dequeue_dashicons' );
function bs_dequeue_dashicons() {
  if ( ! is_user_logged_in() ) {
    wp_deregister_style( 'dashicons' );
  }
}

/**
 * Custom Markup for Comments
 */
function gg_comments($comment, $args, $depth) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment-item';
	} else {
		$tag       = 'li';
		$add_below = 'comment-item';
	}?>
	<<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'comment--parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
	if ( 'div' != $args['style'] ) { ?>
		<div id="comment-<?php comment_ID() ?>" class="comment__wrapper">
		<?php } ?>
			<div class="comment__body">
				<div class="comment__author"> 
					<?php printf( __( '%s' ), get_comment_author_link() ); ?>
				</div><?php 
				if ( $comment->comment_approved == '0' ) { ?>
				<span class="comment__notice"><?php _e( 'Your comment is waiting for approval.' ); ?></span><?php 
			} ?>
				<div class="comment__meta">
					<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">#</a>
					<?php
					printf( 
						get_comment_date()
					); ?>
				</div>
				<div class="comment__text">
					<?php comment_text(); ?>
					<?php comment_reply_link( 
						array_merge( 
							$args, 
							array( 
								'add_below' => $add_below, 
								'depth'     => $depth, 
								'max_depth' => $args['max_depth'] 
							) 
						) 
					); ?>
				</div>
			</div>
			<?php 
	if ( 'div' != $args['style'] ) : ?>
		</div><?php 
	endif;
}



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
 * Deal with the custom RSS templates.
 */
add_action( 'init', 'customRSS' );
function customRSS() {
  add_feed( 'notas', 'customRSSFunc' );
}

function customRSSFunc() {
  get_template_part( 'rss', 'notas' );
}

add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
  
function add_my_post_types_to_query( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'heros' ) );
  
  return $query;
}