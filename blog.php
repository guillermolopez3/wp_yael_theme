<?php
/**
  Template Name: Blog

 paginación en video 16
 */

get_header(); ?>


	<section class="hero">
      <div class="container">
         <div class="row">
           <div class="col-lg-6 main">
             <h1>La marketinera frustrada</h1>
             <h3>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</h3>
           </div>
           <div class="col-lg-6 d-flex align-items-center">
             <img src="<?php bloginfo('template_url')?>/img/analytics.jpg">
           </div>
         </div>
      </div>
    </section>


     <section class="blog mt-5">
      <div class="container">
        <h2>Últimos <strong>Artículos</strong></h2>
        <div class="row">

        	<?php
				if ( have_posts() )
				{
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content_post', get_post_type() );

					endwhile;
				}
				else{

					get_template_part( 'template-parts/content', 'none' );
				}

			?>
			
		</div>
      </div>
    </section>
	

<?php get_footer(); ?>