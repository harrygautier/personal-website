<!--For the larger thumbnails on homepage and work page-->
<article class="content content-secondary col-12 col-lg-4 mx-auto off-screen off-screen-right">

	<a href="<?php the_permalink(); ?>" class="mx-col"></a>

	<figure class="overflow-hidden p-0 px-xl-4">
		<img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); }?>" class="p-absolute">
	</figure>

	<div class="info w-90 mx-auto">
		<div class="py-4 mb-0">
			<h3 class="mb-1"><?php the_title(); ?></h3>
			<p><?php the_excerpt(); ?></p>
		</div>
	</div>

</article>
