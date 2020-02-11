<?php
/**
  Template Name: Clientes
  
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
    <div  style="background-image: url(<?php echo bloginfo('template_url')?>/img/fondo_casos_exito.png); height: 426px;">
      <div class="container">
         <div class="row text-center d-flex justify-content-center align-items-center">
            <div style="position: absolute;">
              <img src="<?php echo bloginfo('template_url')?>/img/fondo_dots.png ">
            </div>
           <div class="col-12 main" style="margin-top: 100px;">
             <h1 class="like-h1" style="color: #7A7A7A; font-size: 59px;">Casos de éxito</h1>
           </div>
           <div class="blog-hero col-12">
              
              <h4 style="color: #7A7A7A;">
                Estos son algunos de los clientes que tienen razón y se la bancan.
              </h4>
              
              <br>

           </div>
         </div>
      </div>
    </div>
  </section>
  
  <!-- CLIENTES -->

  <section id="clientes" class="clientes mt-5">
      <div class="container">
        
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

        
      </div>
  </section>

	<dir id="template-empty">
		<?php the_content();?>
	</dir>

<?php get_footer(); ?>