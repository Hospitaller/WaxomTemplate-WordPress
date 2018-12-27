<?php
/**
 * StartupWeb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package StartupWeb
 */

if ( ! function_exists( 'startupweb_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function startupweb_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on StartupWeb, use a find and replace
		 * to change 'startupweb' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'startupweb', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		//MAIN MENU
		register_nav_menus( array(
			
			'MainMenu' => esc_html__( 'Главное Меню', 'startupweb' ),
			'SideMenu' => esc_html__( 'Проект Меню', 'startupweb' ),

		) );

//Add custom attribute "role"
		function addDataAttr( $items, $args ) {
			$dom = new DOMDocument();
			$dom->loadHTML($items);
			$find = $dom->getElementsByTagName('li');
		
			foreach ($find as $item ) :
				$item->setAttribute('role','menuitem');
			endforeach;
		
			return $dom->saveHTML();
		
		}
		add_filter('wp_nav_menu', 'addDataAttr', 10, 2);
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'startupweb_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'startupweb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function startupweb_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'startupweb_content_width', 640 );
}
add_action( 'after_setup_theme', 'startupweb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function startupweb_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'startupweb' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'startupweb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'startupweb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function startupweb_scripts() {
	//wp_enqueue_style( 'startupweb-style', get_stylesheet_uri() );
	wp_enqueue_style( 'startupweb-style', get_template_directory_uri().'/assets/css/style.css' );
	wp_enqueue_script( 'startupweb-app', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0', true );
	wp_enqueue_script('jquery');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'startupweb_scripts' );

/**
 * Add integrity/crossorigin for CDN styles.
 */
function new_style_loader_tag( $html, $handle ) {
	$scripts_to_load = array(
		array(
			( 'name' )      => 'bootstrap-style',
			( 'integrity' ) => 'sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO',
		)
	);

	$key = array_search( $handle, array_column( $scripts_to_load, 'name' ) );

	if ( $key !== false ) {
		$html = str_replace( '/>', ' integrity=\'' . $scripts_to_load[$key]['integrity'] . '\' crossorigin=\'anonymous\' />', $html );
	}

	return $html;
}
add_filter( 'style_loader_tag', 'new_style_loader_tag', 10, 2 );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
add_theme_support( 'post-thumbnails' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'comment_text', 'wpautop' );


/* php в постах или страницах WordPress: [exec]код[/exec]
----------------------------------------------------------------- */
function exec_php($matches){
	eval('ob_start();'.$matches[1].'$inline_execute_output = ob_get_contents();ob_end_clean();');
	return $inline_execute_output;
}
function inline_php($content){
	$content = preg_replace_callback('/\[exec\]((.|\n)*?)\[\/exec\]/', 'exec_php', $content);
	$content = preg_replace('/\[exec off\]((.|\n)*?)\[\/exec\]/', '$1', $content);
	return $content;
}
add_filter('the_content', 'inline_php', 0);

