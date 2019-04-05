<?php
/**
 * nile-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nile-theme
 */

if ( ! function_exists( 'nile_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nile_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nile-theme, use a find and replace
		 * to change 'nile-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nile-theme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'nile-theme' ),
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
		add_theme_support( 'custom-background', apply_filters( 'nile_theme_custom_background_args', array(
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
add_action( 'after_setup_theme', 'nile_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nile_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'nile_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'nile_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nile_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nile-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nile-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nile_theme_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function nile_theme_scripts() {
	wp_enqueue_style( 'nile-theme-style', get_stylesheet_uri() );

	wp_enqueue_style('fonts-google-apis',"https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CPoppins:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext");
	
	/* styles in css*/	
	wp_enqueue_style('animate-css',get_template_directory_uri().'/css/animate.css');

	wp_enqueue_style('owl-carousel-css',get_template_directory_uri().'/css/owl.carousel.css');
	wp_enqueue_style('owl-theme-css',get_template_directory_uri().'/css/owl.theme.css');
	
	wp_enqueue_style('bootstrap-min-css',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('hover-min-css',get_template_directory_uri().'/css/hover-min.css');
	wp_enqueue_style('flag-icon-min-css',get_template_directory_uri().'/css/flag-icon.min.css');
	wp_enqueue_style('style-css',get_template_directory_uri().'/css/style.css');
	wp_enqueue_style('elegant_icon-css',get_template_directory_uri().'/css/elegant_icon.css');
	wp_enqueue_style('font-awesome-min-css',get_template_directory_uri().'/fonts/font-awesome/css/font-awesome.min.css');
	
	/* styles in rslider/css*/
	wp_enqueue_style('settings-css',get_template_directory_uri().'/rslider/css/settings.css');
	/* styles in rslider/fonts*/
	wp_enqueue_style('font-awesome-css',get_template_directory_uri().'/rslider/fonts/font-awesome/css/font-awesome.css');
	/* styles in rslider/pe-icon-7-stroke*/
	wp_enqueue_style('pe-icon-7-stroke-css',get_template_directory_uri().'/rslider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css');



	/* scripts in js*/
	wp_enqueue_script('jquery-3-2-1-min-js',get_template_directory_uri().'/js/jquery-3.2.1.min.js',array(),null,true);
	wp_enqueue_script('jquery-themepunch-revolution-min-js',get_template_directory_uri().'/rslider/js/jquery.themepunch.revolution.min.js', array(), '20151215', true );
	wp_enqueue_script('jquery-themepunch-tools-min-js',get_template_directory_uri().'/rslider/js/jquery.themepunch.tools.min.js', array(), '20151215', true );

	wp_enqueue_script('popper-min-js',get_template_directory_uri().'/js/popper.min.js',array(),null,true);
	wp_enqueue_script('bootstrap-min-js',get_template_directory_uri().'/js/bootstrap.min.js',array(),null,true);
	wp_enqueue_script('nile-slider-js',get_template_directory_uri().'/js/nile-slider.js',array(),null,true);
	
	
	wp_enqueue_script('imagesloaded-min-js-js',get_template_directory_uri().'/js/imagesloaded.min.js',array(),null,true);
	
	wp_enqueue_script('navigation-js',get_template_directory_uri().'/js/navigation.js',array(),null,true);
	
	wp_enqueue_script('owl-carousel-min-js',get_template_directory_uri().'/js/owl.carousel.min.js',array(),null,true);
	wp_enqueue_script('custom-js',get_template_directory_uri().'/js/custom.js',array(),null,true);
	
	wp_enqueue_script('typewriter-js',get_template_directory_uri().'/js/typewriter.js',array(),null,true);
	wp_enqueue_script('YouTubePopUp-jquery-js',get_template_directory_uri().'/js/YoutubePopUp.jquery.js',array(),null,true);

	wp_enqueue_script( 'nile-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'nile-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	/* scripts in rslider/*/
	wp_enqueue_script('revolution-extension-actions-min-js',get_template_directory_uri().'/rslider/js/extensions/revolution.extension.actions.min.js', array(), '20151215', true );
	wp_enqueue_script('revolution-extension-carousel-min-js',get_template_directory_uri().'/rslider/js/extensions/revolution.extension.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script('revolution-extension-kenburn-min-js',get_template_directory_uri().'/rslider/js/extensions/revolution.extension.kenburn.min.js', array(), '20151215', true );
	wp_enqueue_script('revolution-extension-layeranimation-min-js',get_template_directory_uri().'/rslider/js/extensions/revolution.extension.layeranimation.min.js', array(), '20151215', true );
	wp_enqueue_script('revolution-extension-migration-min-js',get_template_directory_uri().'/rslider/js/extensions/revolution.extension.migration.min.js', array(), '20151215', true );
	wp_enqueue_script('revolution-extension-navigation-min-js',get_template_directory_uri().'/rslider/js/extensions/revolution.extension.navigation.min.js', array(), '20151215', true );
	wp_enqueue_script('revolution-extension-parallax-min-js',get_template_directory_uri().'/rslider/js/extensions/revolution.extension.parallax.min.js', array(), '20151215', true );
	wp_enqueue_script('revolution-extension-slideanims-min-js',get_template_directory_uri().'/rslider/js/extensions/revolution.extension.slideanims.min.js', array(), '20151215', true );
	wp_enqueue_script('revolution-extension-video-min-js',get_template_directory_uri().'/rslider/js/extensions/revolution.extension.video.min.js', array(), '20151215', true );

	

	

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nile_theme_scripts' );

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

/* importing codestar framework */
require get_template_directory().'/plugin/codestar-framework/codestar-framework-1.0.2/cs-framework.php';

/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */




function create_our_service_post() {

	$labels = array(
		'name'               => __( 'Our Services', 'nile-theme' ),
		'singular_name'      => __( 'Our Service', 'nile-theme' ),
		'add_new'            => _x( 'Add New Our Service', 'nile-theme', 'nile-theme' ),
		'add_new_item'       => __( 'Add New Our Service ', 'nile-theme' ),
		'edit_item'          => __( 'Edit Our Service ', 'nile-theme' ),
		'new_item'           => __( 'New Our Service ', 'nile-theme' ),
		'view_item'          => __( 'View Our Service ', 'nile-theme' ),
		'search_items'       => __( 'Search Our Services ', 'nile-theme' ),
		'not_found'          => __( 'No Our Services found', 'nile-theme' ),
		'not_found_in_trash' => __( 'No Our Services found in Trash', 'nile-theme' ),
		'parent_item_colon'  => __( 'Parent Our Service:', 'nile-theme' ),
		'menu_name'          => __( 'Our Services', 'nile-theme' ),
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
		'menu_icon'           => 'dashicons-admin-page',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array('slug' =>'our_service'),
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

	register_post_type( 'our_service', $args );
}

add_action( 'init', 'create_our_service_post' );

/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function create_our_pricing_post() {

	$labels = array(
		'name'               => __( 'Our Pricings', 'nile-theme' ),
		'singular_name'      => __( 'Our Pricing', 'nile-theme' ),
		'add_new'            => _x( 'Add New Our Pricing', 'nile-theme', 'nile-theme' ),
		'add_new_item'       => __( 'Add New Our Pricing', 'nile-theme' ),
		'edit_item'          => __( 'Edit Our Pricing', 'nile-theme' ),
		'new_item'           => __( 'New Our Pricing', 'nile-theme' ),
		'view_item'          => __( 'View Our Pricing', 'nile-theme' ),
		'search_items'       => __( 'Search Our Pricings', 'nile-theme' ),
		'not_found'          => __( 'No Our Pricings found', 'nile-theme' ),
		'not_found_in_trash' => __( 'No Our Pricings found in Trash', 'nile-theme' ),
		'parent_item_colon'  => __( 'Parent Our Pricing:', 'nile-theme' ),
		'menu_name'          => __( 'Our Pricings', 'nile-theme' ),
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
		'menu_icon'           => 'dashicons-art',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => 'our_pricing',
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

	register_post_type( 'our_pricing', $args );
}

add_action( 'init', 'create_our_pricing_post' );

/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function create_partners_post() {

	$labels = array(
		'name'               => __( 'Partners', 'nile-theme' ),
		'singular_name'      => __( 'Partner', 'nile-theme' ),
		'add_new'            => _x( 'Add New Partner', 'nile-theme', 'nile-theme' ),
		'add_new_item'       => __( 'Add New Partner', 'nile-theme' ),
		'edit_item'          => __( 'Edit Partner', 'nile-theme' ),
		'new_item'           => __( 'New Partner', 'nile-theme' ),
		'view_item'          => __( 'View Partner', 'nile-theme' ),
		'search_items'       => __( 'Search Partners', 'nile-theme' ),
		'not_found'          => __( 'No Partners found', 'nile-theme' ),
		'not_found_in_trash' => __( 'No Partners found in Trash', 'nile-theme' ),
		'parent_item_colon'  => __( 'Parent Partner:', 'nile-theme' ),
		'menu_name'          => __( 'Partners', 'nile-theme' ),
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
		'rewrite'             => 'partners',
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

	register_post_type( 'partners', $args );
}

add_action( 'init', 'create_partners_post' );

/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function create_faqs_post() {

	$labels = array(
		'name'               => __( 'FAQs', 'nile-theme' ),
		'singular_name'      => __( 'FAQ', 'nile-theme' ),
		'add_new'            => _x( 'Add New FAQ', 'nile-theme', 'nile-theme' ),
		'add_new_item'       => __( 'Add New FAQ', 'nile-theme' ),
		'edit_item'          => __( 'Edit FAQ', 'nile-theme' ),
		'new_item'           => __( 'New FAQ', 'nile-theme' ),
		'view_item'          => __( 'View FAQ', 'nile-theme' ),
		'search_items'       => __( 'Search FAQs', 'nile-theme' ),
		'not_found'          => __( 'No FAQs found', 'nile-theme' ),
		'not_found_in_trash' => __( 'No FAQs found in Trash', 'nile-theme' ),
		'parent_item_colon'  => __( 'Parent FAQ:', 'nile-theme' ),
		'menu_name'          => __( 'FAQs', 'nile-theme' ),
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
		'menu_icon'           => 'dashicons-format-status',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => 'faqs',
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

	register_post_type( 'faqs', $args );
}

add_action( 'init', 'create_faqs_post' );

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
		'name'               => __( 'Our Team', 'nile-theme' ),
		'singular_name'      => __( 'Team member', 'nile-theme' ),
		'add_new'            => _x( 'Add New Team member', 'nile-theme', 'nile-theme' ),
		'add_new_item'       => __( 'Add New Team member', 'nile-theme' ),
		'edit_item'          => __( 'Edit Team member', 'nile-theme' ),
		'new_item'           => __( 'New Team member', 'nile-theme' ),
		'view_item'          => __( 'View Team member', 'nile-theme' ),
		'search_items'       => __( 'Search Our Team', 'nile-theme' ),
		'not_found'          => __( 'No Our Team found', 'nile-theme' ),
		'not_found_in_trash' => __( 'No Our Team found in Trash', 'nile-theme' ),
		'parent_item_colon'  => __( 'Parent Team member:', 'nile-theme' ),
		'menu_name'          => __( 'Our Team', 'nile-theme' ),
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
		'menu_icon'           => 'dashicons-image-filter',
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



