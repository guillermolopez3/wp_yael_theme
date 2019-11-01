<div class="col-12 col-md-6 col-lg-4 p-lg-2 text-center">
	<div><a href="<?php the_permalink();?>">
		<?php if(has_post_thumbnail()){ the_post_thumbnail('recent_art');} ?>
	</a></div>
	<article>
		<div class="date"> <span class="fecha"> <?php the_date();?> </span> <span class="categoria"><?php the_category();?></span> </div>
		<hgroup><h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2></hgroup>
		<div class="extract"><?php the_excerpt(); ?></div>
	</article>
</div>