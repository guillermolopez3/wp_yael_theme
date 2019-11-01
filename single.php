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

    <div class="container">
    	
    	<div class="row mt-5">
    		<div class="col-12">
    			<nav>
	    			<?php 
						$categories = get_categories();
						foreach($categories as $category) 
						{
		   					echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '  /  </a>';
						}
		    		?>
	    		</nav>
    		</div>
    	</div>

    	<div class="row mt-5">
    		<div class="col-8">
    			<?php the_content(); ?>
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
				else{

					get_template_part( 'template-parts/content', 'none' );
				}

			?>
    		</div>
    		<div class="col-4">
    			<p>Escrito por: <?php the_author(); ?></p>
    			<p>el <?php the_date();?></p>
    		</div>
    	</div>

    </div>


     <section class="blog mt-5">
      <div class="container">
        <h2>Últimos <strong>Artículos</strong></h2>
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
      </div>
    </section>


<?php
get_footer();
