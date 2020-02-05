<div class="col-12 col-md-6 col-lg-4 p-lg-2">
	<div class="alto-img-blog">
		<a href="<?php the_permalink();?>">
			
				<?php if(has_post_thumbnail()){ 
					//the_post_thumbnail('recent_art');
					$img_id = get_post_thumbnail_id( $post->ID );
					$thumbnail = wp_get_attachment_image_src( $img_id,'full',true );
					
				?>
				<img src="<?php echo $thumbnail[0];?>">

				<?php }?>
			
		</a>
	</div>
	<article>
		<div class="date"> 
			<span class="fecha"> <?php echo get_the_date();?> </span> - <span class="categoria"><?php the_category();?></span> 
		</div>
		<hgroup><a href="<?php the_permalink();?>"><?php the_title();?></a></hgroup>
		<div class="extract"><?php the_excerpt(); ?></div>
	</article>
</div>