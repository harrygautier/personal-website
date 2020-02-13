<!--For the larger thumbnails on homepage and work page-->
<article class="col-12 col-lg-4 content content-secondary py-4 p-relative mx-auto">

	<a href="<?php the_permalink(); ?>" class="p-absolute"></a>
	
	<figure class="p-relative overflow-hidden p-0 px-xl-4">
		<img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); }?>" class="p-absolute">
	</figure>

	<div class="info mx-auto">
		<div class="py-4 mb-0">
			<h3 class="mb-1"><?php the_title(); ?></h3>
			<p><?php the_excerpt(); ?></p>
		</div>
	</div>

</article>


	