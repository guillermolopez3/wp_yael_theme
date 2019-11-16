<?php
/**
 * yael_t functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yael_t
 */

if ( ! function_exists( 'yael_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function yael_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on yael_t, use a find and replace
		 * to change 'yael' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'yael', get_template_directory() . '/languages' );

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
		add_image_size('recent_art',200,300,true);
		add_image_size('single_img',2000,300,true);

		// This theme uses wp_nav_menu() in one location.
		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
		
		add_action( 'after_setup_theme', 'register_navwalker' );
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'yael' ),
			'primary' => __( 'Menu Principal', 'yael' )
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
		add_theme_support( 'custom-background', apply_filters( 'yael_custom_background_args', array(
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
add_action( 'after_setup_theme', 'yael_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yael_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'yael_content_width', 640 );
}
add_action( 'after_setup_theme', 'yael_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yael_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'yael' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'yael' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'yael_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yael_scripts() {
	wp_enqueue_style( 'yael-style', get_stylesheet_uri() );

	wp_enqueue_script( 'yael-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'yael-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yael_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}



/*Funciones para personalizar la web
function personalizar_texto($wp_customize ){

	$wp_customize->add_section('title', array(
		'title' => __("Cambiar Texto", "yael_t"), //nombre que aparece en wordpress y opcional el theme
		'priority' => 1
	));

	$wp_customize->add_setting('site_title', array(
		'default' => __("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."), 
		'transport' => 'refresh'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'theme_customization', array(
		'label' => __('Cambiar Texto', 'yael_t'),
		'section' => 'title', //section name
		'settings' => 'site_title',
		'type' => 'textarea',
	)));
}
add_action('customize_register','personalizar_texto');*/

//DEFINE UN SELECT CON LAS PAGINAS

/*function personalizar_texto($wp_customize ){

	$wp_customize->add_section('title', array(
		'title' => __("Cambiar Texto", "yael_t"), //nombre que aparece en wordpress y opcional el theme
		'priority' => 1
	));

	$wp_customize->add_setting( 'sample_default_dropdownpages',
   array(
      'default' => '1548',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
);
 
$wp_customize->add_control( 'sample_default_dropdownpages',
   array(
      'label' => __( 'Default Dropdown Pages Control' ),
      'description' => esc_html__( 'Sample description' ),
      'section' => 'title',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'dropdown-pages',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
   )
);
}
add_action('customize_register','personalizar_texto');*/

function personalizar_texto($wp_customize ){

	$wp_customize->add_section('title', array(
		'title' => __("Cambiar Texto", "yael_t"), //nombre que aparece en wordpress y opcional el theme
		'priority' => 1
	));

	$wp_customize->add_setting( 'sample_default_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'esc_url_raw'
   )
);
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sample_default_image',
   array(
      'label' => __( 'Default Image Control' ),
      'description' => esc_html__( 'This is the description for the Image Control' ),
      'section' => 'title',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );
}
add_action('customize_register','personalizar_texto');

/*cabecera*/

function personalizar_cabecera($wp_customize){
	$wp_customize->add_panel('panel_custom', array(
		'priority'=>30,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Yael Theme' ),
		'description' => esc_html__( 'Panel para modificar el tema' )
	));

	$wp_customize->add_section( 'cabecera',array(
        'title' => 'Cabecera',
        'priority' => 1,
        'panel' => 'panel_custom'
    ));

	//titulo cabecera
    $wp_customize->add_setting('titulo', array('default'=>'DE LA FRUSTRACIÓN NACEN LOS ÉXITOS'));
    $wp_customize->add_control('titulo', array(
        'label' => 'Título',
        'section' => 'cabecera',
        'type' => 'textarea',
    ));

    //imagen cabecera
    $wp_customize->add_setting('img_cabe', array(
    ));
            
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_cabe',
   array(
      'label' => __( 'Imagen Principal Cabecera' ),
      'description' => esc_html__( 'Imagen para la cabecera de la web' ),
      'section' => 'cabecera',
      'button_labels' => array( // Optional.
         'select' => __( 'Seleccionar Imagen' ),
         'change' => __( 'Cambiar Imagen' ),
         'remove' => __( 'Quitar' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No hay imagen seleccionada' ),
         'frame_title' => __( 'Selecccionar Imagen' ),
         'frame_button' => __( 'Elegir Imagen' ),
      )
   )
) );
}

add_action('customize_register','personalizar_cabecera');