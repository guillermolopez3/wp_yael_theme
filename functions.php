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

// function personalizar_texto($wp_customize ){

// 	$wp_customize->add_section('title', array(
// 		'title' => __("Cambiar Texto", "yael_t"), //nombre que aparece en wordpress y opcional el theme
// 		'priority' => 1
// 	));

// 	$wp_customize->add_setting( 'sample_default_image',
//    array(
//       'default' => '',
//       'transport' => 'refresh',
//       'sanitize_callback' => 'esc_url_raw'
//    )
// );
 
// $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sample_default_image',
//    array(
//       'label' => __( 'Default Image Control' ),
//       'description' => esc_html__( 'This is the description for the Image Control' ),
//       'section' => 'title',
//       'button_labels' => array( // Optional.
//          'select' => __( 'Select Image' ),
//          'change' => __( 'Change Image' ),
//          'remove' => __( 'Remove' ),
//          'default' => __( 'Default' ),
//          'placeholder' => __( 'No image selected' ),
//          'frame_title' => __( 'Select Image' ),
//          'frame_button' => __( 'Choose Image' ),
//       )
//    )
// ) );
// }
//add_action('customize_register','personalizar_texto');

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
        'priority' => 1, 
    ));

    //imagen cabecera
    $wp_customize->add_setting('img_cabe', array(
    ));
            
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_cabe',
   	array(
      'label' => __( 'Imagen Principal Cabecera' ),
      'description' => esc_html__( 'Imagen para la cabecera de la web' ),
      'section' => 'cabecera',
      'priority' => 2, 
      'button_labels' => array( // Optional.
         'select' => __( 'Seleccionar Imagen' ),
         'change' => __( 'Cambiar Imagen' ),
         'remove' => __( 'Quitar' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No hay imagen seleccionada' ),
         'frame_title' => __( 'Selecccionar Imagen' ),
         'frame_button' => __( 'Elegir Imagen' ),
      )
   	)));

   	//setings para el boton
   	$wp_customize->add_setting( 'link_btn_resultados',
	   array(
	   	'type' => 'option',
	   	'transport'=> 'none'
	));
	 
	$wp_customize->add_control( 'link_btn_resultados',
	   array(
	      'label' => __( 'Botón Obtener Resultados' ),
	      'description' => esc_html__( 'Página dónde irá al hacer click en el botón' ),
	      'section' => 'cabecera',
	      'priority' => 3, 
	      'type' => 'dropdown-pages'
	   )
	);

	//primera imagen certificado cabecera
    $wp_customize->add_setting('1_img_cer_cabe', array(
    ));
            
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '1_img_cer_cabe',
   	array(
      'label' => __( 'Imagen 1 certificados' ),
      'description' => esc_html__( 'Imagen para los certificados de la cabecera - 313x123' ),
      'section' => 'cabecera',
      'priority' => 4, 
      'button_labels' => array( // Optional.
         'select' => __( 'Seleccionar Imagen' ),
         'change' => __( 'Cambiar Imagen' ),
         'remove' => __( 'Quitar' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No hay imagen seleccionada' ),
         'frame_title' => __( 'Selecccionar Imagen' ),
         'frame_button' => __( 'Elegir Imagen' ),
      )
   	)));

    //segunda imagen certificado cabecera
    $wp_customize->add_setting('2_img_cer_cabe', array(
    ));
            
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '2_img_cer_cabe',
   	array(
      'label' => __( 'Imagen 2 certificados' ),
      'description' => esc_html__( 'Imagen para los certificados de la cabecera - 313x123' ),
      'section' => 'cabecera',
      'priority' => 4, 
      'button_labels' => array( // Optional.
         'select' => __( 'Seleccionar Imagen' ),
         'change' => __( 'Cambiar Imagen' ),
         'remove' => __( 'Quitar' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No hay imagen seleccionada' ),
         'frame_title' => __( 'Selecccionar Imagen' ),
         'frame_button' => __( 'Elegir Imagen' ),
      )
   	)));

   	//primera imagen certificado cabecera
    $wp_customize->add_setting('3_img_cer_cabe', array(
    ));
            
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '3_img_cer_cabe',
   	array(
      'label' => __( 'Imagen 3 certificados' ),
      'description' => esc_html__( 'Imagen para los certificados de la cabecera - 313x123' ),
      'section' => 'cabecera',
      'priority' => 4, 
      'button_labels' => array( // Optional.
         'select' => __( 'Seleccionar Imagen' ),
         'change' => __( 'Cambiar Imagen' ),
         'remove' => __( 'Quitar' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No hay imagen seleccionada' ),
         'frame_title' => __( 'Selecccionar Imagen' ),
         'frame_button' => __( 'Elegir Imagen' ),
      )
   	)));
}
add_action('customize_register','personalizar_cabecera');


//NOSOTROS
function personalizar_nosotros($wp_customize){
	$wp_customize->add_section( 'nosotros',array(
        'title' => 'Nosotros',
        'priority' => 2,
        'panel' => 'panel_custom'
    ));

	//titulo
    $wp_customize->add_setting('titulo_nosotros', array('default'=>'sobre el fracaso'));
    $wp_customize->add_control('titulo_nosotros', array(
        'label' => 'Título subrayado',
        'section' => 'nosotros',
        'priority' => 1, 
    ));

    //subtitulo (negrita)
    $wp_customize->add_setting('sub_titulo_nosotros', array('default'=>'Quienes los superan'));
    $wp_customize->add_control('sub_titulo_nosotros', array(
        'label' => 'Sub-título negrita',
        'section' => 'nosotros',
        'priority' => 2, 
    ));

    //descripcion
    $wp_customize->add_setting('detalle_nosotros', array(
		'default' => __("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
	));

	$wp_customize->add_control('detalle_nosotros', array(
		'label' => __('Cambiar Texto'),
		'section' => 'nosotros', 
		'type' => 'textarea',
	));

	$wp_customize->add_setting( 'img_nosotros', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_nosotros',
	   array(
	      'label' => __( 'Imagen sección nosotros' ),
	      'description' => esc_html__( 'Imagen que aparece a la derecha de la descripción' ),
	      'section' => 'nosotros',
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
add_action('customize_register','personalizar_nosotros');

/*SERVICIOS*/

function personalizar_servicios($wp_customize){
	$wp_customize->add_section( 'servicios',array(
        'title' => 'Servicios',
        'priority' => 3,
        'panel' => 'panel_custom'
    ));

	//titulo
    $wp_customize->add_setting('titulo_servicio', array());
    $wp_customize->add_control('titulo_servicio', array(
        'label' => 'Título subrayado',
        'section' => 'servicios',
        'priority' => 1, 
    ));

    //subtitulo (negrita)
    $wp_customize->add_setting('sub_titulo_servicio', array());
    $wp_customize->add_control('sub_titulo_servicio', array(
        'label' => 'Sub-título negrita',
        'section' => 'servicios',
        'priority' => 2, 
    ));

    //descripcion
    $wp_customize->add_setting('detalle_servicio', array());

	$wp_customize->add_control('detalle_servicio', array(
		'label' => __('Detalle'),
		'section' => 'servicios', 
		'type' => 'textarea',
		'priority' => 3
	));

	//servicio 1
	$wp_customize->add_setting( 'img_servicios1', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_servicios1',
	   array(
	      'label' => __( 'Imagen 1 servicios - Si esta img no esta no aparece el servicio' ),
	      'description' => esc_html__( 'Imagen destacada para el servicio' ),
	      'section' => 'servicios',
	      'priority' => 4,
	      'button_labels' => array( // Optional.
	         'select' => __( 'Seleccionar Imagen - 180x180' ),
	         'change' => __( 'Cambiar Imagen' ),
	         'remove' => __( 'Quitar' ),
	         'default' => __( 'Default' ),
	         'placeholder' => __( 'No hay imagen seleccionada' ),
	         'frame_title' => __( 'Selecccionar Imagen' ),
	         'frame_button' => __( 'Elegir Imagen' ),
	      )
	   )
	) );

	$wp_customize->add_setting('titulo_servicio1', array());
    $wp_customize->add_control('titulo_servicio1', array(
        'label' => 'Título del servicio 1',
        'section' => 'servicios',
        'priority' => 5, 
    ));

    $wp_customize->add_setting('sub_titulo_servicio1', array());
    $wp_customize->add_control('sub_titulo_servicio1', array(
        'label' => 'Detalle servicio 1',
        'section' => 'servicios',
        'priority' => 6, 
    ));

    //servicio 2
    $wp_customize->add_setting( 'img_servicios2', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_servicios2',
	   array(
	      'label' => __( 'Imagen 2 servicios' ),
	      'description' => esc_html__( 'Imagen destacada para el servicio' ),
	      'section' => 'servicios',
	      'priority' => 7,
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

	$wp_customize->add_setting('titulo_servicio2', array());
    $wp_customize->add_control('titulo_servicio2', array(
        'label' => 'Título del servicio 2',
        'section' => 'servicios',
        'priority' => 8, 
    ));

    $wp_customize->add_setting('sub_titulo_servicio2', array());
    $wp_customize->add_control('sub_titulo_servicio2', array(
        'label' => 'Detalle servicio 2',
        'section' => 'servicios',
        'priority' => 9, 
    ));

    //servicio 3
    $wp_customize->add_setting( 'img_servicios3', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_servicios3',
	   array(
	      'label' => __( 'Imagen 3 servicios' ),
	      'description' => esc_html__( 'Imagen destacada para el servicio' ),
	      'section' => 'servicios',
	      'priority' => 10,
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

	$wp_customize->add_setting('titulo_servicio3', array());
    $wp_customize->add_control('titulo_servicio3', array(
        'label' => 'Título del servicio 3',
        'section' => 'servicios',
        'priority' => 11, 
    ));

    $wp_customize->add_setting('sub_titulo_servicio3', array());
    $wp_customize->add_control('sub_titulo_servicio3', array(
        'label' => 'Detalle servicio 3',
        'section' => 'servicios',
        'priority' => 12, 
    ));

    //servicio 4
    $wp_customize->add_setting( 'img_servicios4', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_servicios4',
	   array(
	      'label' => __( 'Imagen 4 servicios' ),
	      'description' => esc_html__( 'Imagen destacada para el servicio' ),
	      'section' => 'servicios',
	      'priority' => 13,
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

	$wp_customize->add_setting('titulo_servicio4', array());
    $wp_customize->add_control('titulo_servicio4', array(
        'label' => 'Título del servicio 4',
        'section' => 'servicios',
        'priority' => 14, 
    ));

    $wp_customize->add_setting('sub_titulo_servicio4', array());
    $wp_customize->add_control('sub_titulo_servicio4', array(
        'label' => 'Detalle servicio 4',
        'section' => 'servicios',
        'priority' => 15, 
    ));

    //servicio 5
    $wp_customize->add_setting( 'img_servicios5', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_servicios5',
	   array(
	      'label' => __( 'Imagen 5 servicios' ),
	      'description' => esc_html__( 'Imagen destacada para el servicio' ),
	      'section' => 'servicios',
	      'priority' => 16,
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

	$wp_customize->add_setting('titulo_servicio5', array());
    $wp_customize->add_control('titulo_servicio5', array(
        'label' => 'Título del servicio 5',
        'section' => 'servicios',
        'priority' => 17, 
    ));

    $wp_customize->add_setting('sub_titulo_servicio5', array());
    $wp_customize->add_control('sub_titulo_servicio5', array(
        'label' => 'Detalle servicio 5',
        'section' => 'servicios',
        'priority' => 18, 
    ));

    //setings para el boton leer mas
   	$wp_customize->add_setting( 'link_btn_mas_nosotros',
	   array(
	   	'type' => 'option',
	   	'transport'=> 'none'
	));
	 
	$wp_customize->add_control( 'link_btn_mas_nosotros',
	   array(
	      'label' => __( 'Botón Leer más' ),
	      'description' => esc_html__( 'Página dónde irá al hacer click en el botón' ),
	      'section' => 'servicios',
	      'priority' => 19, 
	      'type' => 'dropdown-pages'
	   )
	);


}
add_action('customize_register','personalizar_servicios');


/*CLIENTES*/

function personalizar_clientes($wp_customize){
	$wp_customize->add_section( 'clientes',array(
        'title' => 'Clientes',
        'priority' => 4,
        'panel' => 'panel_custom'
    ));

	//titulo
    $wp_customize->add_setting('titulo_cliente', array());
    $wp_customize->add_control('titulo_cliente', array(
        'label' => 'Título subrayado',
        'section' => 'clientes',
        'priority' => 1, 
    ));

    //subtitulo (negrita)
    $wp_customize->add_setting('sub_titulo_cliente', array());
    $wp_customize->add_control('sub_titulo_cliente', array(
        'label' => 'Sub-título negrita',
        'section' => 'clientes',
        'priority' => 2, 
    ));

    //descripcion
    $wp_customize->add_setting('detalle_cliente', array());

	$wp_customize->add_control('detalle_cliente', array(
		'label' => __('Detalle'),
		'section' => 'clientes', 
		'type' => 'textarea',
		'priority' => 3
	));

	//fondo cliente 1
	$wp_customize->add_setting( 'img_cliente1', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_cliente1',
	   array(
	      'label' => __( 'Fondo 1er cliente' ),
	      'description' => esc_html__( 'Imagen de fondo del cliente 1 - Si el fondo no esta no aparece el cliente' ),
	      'section' => 'clientes',
	      'priority' => 4,
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

	//logo cliente 1
	$wp_customize->add_setting( 'logo_cliente1', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_cliente1',
	   array(
	      'label' => __( 'Logo 1er cliente' ),
	      'description' => esc_html__( 'Imagen logo cliente 1' ),
	      'section' => 'clientes',
	      'priority' => 5,
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

	//leer mas cliente 1
   	$wp_customize->add_setting( 'link_btn_mas_cliente_1',
	   array(
	   	'type' => 'option',
	   	'transport'=> 'none'
	));
	 
	$wp_customize->add_control( 'link_btn_mas_cliente_1',
	   array(
	      'label' => __( 'Botón ver caso de estudio' ),
	      'section' => 'clientes',
	      'priority' => 6, 
	      'type' => 'dropdown-pages'
	   )
	);

	//fondo cliente 2
	$wp_customize->add_setting( 'img_cliente2', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_cliente2',
	   array(
	      'label' => __( 'Fondo 2do cliente' ),
	      'description' => esc_html__( 'Imagen de fondo del cliente 2' ),
	      'section' => 'clientes',
	      'priority' => 7,
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

	//logo cliente 2
	$wp_customize->add_setting( 'logo_cliente2', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_cliente2',
	   array(
	      'label' => __( 'Logo 2do cliente' ),
	      'description' => esc_html__( 'Imagen logo cliente 2' ),
	      'section' => 'clientes',
	      'priority' => 8,
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

	//leer mas cliente 2
   	$wp_customize->add_setting( 'link_btn_mas_cliente_2',
	   array(
	   	'type' => 'option',
	   	'transport'=> 'none'
	));
	 
	$wp_customize->add_control( 'link_btn_mas_cliente_2',
	   array(
	      'label' => __( 'Botón ver caso de estudio' ),
	      'section' => 'clientes',
	      'priority' => 9, 
	      'type' => 'dropdown-pages'
	   )
	);

	//fondo cliente 3
	$wp_customize->add_setting( 'img_cliente3', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_cliente3',
	   array(
	      'label' => __( 'Fondo 3er cliente' ),
	      'description' => esc_html__( 'Imagen de fondo del cliente 3' ),
	      'section' => 'clientes',
	      'priority' => 10,
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

	//logo cliente 3
	$wp_customize->add_setting( 'logo_cliente3', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_cliente3',
	   array(
	      'label' => __( 'Logo 3er cliente' ),
	      'description' => esc_html__( 'Imagen logo cliente 3' ),
	      'section' => 'clientes',
	      'priority' => 11,
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

	//leer mas cliente 3
   	$wp_customize->add_setting( 'link_btn_mas_cliente_3',
	   array(
	   	'type' => 'option',
	   	'transport'=> 'none'
	));
	 
	$wp_customize->add_control( 'link_btn_mas_cliente_3',
	   array(
	      'label' => __( 'Botón ver caso de estudio' ),
	      'section' => 'clientes',
	      'priority' => 12, 
	      'type' => 'dropdown-pages'
	   )
	);

	//fondo cliente 4
	$wp_customize->add_setting( 'img_cliente4', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_cliente4',
	   array(
	      'label' => __( 'Fondo 4to cliente' ),
	      'description' => esc_html__( 'Imagen de fondo del cliente 4' ),
	      'section' => 'clientes',
	      'priority' => 13,
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

	//logo cliente 4
	$wp_customize->add_setting( 'logo_cliente4', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_cliente4',
	   array(
	      'label' => __( 'Logo 4to cliente' ),
	      'description' => esc_html__( 'Imagen logo cliente 4' ),
	      'section' => 'clientes',
	      'priority' => 14,
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

	//leer mas cliente 4
   	$wp_customize->add_setting( 'link_btn_mas_cliente_4',
	   array(
	   	'type' => 'option',
	   	'transport'=> 'none'
	));
	 
	$wp_customize->add_control( 'link_btn_mas_cliente_4',
	   array(
	      'label' => __( 'Botón ver caso de estudio' ),
	      'section' => 'clientes',
	      'priority' => 15, 
	      'type' => 'dropdown-pages'
	   )
	);
	

    //setings para el boton leer mas
   	$wp_customize->add_setting( 'link_btn_mas_clientes',
	   array(
	   	'type' => 'option',
	   	'transport'=> 'none'
	));
	 
	$wp_customize->add_control( 'link_btn_mas_clientes',
	   array(
	      'label' => __( 'Botón Leer más' ),
	      'description' => esc_html__( 'Página dónde irá al hacer click en el botón' ),
	      'section' => 'clientes',
	      'priority' => 16, 
	      'type' => 'dropdown-pages'
	   )
	);


}
add_action('customize_register','personalizar_clientes');

/*QUE DICEN LOS CLIENTES*/

function personalizar_testimonios($wp_customize){
	$wp_customize->add_section( 'testimonios',array(
        'title' => 'Testimonios',
        'priority' => 5,
        'panel' => 'panel_custom'
    ));

	//titulo
    $wp_customize->add_setting('titulo_testimonio', array());
    $wp_customize->add_control('titulo_testimonio', array(
        'label' => 'Título subrayado',
        'section' => 'testimonios',
        'priority' => 1, 
    ));

    //subtitulo (negrita)
    $wp_customize->add_setting('sub_titulo_testimonio', array());
    $wp_customize->add_control('sub_titulo_testimonio', array(
        'label' => 'Sub-título negrita',
        'section' => 'testimonios',
        'priority' => 2, 
    ));

	//fondo testimonio
	$wp_customize->add_setting( 'img_bk_testimonio', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_bk_testimonio',
	   array(
	      'label' => __( 'Background de la sección' ),
	      'section' => 'testimonios',
	      'priority' => 4,
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

	//logo cliente 1
	$wp_customize->add_setting( 'logo_testimonio1', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_testimonio1',
	   array(
	      'label' => __( 'Logo 1er testimonio' ),
	      'description' => esc_html__( 'Logo cliente 1, si el logo no está el testimonio no aparece' ),
	      'section' => 'testimonios',
	      'priority' => 5,
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

	//nombre testimonio 1

    $wp_customize->add_setting('nombre_testimonio1', array());
    $wp_customize->add_control('nombre_testimonio1', array(
        'label' => '¿Quién lo dijo?',
        'section' => 'testimonios',
        'priority' => 6, 
    ));

    //que dijo
    $wp_customize->add_setting('detalle_testimonio1', array());
    $wp_customize->add_control('detalle_testimonio1', array(
        'label' => '¿Qué dijo?',
        'section' => 'testimonios',
        'priority' => 7, 
        'type' => 'textarea'
    ));

    //logo cliente 2
	$wp_customize->add_setting( 'logo_testimonio2', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_testimonio2',
	   array(
	      'label' => __( 'Logo 2do testimonio' ),
	      'description' => esc_html__( 'Logo cliente 2' ),
	      'section' => 'testimonios',
	      'priority' => 8,
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

	//nombre testimonio 1

    $wp_customize->add_setting('nombre_testimonio2', array());
    $wp_customize->add_control('nombre_testimonio2', array(
        'label' => '¿Quién lo dijo?',
        'section' => 'testimonios',
        'priority' => 9, 
    ));

    //que dijo
    $wp_customize->add_setting('detalle_testimonio2', array());
    $wp_customize->add_control('detalle_testimonio2', array(
        'label' => '¿Qué dijo?',
        'section' => 'testimonios',
        'priority' => 10, 
        'type' => 'textarea'
    ));

    //logo cliente 3
	$wp_customize->add_setting( 'logo_testimonio3', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_testimonio3',
	   array(
	      'label' => __( 'Logo 3er testimonio' ),
	      'description' => esc_html__( 'Logo cliente 1' ),
	      'section' => 'testimonios',
	      'priority' => 11,
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

	//nombre testimonio 3

    $wp_customize->add_setting('nombre_testimonio3', array());
    $wp_customize->add_control('nombre_testimonio3', array(
        'label' => '¿Quién lo dijo?',
        'section' => 'testimonios',
        'priority' => 12, 
    ));

    //que dijo
    $wp_customize->add_setting('detalle_testimonio3', array());
    $wp_customize->add_control('detalle_testimonio3', array(
        'label' => '¿Qué dijo?',
        'section' => 'testimonios',
        'priority' => 13, 
        'type' => 'textarea'
    ));




}
add_action('customize_register','personalizar_testimonios');


/*MIS CERTIFICADOS*/

function personalizar_certificados($wp_customize){
	$wp_customize->add_section( 'certificados',array(
        'title' => 'Mis Certificados',
        'priority' => 6,
        'panel' => 'panel_custom'
    ));

	//titulo
    $wp_customize->add_setting('titulo_certificados', array());
    $wp_customize->add_control('titulo_certificados', array(
        'label' => 'Título subrayado',
        'section' => 'certificados',
        'priority' => 1, 
    ));

    //subtitulo
    $wp_customize->add_setting('sub_titulo_certificados', array());
    $wp_customize->add_control('sub_titulo_certificados', array(
        'label' => 'Sub-título',
        'section' => 'certificados',
        'priority' => 2, 
    ));

	//img cert 1
	$wp_customize->add_setting( 'img_certif_1', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_certif_1',
	   array(
	      'label' => __( 'Imagen certificado 1 - Si la img no esta el certificado no aparece' ),
	      'section' => 'certificados',
	      'priority' => 3,
	      'button_labels' => array( // Optional.
	         'select' => __( 'Seleccionar Imagen 80x80' ),
	         'change' => __( 'Cambiar Imagen' ),
	         'remove' => __( 'Quitar' ),
	         'default' => __( 'Default' ),
	         'placeholder' => __( 'No hay imagen seleccionada' ),
	         'frame_title' => __( 'Selecccionar Imagen' ),
	         'frame_button' => __( 'Elegir Imagen' ),
	      )
	   )
	) );

	$wp_customize->add_setting('titulo_img_certificado1', array());
    $wp_customize->add_control('titulo_img_certificado1', array(
        'label' => 'Título imagen certificado 1',
        'section' => 'certificados',
        'priority' => 4, 
    ));

    //img cert 2
	$wp_customize->add_setting( 'img_certif_2', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_certif_2',
	   array(
	      'label' => __( 'Imagen certificado 2' ),
	      'section' => 'certificados',
	      'priority' => 5,
	      'button_labels' => array( // Optional.
	         'select' => __( 'Seleccionar Imagen 80x80' ),
	         'change' => __( 'Cambiar Imagen' ),
	         'remove' => __( 'Quitar' ),
	         'default' => __( 'Default' ),
	         'placeholder' => __( 'No hay imagen seleccionada' ),
	         'frame_title' => __( 'Selecccionar Imagen' ),
	         'frame_button' => __( 'Elegir Imagen' ),
	      )
	   )
	) );

	$wp_customize->add_setting('titulo_img_certificado2', array());
    $wp_customize->add_control('titulo_img_certificado2', array(
        'label' => 'Título imagen certificado 2',
        'section' => 'certificados',
        'priority' => 6, 
    ));

	//img cert 3
	$wp_customize->add_setting( 'img_certif_3', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_certif_3',
	   array(
	      'label' => __( 'Imagen certificado 3' ),
	      'section' => 'certificados',
	      'priority' => 7,
	      'button_labels' => array( // Optional.
	         'select' => __( 'Seleccionar Imagen 80x80' ),
	         'change' => __( 'Cambiar Imagen' ),
	         'remove' => __( 'Quitar' ),
	         'default' => __( 'Default' ),
	         'placeholder' => __( 'No hay imagen seleccionada' ),
	         'frame_title' => __( 'Selecccionar Imagen' ),
	         'frame_button' => __( 'Elegir Imagen' ),
	      )
	   )
	) );

	$wp_customize->add_setting('titulo_img_certificado3', array());
    $wp_customize->add_control('titulo_img_certificado3', array(
        'label' => 'Título imagen certificado 3',
        'section' => 'certificados',
        'priority' => 8, 
    ));

    //img cert 4
	$wp_customize->add_setting( 'img_certif_4', array(
	));
	 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_certif_4',
	   array(
	      'label' => __( 'Imagen certificado 4' ),
	      'section' => 'certificados',
	      'priority' => 9,
	      'button_labels' => array( // Optional.
	         'select' => __( 'Seleccionar Imagen 80x80' ),
	         'change' => __( 'Cambiar Imagen' ),
	         'remove' => __( 'Quitar' ),
	         'default' => __( 'Default' ),
	         'placeholder' => __( 'No hay imagen seleccionada' ),
	         'frame_title' => __( 'Selecccionar Imagen' ),
	         'frame_button' => __( 'Elegir Imagen' ),
	      )
	   )
	) );

	$wp_customize->add_setting('titulo_img_certificado4', array());
    $wp_customize->add_control('titulo_img_certificado4', array(
        'label' => 'Título imagen certificado 4',
        'section' => 'certificados',
        'priority' => 10, 
    ));


}
add_action('customize_register','personalizar_certificados');