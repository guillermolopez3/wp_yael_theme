<?php
/**
  Template Name: Bio
  
 */

get_header(); ?>

	<dir id="template-empty">
		<?php the_content();?>
	</dir>

	<div class="container">
		<div class="row d-flex justify-content-center mt-5">
		<h2 class="titulo-seccion"> <span class="subtitulo-seccion">  <strong></strong> </span> <br> <strong>Quiero conocerte</strong></h2>
	</div>
	<div class="row d-flex justify-content-center">
		<a id="btn_resul" data-toggle="modal" data-target="#modalBio" href="" data-toggle="modal" class="btn btn-naranja">YO TAMBIÉN</a>
         
    </div>
	</div>
	

      <!--=====================================
VENTANA MODAL PARA EL REGISTRO
======================================-->

	<div class="modal fade" id="modalBio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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