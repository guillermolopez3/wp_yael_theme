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
  //$img_ppal = get_theme_mod('img_cabe');
  $detalle = get_theme_mod('site_title');

  //obtengo la url de la foto si hay
  $img_cabe = (get_theme_mod('img_cabe') == '') ? get_bloginfo('template_url').'/img/yael.jpg' : get_theme_mod('img_cabe');

?>

	<section class="hero">
      <img class="position-absolute d-block d-lg-none" src="<?php bloginfo('template_url')?>/img/yael.jpg">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-7">
            <div class="hero-texto text-center">
              <h1> <?php echo $titulo; ?> </h1>
              <a href="" class="btn-black">¿Buscas Resultados?</a>
              <ul class="certificaciones">
                <li><img src="<?php bloginfo('template_url')?>/img/google.png"></li>
                <li><img src="<?php bloginfo('template_url')?>/img/google.png"></li>
                <li><img src="<?php bloginfo('template_url')?>/img/google.png"></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5 d-none d-lg-flex w-100 align-items-end">
            <img src="<?php bloginfo('template_url')?>/img/yael.jpg">
          </div>
        </div>
      </div>
    </section>

    <section class="nosotros">
      <div class="container">
        <h2 class="titulo-seccion"> <span class="subtitulo-seccion"> Sobre <strong>el fracaso</strong></span> <br> <strong>Quiénes lo superan</strong></h2>
        <div class="row">
          <div class="detalle-nosotros col-lg-6">
            <!-- <p>
              La Marketinera Frustrada. Es cuando el cliente te dice que le muevas un poco las redes pero el presupuesto no te da ni para un posteo por día. Hiciste todas las diplomaturas y nunca te enseñaron a hacer ni un anuncio. Cuando tuviste tu primer cliente y creías que tenías el poder y alguien te dijo: el cliente siempre tiene la razón. </p>

            <p>
            No se puede decir que no la tiene. El cliente es el que más conoce su producto y tiene una visión bastante acertada de quien es su cliente. Pero muchas veces piensa que sus respuestas son únicas y absolutas. Es ahí cuando como profesional debemos asesorarlos y ayudarlos en ese proceso de cambio a aceptar otros puntos de vista que pueden beneficiarlo a él y su negocio. ¿Difícil, no? </p>

            <p>
              Juntos podemos revolucionar las redes con tu marca. Ahora, si no estás dispuesto a tener éxito y adaptarte al cambio, por favor, no me escribas.

            </p> -->
    
            <p>  
              <?php 
                echo $detalle; 
              ?>
            </p>
          </div>
          <div class="imagen-nosotros col-lg-6">
             <img src="<?php bloginfo('template_url')?>/img/seo.png">
           </div>
        </div>
      </div>
    </section>

    <section class="servicios">
      <div class="container">
        <h2 class="titulo-seccion"> <span class="subtitulo-seccion"> Sobre <strong>el éxito</strong></span> <br> <strong>Qué herramientas aplicar</strong></h2>

        <p class="mb-6">Tomate cinco minutos para pensar en el objetivo comercial de tu negocio.Listo! Ya tenés la parte más importante de tu estrategia. <strong>Ahora vamos a lograrlo juntos!</strong>
        </p>
        <div class="row">
          <div class="col-12 col-md-6 col-xl">
            <div class="item-icon text-center">
              <img src="<?php bloginfo('template_url')?>/img/sem.png">
              <h3>Anuncios en Google</h3>
              <p>Hagamos los mejores anuncios y que todos te vean como lo que sos: el mejor de todos.</p>
            </div>
          </div> 
          <div class="col-12 col-md-6 col-xl">
            <div class="item-icon text-center">
              <img src="<?php bloginfo('template_url')?>/img/sem.png">
              <h3>Estrategia en Redes Sociales</h3>
              <p>Hagamos que tu marca sea relevante para esa señora que está mirando el celu.</p>
            </div>
          </div> 
          <div class="col-12 col-md-6 col-xl">
            <div class="item-icon text-center">
              <img src="<?php bloginfo('template_url')?>/img/sem.png">
              <h3>Anuncios en Redes Sociales</h3>
              <p>Vendamos más productos y mejoremos tus servicios: hace cuanto no respondes ese mensaje de inbox?</p>
            </div>
          </div> 
          <!-- <div class="col-12 col-md-6 col-xl">
            <div class="item-icon text-center">
              <img src="<?php //bloginfo('template_url')?>/img/servicios.webp">
              <h3>seo</h3>
              <p>Confeccionamos los mejores anuncios para ser visibles</p>
            </div>
          </div> 
          <div class="col-12 col-md-6 col-xl">
            <div class="item-icon text-center">
              <img src="<?php// bloginfo('template_url')?>/img/servicios.webp">
              <h3>seo</h3>
              <p>Confeccionamos los mejores anuncios para ser visibles</p>
            </div>
          </div>  -->
        </div>
        
        <div class="row d-flex justify-content-center mt-5">
          <a href="#" class="btn btn-success">Leer mas</a>
        </div>

      </div>
    </section>

     <section class="clientes mt-5">
      <div class="container">
        <h2 class="titulo-seccion"> <span class="subtitulo-seccion"> Los <strong>clientes</strong></span> <br> <strong>Que tienen razón</strong></h2>
        <div class="clientes-detalle">
          <p class="text-center">Estos son los clientes que se animaron a tener éxito</p>
        </div>
        <div class="row">
          <div class="col-12 col-xl-6 p-0 mt-3 mt-lg-0 pl-md-3 pr-md-3 p-lg-2 order-0 order-lg-0">
            <a href="#"></a>
            <div class="clientes-item" style="background-image: url(<?php bloginfo('template_url')?>/img/deco.jpg); ">
               <a href="" class="d-flex justify-content-center"><img src="<?php bloginfo('template_url')?>/img/holcim_logo.png);"></a>
               <a class="permalink" href="#">VER CASO DE ESTUDIO</a>
            </div>
          </div>

          <div class="col-12 col-xl-6 p-0 mt-3 mt-lg-0 pl-md-3 pr-md-3 p-lg-2 order-0 order-lg-0">
            <a href="#"></a>
            <div class="clientes-item" style="background-image: url(<?php bloginfo('template_url')?>/img/deco.jpg); ">
               <a href="" class="d-flex justify-content-center"><img src="<?php bloginfo('template_url')?>/img/holcim_logo.png);"></a>
               <a class="permalink" href="#">VER CASO DE ESTUDIO</a>
            </div>
          </div>

           <div class="col-12 col-xl-6 p-0 mt-3 mt-lg-0 pl-md-3 pr-md-3 p-lg-2 order-0 order-lg-0">
            <a href="#"></a>
            <div class="clientes-item" style="background-image: url(<?php bloginfo('template_url')?>/img/deco.jpg); ">
               <a href="" class="d-flex justify-content-center"><img src="<?php bloginfo('template_url')?>/img/holcim_logo.png);"></a>
               <a class="permalink" href="#">VER CASO DE ESTUDIO</a>
            </div>
          </div>
  

        </div>

        <div class="row d-flex justify-content-center mt-5">
          <a href="#" class="btn btn-success">Leer mas</a>
        </div>
      </div>
    </section>

<!-- TESTIMONIOS-->

     <section class="testimonios mt-5" style="background-image: url(<?php bloginfo('template_url')?>/img/clientes_dicen1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="titulo-seccion"> <span class="subtitulo-seccion"> Lo que dicen los <strong>clientes</strong></span> <br> <strong> de los clientes</strong></h2>
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
                <div class="carousel-item active">
                  <div class="item-testimonio">
                    <img src="<?php bloginfo('template_url')?>/img/holcim_logo.png">
                    <p class="testimonio-name">Pepito Juarez - CEO</p>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat."</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="item-testimonio">
                    <img src="<?php bloginfo('template_url')?>/img/holcim_logo.png">
                    <p class="testimonio-name">Pepito Juarez - CEO</p>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat."</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="item-testimonio">
                    <img src="<?php bloginfo('template_url')?>/img/holcim_logo.png">
                    <p class="testimonio-name">Pepito Juarez - CEO</p>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat."</p>
                  </div>
                </div>
              </div>
              <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> -->
            </div>

          </div>     
        </div>

        
      </div>
    </section>


     <section class="mis-certificaciones mt-5">
      <div class="container">
        <h2 class="titulo-seccion"> <strong>Quién certifica mis habilidade</strong></h2>
        <div class="mis-certificaciones-detalle">
          <p class="text-center">Gracias por tanto Google</p>
        </div>

        <div class="row mt-5">
          <div class="col-6 col-md-4 col-lg text-center">
            <div class="icon-certificacion">
              <img src="<?php bloginfo('template_url')?>/img/display_certification.png">
              <p> Display Adversing</p>
            </div>
          </div>

          <div class="col-6 col-md-4 col-lg text-center">
            <div class="icon-certificacion">
              <img src="<?php bloginfo('template_url')?>/img/img_80.png">
              <p> Display Adversing</p>
            </div>
          </div>

          <div class="col-6 col-md-4 col-lg text-center">
            <div class="icon-certificacion">
              <img src="<?php bloginfo('template_url')?>/img/img_80.png">
              <p> Display Adversing</p>
            </div>
          </div>

          <div class="col-6 col-md-4 col-lg text-center">
            <div class="icon-certificacion">
              <img src="<?php bloginfo('template_url')?>/img/img_80.png">
              <p> Display Adversing</p>
            </div>
          </div>


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
          <a href="#" class="btn btn-success">Leer mas</a>
        </div>
      </div>
    </section>
	
   <div>
    <p>  <?php 
            echo $img_cabe;
            

          ?>  </p>
  </div> 

<?php get_footer(); ?>

