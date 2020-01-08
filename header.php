<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yael_t
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Yael Marketing</title>
     <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada:700|Montserrat:300,400,600,700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Prompt:400,600,700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/m_style.css">

    


	
</head>

<body <?php body_class(); ?>>


	<header class="w-100">
    <nav id="menu_top" class="fixed-top navbar navbar-expand-xl <?php echo (get_theme_mod( 'color_letra_menu') == 'blanco')? 'navbar-light' : 'navbar-dark'; ?> " style="background-color: <?php echo get_theme_mod( 'color_menu' ); ?>">
           
    <?php 
      if( has_custom_logo() ):   
      // Get Custom Logo URL
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      $custom_logo_url = $custom_logo_data[0];
    ?>

    <a  href="<?php echo esc_url( home_url( '/' ) ); ?>" 
        title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
        rel="home"
        class="navbar-brand" >

      <img src="<?php echo esc_url( $custom_logo_url ); ?>" 
         alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
         class="d-lg-block"/>
    </a>
    <?php else: ?>
      <div class="site-name"><?php bloginfo( 'name' ); ?></div>
    <?php endif; ?>
    

            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
        </nav>

        <div class="sticky d-xl-none text-center" id="stick-header">
          <!--<a href="<?php echo get_permalink($link_btn_resultados); ?>" class="btn btn-black btn-header btn-naranja">QUIERO RESULTADOS</a> -->
          <a href="https://api.whatsapp.com/send?phone=5493517732038&text=Estoy%20buscando%20generar%20resultados%20para%20mi%20negocio" class="btn btn-black btn-header btn-naranja">QUIERO RESULTADOS</a>
        </div>

  </header>



