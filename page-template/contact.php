<?php
/**
  Template Name: Contact
  
 */

get_header(); ?>

	<div class="contact-hero" style="background: url(<?php bloginfo('template_url')?>/img/contact.jpg); height: 50vh; background-repeat: no-repeat; background-size: cover;">
			
	</div>

	<div class="container mt-5">
		<h1>CONTACTO</h1>
	</div>

      

	<dir>
		<?php the_content();?>
	</dir>

<?php get_footer(); ?>