<!--For the larger thumbnails on homepage and work page-->
<article class="content content-primary col-12 col-md-6 py-md-4 p-relative my-4 off-screen off-screen-bottom">

	<a href="<?php the_permalink(); ?>" class="p-absolute my-4 mx-col"></a>

	<figure class="p-relative overflow-hidden p-0 px-xl-4 mx-col">
		<img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); }?>">
	</figure>

	<div class="info mx-auto">
		<div class="py-4 mb-0">
			<h3 class="mb-1"><?php the_title(); ?></h3>
			<p><?php the_excerpt(); ?></p>
		</div>
	</div>

</article>
