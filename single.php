<?php get_header(); ?>

	<div class="container-fluid single-header">

		<div class="row">
			<div class="img-fondo">
				<?php 
					if(has_post_thumbnail())
					{ 
						$post_thumbnail_id = get_post_thumbnail_id();
        				$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
					} 
				?>		
				<img src="<?php echo $post_thumbnail_url; ?>">	
			</div>
			<div class="textos">
				<div class="container">
					<div class="col-12">
						<h2><?php the_title();?></h2>
					</div>
				</div>
			</div>
    	</div>
    </div>

    <div class="container single">
    	<div class="row mt-5">
    		<div class="col-12">
    			<!-- <nav>
	    			<?php 
						$categories = get_categories();
						foreach($categories as $category) 
						{
		   					echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '  /  </a>';
						}
		    		?>
	    		</nav> -->
	    		<span class="single-categoria"><?php the_category();?></span>
    		</div>
    	</div>

    	<div class="row mt-5">
    		<div class="col-12 col-lg-8 ">
    			<?php 
				if ( have_posts() )
				{
					while ( have_posts()) :
						the_post();
				?>
					<div><?php the_content(); ?></div>
				<?php
					endwhile;
				}
			?>
    		</div>
    		<div class="col-lg-4 d-none d-lg-block single-detalle-post">
    			<?php
				       global $current_user;
				       get_currentuserinfo();     
				       echo get_avatar( $current_user->ID, 64 );
				?>
    			<p class="user-single">Escrito por: <strong><?php the_author(); ?></strong></p>
    			<p> <?php the_date();?></p>
    		</div>
    	</div>

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
