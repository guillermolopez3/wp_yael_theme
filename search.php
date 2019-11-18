<?php

get_header();
?>

	<section id="primary" class="search_container">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h3 class="p-3">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Resultado de la búsqueda: %s', 'yael' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h3>
			</header><!-- .page-header -->

			<div class=" blog">
    			<div class="container blog-container">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
								get_template_part( 'template-parts/content-blog-list', 'search' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
