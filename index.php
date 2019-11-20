<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yael_t
 */

get_header(); ?>

<?php 
  $titulo = get_theme_mod('titulo');
  //$detalle = get_theme_mod('site_title');

  //obtengo la url de la foto si hay
  $img_cabe = (get_theme_mod('img_cabe') == '') ? get_bloginfo('template_url').'/img/yael.jpg' : get_theme_mod('img_cabe');


  $link_btn_resultados = get_option('link_btn_resultados'); // obtengo la opción del selec de paginas

  $img_cert_cabe_1 = get_theme_mod('1_img_cer_cabe');
  $img_cert_cabe_2 = get_theme_mod('2_img_cer_cabe');
  $img_cert_cabe_3 = get_theme_mod('3_img_cer_cabe');

  $titulo_nosotros = get_theme_mod('titulo_nosotros');
  $sub_ti_nosotros = get_theme_mod('sub_titulo_nosotros');
  $detalle_nosotros = get_theme_mod('detalle_nosotros');
  $img_nosotros = (get_theme_mod('img_nosotros') == '') ? get_bloginfo('template_url').'/img/seo.png' : get_theme_mod('img_nosotros');

//servicios
  $titulo_servicios = get_theme_mod('titulo_servicio');
  $sub_ti_servicios = get_theme_mod('sub_titulo_servicio');
  $detalle_servicio = get_theme_mod('detalle_servicio');

  $img_servicio_1   = get_theme_mod('img_servicios1');
  $titulo_serv_1    = get_theme_mod('titulo_servicio1');
  $detalle_serv_1   = get_theme_mod('sub_titulo_servicio1');

  $img_servicio_2   = get_theme_mod('img_servicios2');
  $titulo_serv_2    = get_theme_mod('titulo_servicio2');
  $detalle_serv_2   = get_theme_mod('sub_titulo_servicio2');

  $img_servicio_3   = get_theme_mod('img_servicios3');
  $titulo_serv_3    = get_theme_mod('titulo_servicio3');
  $detalle_serv_3   = get_theme_mod('sub_titulo_servicio3');

  $img_servicio_4   = get_theme_mod('img_servicios4');
  $titulo_serv_4    = get_theme_mod('titulo_servicio4');
  $detalle_serv_4   = get_theme_mod('sub_titulo_servicio4');

  $img_servicio_5   = get_theme_mod('img_servicios5');
  $titulo_serv_5    = get_theme_mod('titulo_servicio5');
  $detalle_serv_5   = get_theme_mod('sub_titulo_servicio5');

  $link_btn_servici = get_option('link_btn_mas_nosotros');


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

  //TESTIMONIO
  $titulo_testimonio = get_theme_mod('titulo_testimonio');
  $sub_ti_testimonio = get_theme_mod('sub_titulo_testimonio');
  $bk_testimonio     = (get_theme_mod('img_bk_testimonio') == '') ? get_bloginfo('template_url').'/img/clientes_dicen1.jpg' : get_theme_mod('img_bk_testimonio');

  $img_testimonio_1    = get_theme_mod('logo_testimonio1');
  $nombre_testimonio_1    = get_theme_mod('nombre_testimonio1');
  $detalle_testimonio_1    = get_theme_mod('detalle_testimonio1');

  $img_testimonio_2    = get_theme_mod('logo_testimonio2');
  $nombre_testimonio_2    = get_theme_mod('nombre_testimonio2');
  $detalle_testimonio_2    = get_theme_mod('detalle_testimonio2');

  $img_testimonio_3    = get_theme_mod('logo_testimonio3');
  $nombre_testimonio_3    = get_theme_mod('nombre_testimonio3');
  $detalle_testimonio_3    = get_theme_mod('detalle_testimonio3');

  /*CERTIFICADOS*/
  $titulo_certificados = get_theme_mod('titulo_certificados');
  $sub_ti_certificados = get_theme_mod('sub_titulo_certificados');

  $img_certif_1       = get_theme_mod('img_certif_1');
  $nombre_certif_1    = get_theme_mod('titulo_img_certificado1');

  $img_certif_2       = get_theme_mod('img_certif_2');
  $nombre_certif_2    = get_theme_mod('titulo_img_certificado2');

  $img_certif_3       = get_theme_mod('img_certif_3');
  $nombre_certif_3    = get_theme_mod('titulo_img_certificado3');

  $img_certif_4       = get_theme_mod('img_certif_4');
  $nombre_certif_4    = get_theme_mod('titulo_img_certificado4');


  /*BLOG*/
  $link_btn_blog = get_option('link_btn_mas_blog');
?>

	<section class="hero">
      <img class="position-absolute d-block d-lg-none" src="<?php bloginfo('template_url')?>/img/yael.jpg">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-7">
            <div class="hero-texto text-center">
              <h1> <?php echo ($titulo=='')? 'de la frustración nacen los éxitos' : $titulo ; ?> </h1>
              <a href="<?php echo get_permalink($link_btn_resultados); ?>" class="btn-black">¿Buscas Resultados?</a>
              <ul class="certificaciones">
                <?php if($img_cert_cabe_1 != ''){ ?>
                  <li><img src="<?php echo $img_cert_cabe_1?>"></li>
                <?php } ?>

                <?php if($img_cert_cabe_2 != ''){ ?>
                  <li><img src="<?php echo $img_cert_cabe_1?>"></li>
                <?php } ?>

                <?php if($img_cert_cabe_3 != ''){ ?>
                  <li><img src="<?php echo $img_cert_cabe_1?>"></li>
                <?php } ?>

              </ul>
            </div>
          </div>
          <div class="col-lg-5 d-none d-lg-flex w-100 align-items-end">
            <img src="<?php echo $img_cabe; ?>">
          </div>
        </div>
      </div>
  </section>

    <section class="nosotros">
      <div class="container">
        <h2 class="titulo-seccion"> <span class="subtitulo-seccion"> <?php echo ($titulo_nosotros=='')? 'sobre el fracaso' : $titulo_nosotros ;?> </span> <br> <strong><?php echo ($sub_ti_nosotros=='')? 'Quienes los superan' : $sub_ti_nosotros ?></strong></h2>
        <div class="row">
          <div class="detalle-nosotros col-lg-6">
            <p>  
              <?php echo ($detalle_nosotros !='') ? $detalle_nosotros : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et nemo dolores odit neque eaque amet provident sunt minima natus dolorem praesentium deserunt accusantium optio possimus, ducimus pariatur, quo hic excepturi.' ; ?>
            </p>
          </div>
          <div class="imagen-nosotros col-lg-6">
             <img src="<?php echo $img_nosotros; ?>">
           </div>
        </div>
      </div>
    </section>

    <section class="servicios">
      <div class="container">
        <h2 class="titulo-seccion"> <span class="subtitulo-seccion"> <?php echo ($titulo_servicios=='')? 'Sobre el éxito' : $titulo_servicios ;?></span> <br> <strong><?php echo ($sub_ti_servicios=='')? 'Qué herramientas aplicar' : $sub_ti_servicios ?></strong></h2>

        <p class="mb-6">
          <?php echo ($detalle_servicio !='') ? $detalle_servicio : 'Tomate cinco minutos para pensar en el objetivo comercial de tu negocio.Listo! Ya tenés la parte más importante de tu estrategia. Ahora vamos a lograrlo juntos!' ; ?>
        </p>
        <div class="row">
          <?php 
            for($i=1;$i<=5;$i++)
             {
              $aux_img = ${'img_servicio_' . $i}; //armo nombre de variables dinamicamente para la img
              $aux_tit = ${'titulo_serv_' . $i};
              $aux_sub = ${'detalle_serv_' . $i};
              if($aux_img != '')
              {
          ?>
                  <div class="col-12 col-md-6 col-xl">
                    <div class="item-icon text-center">
                      <img src="<?php echo $aux_img; ?>">
                      <h3>
                        <?php echo ($aux_tit=='')? 'Anuncios en Google' : $aux_tit ;?>
                      </h3>
                      <p>
                        <?php echo ($aux_sub=='')? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, eum, cumque. Totam rem' : $aux_sub ;?>
                      </p>
                    </div>
                  </div> 
          <?php
              }

            }
          ?>

        </div>
        
        <div class="row d-flex justify-content-center mt-5">
          <a href="<?php echo get_permalink($link_btn_servici); ?>" class="btn btn-success">Leer mas</a>
        </div>

      </div>
    </section>

<!-- CLIENTES -->
     <section class="clientes mt-5">
      <div class="container">
        <h2 class="titulo-seccion"> <span class="subtitulo-seccion"> <?php echo ($titulo_clientes=='')? 'Los clientes' : $titulo_clientes ;?></span> <br> <strong><?php echo ($sub_ti_clientes=='')? 'Que tienen razón' : $sub_ti_clientes ?></strong></h2>
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
          <a href="<?php echo get_permalink($link_btn_clientes); ?>" class="btn btn-success">Leer mas</a>
        </div>
      </div>
    </section>

<!-- TESTIMONIOS-->

     <section class="testimonios mt-5" style="background-image: url(<?php echo $bk_testimonio?>);">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="titulo-seccion"> <span class="subtitulo-seccion"> <?php echo ($titulo_testimonio=='')? 'Lo que dicen los clientes' : $titulo_testimonio ;?></span> <br> <strong><?php echo ($sub_ti_testimonio=='')? 'de los clientes' : $sub_ti_testimonio ;?></strong></h2>
          </div>
        </div>

        <div class="row d-flex align-items-center">
          <div class="col-12">
            
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner text-center">


                 <?php 
                    for($i=1;$i<=3;$i++)
                     {
                      $aux_img_test = ${'img_testimonio_' . $i}; 
                      $aux_nom_test = ${'nombre_testimonio_' . $i};
                      $aux_deta_tes = ${'detalle_testimonio_' . $i};
                      if($aux_img_test != '')
                      {
                  ?>
                        <div class="carousel-item <?php echo ($i==1) ? 'active' : '' ; ?>">
                          <div class="item-testimonio">
                            <img src="<?php echo $aux_img_test; ?>">
                            <p class="testimonio-name"><?php echo $aux_nom_test; ?></p>
                            <p>
                              <?php echo $aux_deta_tes; ?>
                            </p>
                          </div>
                        </div>  
                  <?php
                      }

                    }
                  ?>
              </div>
            </div>

          </div>     
        </div>

        
      </div>
    </section>


     <section class="mis-certificaciones">
      <div class="container">
        <h2 class="titulo-seccion"> <strong><?php echo ($titulo_certificados=='')? 'Quien certifica mis habilidades' : $titulo_certificados ;?></strong></h2>
        <div class="mis-certificaciones-detalle">
          <p class="text-center"><?php echo ($sub_ti_certificados=='')? 'Gracias por tanto Google' : $sub_ti_certificados ;?></p>
        </div>

        <div class="row mt-5">

          <?php 
            for($i=1;$i<=4;$i++)
            {
              $aux_img_cert = ${'img_certif_' . $i}; 
              $aux_nom_cert = ${'nombre_certif_' . $i};
              if($aux_img_cert != '')
              {
          ?>
                <div class="col-6 col-md-4 col-lg text-center">
                  <div class="icon-certificacion">
                    <img src="<?php echo $aux_img_cert; ?>">
                    <p> <?php echo $aux_nom_cert; ?></p>
                  </div>
                </div> 
          <?php
              }
            }
          ?>
      </div>
    </section>


     <section class="blog mt-5">
      <div class="container">
        <h2 class="titulo-seccion"> <span class="subtitulo-seccion"> Mis <strong>post-its</strong></span> <br> <strong>Últimas noticias</strong></h2>

        <div class="row">

          <?php
          	$cant=1;
    				if ( have_posts() )
    				{
    					while ( have_posts() && $cant<=3 ) :
    						the_post();
    						get_template_part( 'template-parts/content_post', get_post_type() );

    						$cant++;
    					endwhile;
    				}
    				else{

    					get_template_part( 'template-parts/content', 'none' );
    				}

    			?>
    			
    		</div>
        <div class="row d-flex justify-content-center mt-5">
          <a href="<?php echo get_permalink($link_btn_blog); ?>" class="btn btn-success">Leer mas</a>
        </div>
      </div>
    </section>
	
   <div>
    
  </div> 

<?php get_footer(); ?>

