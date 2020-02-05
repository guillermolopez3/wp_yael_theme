<?php
/**
  Template Name: Blog
  
 */

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
  
  <div class=" blog">
    <div class="container blog-container">

      <?php

        $args = array(
        'post_type'=> 'post',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'posts_per_page' => -1 // this will retrive all the post that is published 
        );
        $result = new WP_Query( $args );
        if ( $result-> have_posts() ) { 
          while ( $result->have_posts() ) : $result->the_post();

            get_template_part( 'template-parts/content-blog-list', get_post_type() );
       
          endwhile;
        }
        else{
          echo '<h5>No hay post para mostrar</h5>';
        }
         wp_reset_postdata(); 
      ?>

      
      <!-- <div class="row">
        <div class="col-md-6 d-flex justify-content-center">
          <img class="blog-img" src="<?php bloginfo('template_url')?>/img/analytics.jpg">
        </div>
        <div class="col-md-6 blog-detalle">
          <h2>Título de la nota</h2>
          <div class="date"> 
            <span class="fecha"> 12/10/2019 </span>-<span class="categoria">SEO</span> 
          </div>
          <div class="extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. </div>
          
          <br>
          <a href="<?php echo get_permalink($link_btn_servici); ?>" class="btn btn-success btn-sm">Leer mas</a>
        
        </div>
      </div> -->
      

    </div>

  </div>
     
	

<?php get_footer(); ?>