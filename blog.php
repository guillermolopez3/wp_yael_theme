<?php
/**
  Template Name: Blog

 paginación en video 16
 */

get_header(); ?>


	<section class="hero hero-mas-padding">
      <div class="container">
         <div class="row text-center">
           <div class="col-12 main">
             <h1 class="like-h1">blog</h1>
           </div>
           <div class="col-12">
             <img class="blog-img" src="<?php bloginfo('template_url')?>/img/analytics.jpg">
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
        ?> 

          <div class="row">
            <div class="col-md-6 d-flex justify-content-center blog-list-img">
              <a href="<?php the_permalink();?>">
      
                  <?php if(has_post_thumbnail()){ 
                    $img_id = get_post_thumbnail_id( $post->ID );
                    $thumbnail = wp_get_attachment_image_src( $img_id,'full',true );
                    
                  ?>
                  <img src="<?php echo $thumbnail[0];?>">

                  <?php }?>
                
              </a>
            </div>
            <div class="col-md-6 blog-detalle">
              <a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
              <div class="date"> 
                <span class="fecha"> <?php echo get_the_date();?> </span>-<span class="categoria"><?php the_category();?></span> 
              </div>
              <div class="extract"><?php the_excerpt(); ?></div>
              
              <br>
              <a href="<?php echo get_permalink($link_btn_servici); ?>" class="btn btn-success btn-sm">Leer mas</a>
            
            </div>
          </div>
          <hr>
        <?php
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