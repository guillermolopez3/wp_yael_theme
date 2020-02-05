<?php


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
  </section>

  <div class="container single">
      <div class="row mt-5">
        <div class="col-12">
           <nav class="single-categoria">
            <?php 
              $categories = get_categories();
              $current_category = single_cat_title("", false);
              foreach($categories as $category) 
              {
                  $nombre = $category->name;
                 if( $nombre == $current_category){
                  echo '<a class="single-active" href="' . get_category_link($category->term_id) . '">' . $category->name . '  /  </a>';
                }else{
                  echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '  /  </a>';
                }
              }
            ?>
          </nav> 
        </div>
      </div>
  </div>

  
  <div class=" blog">
    <div class="container blog-container">

      <?php 
        if ( have_posts() ) : 

          while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content-blog-list', get_post_type() );
          endwhile;
  
           the_posts_navigation();
        else :

          get_template_part( 'template-parts/content', 'none' );
        endif;
    ?>
  </div>
</div>
     
	

<?php get_footer(); ?>