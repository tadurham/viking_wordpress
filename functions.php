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

/* CUSTOM LOGIN PAGE */
function custom_login_header_url($url) {
  return get_bloginfo('url');
}
add_filter( 'login_headerurl', 'custom_login_header_url' );

function custom_login_css() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/style/login-style.css" />';
}
add_action('login_head', 'custom_login_css');

//Manage Your Media Only
function mymo_parse_query_useronly( $wp_query ) {
    if ( strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/upload.php' ) !== false || strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/media-upload.php' ) !== false || $_GET['post_type'] == 'classes' ) {
        if ( !current_user_can( 'level_5' ) ) {
            global $current_user;
            $wp_query->set( 'author', $current_user->id );
        }
    }
}

add_filter('parse_query', 'mymo_parse_query_useronly' );

// remove unnecessary menus
function remove_admin_menus () {
	global $menu;
	// all users
	$restrict = explode(',', 'Links,Comments');
	// non-administrator users
	$restrict_user = explode(',', 'Posts,Promos,Products,Resources,Contact,Tools');
	// WP localization
	$f = create_function('$v,$i', 'return __($v);');
	array_walk($restrict, $f);
	if (!current_user_can('administrator')) {
		array_walk($restrict_user, $f);
		$restrict = array_merge($restrict, $restrict_user);

        global $submenu;
        unset($submenu['edit.php?post_type=locations'][10]); // Removes 'Add New'.
	}
	// remove menus
	end($menu);
	while (prev($menu)) {
		$k = key($menu);
		$v = explode(' ', $menu[$k][0]);
		if(in_array(is_null($v[0]) ? '' : $v[0] , $restrict)) unset($menu[$k]);
	}
}

add_action('admin_menu', 'remove_admin_menus');

// Create the function to use in the action hook
function remove_dashboard_widgets() {
  	if(!current_user_can('administrator')) { // anyone not an admin
		remove_meta_box('dashboard_right_now', 'dashboard', 'normal');  // right now
		remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');  // incoming links
		remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // plugins
		remove_meta_box('dashboard_quick_press', 'dashboard', 'side');  // quick press
		remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');  // recent drafts
		remove_meta_box('dashboard_primary', 'dashboard', 'side');   // wordpress blog
		remove_meta_box('dashboard_secondary', 'dashboard', 'side');   // other wordpress news
	}
} 

// Hoook into the 'wp_dashboard_setup' action to register our function
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

// Create the function to output the contents of our Dashboard Widget
function dashboard_widget_function() {
	// Display whatever it is you want to show
	echo "Welcome to the Viking Singer Sewing Gallery site.";
} 

// Create the function use in the action hook
function add_dashboard_widgets() {
	wp_add_dashboard_widget('dashboard_widget', 'Welcome', 'dashboard_widget_function');	
} 

// Hook into the 'wp_dashboard_setup' action to register our other functions
add_action('wp_dashboard_setup', 'add_dashboard_widgets' ); // Hint: For Multisite Network Admin Dashboard use wp_network_dashboard_setup instead of wp_dashboard_setup.


function hide_that_stuff() {
    if('locations' == get_post_type())
        echo '<style type="text/css"> #favorite-actions {display:none;} .add-new-h2{display:none;} .tablenav{display:none;} </style>';
}
add_action('admin_head', 'hide_that_stuff');

function my_cookie_expiration( $expiration, $user_id, $remember ) {
    return $remember ? $expiration : 600;
}
add_filter( 'auth_cookie_expiration', 'my_cookie_expiration', 99, 3 );
