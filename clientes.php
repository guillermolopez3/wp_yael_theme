<?php
/**
  Template Name: Blog
  
 */

  // CLIENTES
  $titulo_clientes = get_theme_mod('titulo_cliente');
  $sub_ti_clientes = get_theme_mod('sub_titulo_cliente');
  $detalle_clientes = get_theme_mod('detalle_cliente');

  $img_cliente_1    = get_theme_mod('img_cliente1');
  $logo_cliente_1   = get_theme_mod('logo_cliente1');
  $img_cliente_2    = get_theme_mod('img_cliente2');
  $logo_cliente_2   = get_theme_mod('logo_cliente2');
  $img_cliente_3   = get_theme_mod('img_cliente3');
  $logo_cliente_3   = get_theme_mod('logo_cliente3');
  $img_cliente_4    = get_theme_mod('img_cliente4');
  $logo_cliente_4   = get_theme_mod('logo_cliente4');

  $link_btn_ver_ce_1 = get_option('link_btn_mas_cliente_1');
  $link_btn_ver_ce_2 = get_option('link_btn_mas_cliente_2');
  $link_btn_ver_ce_3 = get_option('link_btn_mas_cliente_3');
  $link_btn_ver_ce_4 = get_option('link_btn_mas_cliente_4');
  $link_btn_clientes = get_option('link_btn_mas_clientes');

get_header(); ?>


	<section class="hero hero-mas-padding">
      <div class="container">
         <div class="row text-center">
           <div class="col-12 main">
             <h1 class="like-h1">blog</h1>
           </div>
           <div class="blog-hero col-12" style="background-image: url(<?php echo bloginfo('template_url')?>/img/fondo_marketing.png );">
              
              <h4>
                Bienvenidos al más allá, donde el marketing se cocina tan fácil como una milanesa. ¿Querés recibirla en tu mail?
              </h4>
              
              <br>

              <a id="btn_resul" href="" class="btn btn-black btn-header btn-naranja">¡La quiero!</a>
           </div>
         </div>
      </div>
  </section>
  
  <!-- CLIENTES -->

  <section id="clientes" class="clientes mt-5">
      <div class="container">
        <h2 class="titulo-seccion text-center"> <span class="subtitulo-seccion"> <?php echo ($titulo_clientes=='')? 'Los clientes' : $titulo_clientes ;?></span> <br> <strong><?php echo ($sub_ti_clientes=='')? 'Que tienen razón' : $sub_ti_clientes ?></strong></h2>
        <div class="clientes-detalle">
          <p class="text-center"><?php echo ($detalle_clientes !='') ? $detalle_clientes : 'Estos son los clientes que se animaron a tener éxito' ; ?></p>
        </div>

        <div class="row">

          <?php 
            for($i=1;$i<=4;$i++)
             {
              $aux_bk = ${'img_cliente_' . $i}; //armo nombre de variables dinamicamente para la img
              $aux_logo = ${'logo_cliente_' . $i};
              $aux_link_cli = ${'link_btn_ver_ce_' . $i};
              if($aux_bk != '')
              {
          ?>
                <div class="col-12 col-xl-6 p-0 mt-3 mt-lg-0 pl-md-3 pr-md-3 p-lg-2 order-0 order-lg-0">
                  <a href="#"></a>
                  <div class="clientes-item" style="background-image: url(<?php echo $aux_bk; ?>); ">
                     <a href="<?php echo get_permalink($aux_link_cli); ?>" class="d-flex justify-content-center"><img src="<?php echo $aux_logo; ?>"></a>
                     <a class="permalink" href="<?php echo get_permalink($aux_link_cli); ?>">VER CASO DE ESTUDIO</a>
                  </div>
                </div>  
          <?php
              }

            }
          ?>

        </div>

        <div class="row d-flex justify-content-center mt-5">
          <a href="<?php echo get_permalink($link_btn_clientes); ?>" class="btn btn-naranja" style="background-color: <?php echo get_theme_mod( 'color_botones'); ?>">Leer mas</a>
        </div>
      </div>
  </section>
     
	

<?php get_footer(); ?>