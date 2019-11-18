<?php
get_header();
?>
	<div class="container error_404">
		<h3 class="mb-3"><strong>Lo sentimos...! </strong> </h3>
		<h3 class="mb-3"><strong>La página que buscas no existe</strong></h3>
		<p>Quizá has escrito mal la dirección, o la hemos roto nosotros.</p>
		<p>Puedes volver al inicio o usar este buscador para encontrar lo que quieres:</p>

		<?php get_search_form(); ?>
	</div>

	<section class="blog mt-5">
      <div class="container">
        <h2>Últimos <strong>Artículos</strong></h2>
        <div class="row">

        	

			<?php
				$cant=1;
		        $args = array(
		        'post_type'=> 'post',
		        'orderby'    => 'ID',
		        'post_status' => 'publish',
		        'order'    => 'DESC',
		        'posts_per_page' => -1 // this will retrive all the post that is published 
		        );
		        $result = new WP_Query( $args );
		        if ( $result-> have_posts() ) { 
		          while ( $result->have_posts()  && $cant<=3 ) : $result->the_post();
		        	get_template_part( 'template-parts/content_post', get_post_type() );

						$cant++;
		          endwhile;
		        }
		        else{
		          echo '<h5>No hay post para mostrar</h5>';
		        }
		         wp_reset_postdata(); 
		      ?>
			
		</div>
      </div>
    </section>
	

<?php
get_footer();
