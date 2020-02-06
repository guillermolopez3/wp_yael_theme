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

              <a id="btn_resul" data-toggle="modal" data-target="#exampleModal" href="" data-toggle="modal" class="btn btn-black btn-header btn-naranja">¡La quiero!</a>
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

    </div>

  </div>


  <!--=====================================
VENTANA MODAL PARA EL REGISTRO
======================================-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¡LA QUIERO!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[sibwp_form id=2]'); ?>
      </div>
      
    </div>
  </div>
</div>
     
	

<?php get_footer(); ?>