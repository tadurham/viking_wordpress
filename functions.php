<?php
/**
 * Viking functions and definitions
 *
 * @package Viking
 * @since Viking 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Viking 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'viking_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Viking 1.0
 */
function viking_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	//require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * WordPress.com-specific functions and definitions
	 */
	//require( get_template_directory() . '/inc/wpcom.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Viking, use a find and replace
	 * to change 'viking' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'viking', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Register menus
	 */
	register_nav_menus( 
        array(
            'primary' => 'Primary Menu',
            'utility' => 'Utility Menu',
            'footer'  => 'Footer Menu'
        )
	);

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // viking_setup
add_action( 'after_setup_theme', 'viking_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Viking 1.0
 */
function viking_widgets_init() {
  $sidebars = array('Right Sidebar', 'Pre Footer');
  $sidebarsDescription = array('located on the right side of the page', 'located just before the footer section');
  $count=0;
  foreach($sidebars as $sidebar) {
    register_sidebar(
      array(
        'id'            => sanitize_title($sidebar),
        'name'          => $sidebar,
        'description'   => $sidebarsDescription[$count],
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>'
      ));
    $count++;
  }
}

add_action( 'widgets_init', 'viking_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function viking_scripts() {
	global $post;

	wp_enqueue_style( 'style', get_stylesheet_uri() );

	//-- currently not needed for this template. maybe one day :)
	//wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'viking_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

/*---- Disable admin bar ----*/
add_filter( 'show_admin_bar', '__return_false' );

add_action( 'admin_menu', 'my_remove_menu_pages' );

function my_remove_menu_pages() {
    remove_menu_page('link-manager.php');
    remove_menu_page('edit-comments.php');	
}

/* CUSTOM LOGIN PAGE */
function custom_login_header_url($url) {
  return get_bloginfo('url');
}
add_filter( 'login_headerurl', 'custom_login_header_url' );

function custom_login_css() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/style/login-style.css" />';
}
add_action('login_head', 'custom_login_css');

