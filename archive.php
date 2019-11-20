<?php


get_header(); ?>


	<section class="hero hero-mas-padding">
      <div class="container">
         <div class="row text-center">
           <div class="col-12 main">
             <h1 class="like-h1">blog - <?php the_archive_title(); ?></h1>
           </div>
           <div class="col-12">
             <img class="blog-img" src="<?php bloginfo('template_url')?>/img/analytics.jpg">
           </div>
         </div>
      </div>
  </section>
  
  <div class=" blog">
    <div class="container blog-container">

      <?php if ( have_posts() ) : 

      while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content-blog-list', get_post_type() );

      endwhile;

      the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>
     
	

<?php get_footer(); ?>