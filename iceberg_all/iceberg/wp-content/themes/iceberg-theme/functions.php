<?php
/**
 * iceberg-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package iceberg-theme
 */

if ( ! function_exists( 'iceberg_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function iceberg_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on iceberg-theme, use a find and replace
		 * to change 'iceberg-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'iceberg-theme', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'iceberg-theme' ),
		) );

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
		add_theme_support( 'custom-background', apply_filters( 'iceberg_theme_custom_background_args', array(
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
add_action( 'after_setup_theme', 'iceberg_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function iceberg_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'iceberg_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'iceberg_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function iceberg_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'iceberg-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'iceberg-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'iceberg_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function iceberg_theme_scripts() {
	wp_enqueue_style( 'iceberg-theme-style', get_stylesheet_uri() );
	wp_enqueue_style('animate-css',get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style('flaticon-css',get_template_directory_uri().'/css/flaticon.css');
	wp_enqueue_style('bootstrap-min-css',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('owl-carousel-min-css',get_template_directory_uri().'/css/owl.carousel.min.css');
	wp_enqueue_style('owl-theme-default-min-css',get_template_directory_uri().'/css/owl.theme.default.min.css');
	wp_enqueue_style('lightbox-css',get_template_directory_uri().'/css/lightbox.css');
	wp_enqueue_style('skin-blue-css',get_template_directory_uri().'/css/skin-blue.css');
	wp_enqueue_style('header-css',get_template_directory_uri().'/css/header.css');
	wp_enqueue_style('style-css',get_template_directory_uri().'/css/style.css');
	wp_enqueue_style('responsive-css',get_template_directory_uri().'/css/responsive.css');
	wp_enqueue_style('preview-css',get_template_directory_uri().'/css/preview.css');
	wp_enqueue_style('settings-css',get_template_directory_uri().'/css/settings.css');
	wp_enqueue_style('font-awesome-icons',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");

	wp_enqueue_script('jquery-min-js',get_template_directory_uri().'/js/jquery.min.js',array(),null,true);
	wp_enqueue_script('popper-min-js',get_template_directory_uri().'/js/popper.min.js',array(),null,true);
	wp_enqueue_script('bootstrap-min-js',get_template_directory_uri().'/js/bootstrap.min.js',array(),null,true);
	wp_enqueue_script('waypoints-min-js',get_template_directory_uri().'/js/waypoints.min.js',array(),null,true);
	wp_enqueue_script('jquery-counterup-min-js',get_template_directory_uri().'/js/jquery.counterup.min.js',array(),null,true);
	wp_enqueue_script('jquery-preloadinator-min-js',get_template_directory_uri().'/js/jquery.preloadinator.min.js',array(),null,true);

	wp_enqueue_script('lightbox-js',get_template_directory_uri().'/js/lightbox.js',array(),null,true);
	wp_enqueue_script('imagesloaded-js',get_template_directory_uri().'/js/imagesloaded.js',array(),null,true);
	wp_enqueue_script('isotope-min-js',get_template_directory_uri().'/js/isotope.min.js',array(),null,true);
	
	
	wp_enqueue_script('jquery-parallax-1.1.3-js',get_template_directory_uri().'/js/jquery.parallax-1.1.3.js',array(),null,true);
	
	wp_enqueue_script('jquery-localscroll-1.2.7-min-js',get_template_directory_uri().'/js/jquery.localscroll-1.2.7-min.js',array(),null,true);
	wp_enqueue_script('jquery-smartmenus-min-js',get_template_directory_uri().'/js/jquery.smartmenus.min.js',array(),null,true);
	
	wp_enqueue_script('custom-js',get_template_directory_uri().'/js/custom.js',array(),null,true);
	
	
	wp_enqueue_script('navigation-js',get_template_directory_uri().'/js/navigation.js',array(),null,true);
	wp_enqueue_script('owl-carousel-js',get_template_directory_uri().'/js/owl.carousel.js',array(),null,true);
	wp_enqueue_script('owl-custom-js',get_template_directory_uri().'/js/owl.custom.js',array(),null,true);
	


	wp_enqueue_script( 'iceberg-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	

	wp_enqueue_script( 'iceberg-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'iceberg_theme_scripts' );

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

require get_template_directory().'/plugin/codestar-framework/codestar-framework-1.0.2/cs-framework.php';


/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function create_our_team_post() {

	$labels = array(
		'name'               => __( 'Our Team', 'iceberg-theme' ),
		'singular_name'      => __( 'team member', 'iceberg-theme' ),
		'add_new'            => _x( 'Add New team member', 'iceberg-theme', 'iceberg-theme' ),
		'add_new_item'       => __( 'Add New team member', 'iceberg-theme' ),
		'edit_item'          => __( 'Edit team member', 'iceberg-theme' ),
		'new_item'           => __( 'New team member', 'iceberg-theme' ),
		'view_item'          => __( 'View team member', 'iceberg-theme' ),
		'search_items'       => __( 'Search Our Team', 'iceberg-theme' ),
		'not_found'          => __( 'No Our Team found', 'iceberg-theme' ),
		'not_found_in_trash' => __( 'No Our Team found in Trash', 'iceberg-theme' ),
		'parent_item_colon'  => __( 'Parent team member:', 'iceberg-theme' ),
		'menu_name'          => __( 'Our Team', 'iceberg-theme' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-groups',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => 'our_team',
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'our_team', $args );
}

add_action( 'init', 'create_our_team_post' );

/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function create_our_works_post() {

	$labels = array(
		'name'               => __( 'Our Works', 'iceberg-theme' ),
		'singular_name'      => __( 'Work', 'iceberg-theme' ),
		'add_new'            => _x( 'Add New Work', 'iceberg-theme', 'iceberg-theme' ),
		'add_new_item'       => __( 'Add New Work', 'iceberg-theme' ),
		'edit_item'          => __( 'Edit Work', 'iceberg-theme' ),
		'new_item'           => __( 'New Work', 'iceberg-theme' ),
		'view_item'          => __( 'View Work', 'iceberg-theme' ),
		'search_items'       => __( 'Search Our Works', 'iceberg-theme' ),
		'not_found'          => __( 'No Our Works found', 'iceberg-theme' ),
		'not_found_in_trash' => __( 'No Our Works found in Trash', 'iceberg-theme' ),
		'parent_item_colon'  => __( 'Parent Work:', 'iceberg-theme' ),
		'menu_name'          => __( 'Our Works', 'iceberg-theme' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-images-alt2',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => 'our_work',
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'our_work', $args );
}

add_action( 'init', 'create_our_works_post' );

/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function create_testimonials_post() {

	$labels = array(
		'name'               => __( 'Testimonials', 'iceberg-theme' ),
		'singular_name'      => __( 'Testimonial', 'iceberg-theme' ),
		'add_new'            => _x( 'Add New Testimonial', 'iceberg-theme', 'iceberg-theme' ),
		'add_new_item'       => __( 'Add New Testimonial', 'iceberg-theme' ),
		'edit_item'          => __( 'Edit Testimonial', 'iceberg-theme' ),
		'new_item'           => __( 'New Testimonial', 'iceberg-theme' ),
		'view_item'          => __( 'View Testimonial', 'iceberg-theme' ),
		'search_items'       => __( 'Search Testimonials', 'iceberg-theme' ),
		'not_found'          => __( 'No Testimonials found', 'iceberg-theme' ),
		'not_found_in_trash' => __( 'No Testimonials found in Trash', 'iceberg-theme' ),
		'parent_item_colon'  => __( 'Parent Testimonial:', 'iceberg-theme' ),
		'menu_name'          => __( 'Testimonials', 'iceberg-theme' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-chat',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => 'testimonials',
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'testimonials', $args );
}

add_action( 'init', 'create_testimonials_post' );

/* OUR PRICINGS */
/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function create_our_pricings_post() {

	$labels = array(
		'name'               => __( 'Our Pricings', 'iceberg-theme' ),
		'singular_name'      => __( 'Our Pricing', 'iceberg-theme' ),
		'add_new'            => _x( 'Add New Our Pricing', 'iceberg-theme', 'iceberg-theme' ),
		'add_new_item'       => __( 'Add New Our Pricing', 'iceberg-theme' ),
		'edit_item'          => __( 'Edit Our Pricing', 'iceberg-theme' ),
		'new_item'           => __( 'New Our Pricing', 'iceberg-theme' ),
		'view_item'          => __( 'View Our Pricing', 'iceberg-theme' ),
		'search_items'       => __( 'Search Our Pricings', 'iceberg-theme' ),
		'not_found'          => __( 'No Our Pricings found', 'iceberg-theme' ),
		'not_found_in_trash' => __( 'No Our Pricings found in Trash', 'iceberg-theme' ),
		'parent_item_colon'  => __( 'Parent Our Pricing:', 'iceberg-theme' ),
		'menu_name'          => __( 'Our Pricings', 'iceberg-theme' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-clipboard',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => 'our_pricings',
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'our_pricings', $args );
}

add_action( 'init', 'create_our_pricings_post' );

/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function create_our_services_post() {

	$labels = array(
		'name'               => __( 'Our Services', 'iceberg-theme' ),
		'singular_name'      => __( 'Our Service', 'iceberg-theme' ),
		'add_new'            => _x( 'Add New Our Service', 'iceberg-theme', 'iceberg-theme' ),
		'add_new_item'       => __( 'Add New Our Service', 'iceberg-theme' ),
		'edit_item'          => __( 'Edit Our Service', 'iceberg-theme' ),
		'new_item'           => __( 'New Our Service', 'iceberg-theme' ),
		'view_item'          => __( 'View Our Service', 'iceberg-theme' ),
		'search_items'       => __( 'Search Our Services', 'iceberg-theme' ),
		'not_found'          => __( 'No Our Services found', 'iceberg-theme' ),
		'not_found_in_trash' => __( 'No Our Services found in Trash', 'iceberg-theme' ),
		'parent_item_colon'  => __( 'Parent Our Service:', 'iceberg-theme' ),
		'menu_name'          => __( 'Our Services', 'iceberg-theme' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => 'service',
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'service', $args );
}

add_action( 'init', 'create_our_services_post' );

/*creating taxonomy*/
/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */


function create_position_taxonomy() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Positions', 'taxonomy general name', 'iceberg-theme' ),
		'singular_name'     => _x( 'Position', 'taxonomy singular name', 'iceberg-theme' ),
		'search_items'      => __( 'Search Positions', 'iceberg-theme' ),
		'all_items'         => __( 'All Positions', 'iceberg-theme' ),
		'parent_item'       => __( 'Parent Position', 'iceberg-theme' ),
		'parent_item_colon' => __( 'Parent Position:', 'iceberg-theme' ),
		'edit_item'         => __( 'Edit Position', 'iceberg-theme' ),
		'update_item'       => __( 'Update Position', 'iceberg-theme' ),
		'add_new_item'      => __( 'Add New Position', 'iceberg-theme' ),
		'new_item_name'     => __( 'New Position Name', 'iceberg-theme' ),
		'menu_name'         => __( 'Position', 'iceberg-theme' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'position' ),
	);

	register_taxonomy( 'position', array( 'our_team' ), $args );
}

add_action( 'init', 'create_position_taxonomy', 0 );

/* project type taxonomy */


function create_project_type_taxonomy() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Project Types', 'taxonomy general name', 'iceberg-theme' ),
		'singular_name'     => _x( 'Project Type', 'taxonomy singular name', 'iceberg-theme' ),
		'search_items'      => __( 'Search Project Types', 'iceberg-theme' ),
		'all_items'         => __( 'All Project Types', 'iceberg-theme' ),
		'parent_item'       => __( 'Parent Project Type', 'iceberg-theme' ),
		'parent_item_colon' => __( 'Parent Project Type:', 'iceberg-theme' ),
		'edit_item'         => __( 'Edit Project Type', 'iceberg-theme' ),
		'update_item'       => __( 'Update Project Type', 'iceberg-theme' ),
		'add_new_item'      => __( 'Add New Project Type', 'iceberg-theme' ),
		'new_item_name'     => __( 'New Project Type Name', 'iceberg-theme' ),
		'menu_name'         => __( 'Project Type', 'iceberg-theme' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'project-type' ),
	);

	register_taxonomy( 'project-type', array( 'our_work' ), $args );
}

add_action( 'init', 'create_project_type_taxonomy', 0 );


add_post_type_support( 'page', 'excerpt' );