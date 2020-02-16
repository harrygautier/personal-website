<section class="more-work mt-6">
	<div class="row">
		<div class="col-12 col-md-1"></div>
		<div class="col-12 col-md-8 my-4 mx-4">
			<h2 class="mb-0">Selected Work</h2>
			<p class="text-bold">Suggested</p>
		</div>
	</div>

	<div class="row mx-auto py-4">

		<?php

		$currentID = get_the_ID();

		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'orderby' => 'rand',
			'order' => 'ASC',
			'posts_per_page' => 2,
			'post__not_in' => array($currentID),

		);
		$arr_posts = new WP_Query( $args );

		if ( $arr_posts->have_posts() ) {

			while ( $arr_posts->have_posts() ) {
				$arr_posts->the_post();

				get_template_part('template-parts/posts/content', 'secondary');
			}
		}

		wp_reset_postdata();
		?>

	</div>
</section>
