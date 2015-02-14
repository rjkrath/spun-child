<?php
/**
 * Spun functions and definitions
 *
 * @package SpunChild
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
  $content_width = 700; /* pixels */

if ( ! function_exists( 'spun_setup' ) ):
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which runs
   * before the init hook. The init hook is too late for some features, such as indicating
   * support post thumbnails.
   *
   */
  function spun_setup() {
    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for Post Thumbnails
     */
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'home-post', 360, 360, true );
    add_image_size( 'single-post', 700, 999 );

    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus( array(
      'primary' => __( 'Primary Menu', 'spun' ),
    ) );
  }
endif; // spun_setup
add_action( 'after_setup_theme', 'spun_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 */
function spun_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Sidebar 1', 'spun' ),
    'id' => 'sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title"><span>',
    'after_title' => '</span></h1>',
  ) );
}
add_action( 'widgets_init', 'spun_widgets_init' );

/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );

/**
 * Load Jetpack compatibility file.
 */
if ( file_exists( get_template_directory() . '/inc/jetpack.php' ) )
  require get_template_directory() . '/inc/jetpack.php';

/**
 * Custom template tags for this theme.
 */
require( get_template_directory() . '/inc/template-tags.php' );


/**
 * Customizer support for theme options
 */
require( get_template_directory() . '/inc/customizer.php' );

/**
 * Enqueue scripts and styles
 */
function spun_child_scripts() {
  wp_enqueue_script( 'spun-toggle', get_template_directory_uri() . '/js/toggle.js', array( 'jquery' ), '20121005', true );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'spun_child_scripts', 1 );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 */
function spun_page_menu_args( $args ) {
  $args['show_home'] = true;
  return $args;
}
add_filter( 'wp_page_menu_args', 'spun_page_menu_args' );


/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function spun_wp_title( $title, $sep ) {
  global $page, $paged;

  if ( is_feed() )
    return $title;

  // Add the blog name
  $title .= get_bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    $title .= " $sep $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    $title .= " $sep " . sprintf( __( 'Page %s', 'spun' ), max( $paged, $page ) );

  return $title;
}
add_filter( 'wp_title', 'spun_wp_title', 10, 2 );