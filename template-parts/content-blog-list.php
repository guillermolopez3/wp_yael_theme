<?php
/* template para cuando muestro los post*/
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