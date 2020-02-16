<section id="work" class="work">
	<div class="row mx-auto">
		<?php

		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'orderby' => 'date',
			'order'   => 'DESC',
			'posts_per_page' => 6,
		);
		$arr_posts = new WP_Query( $args );

		if ( $arr_posts->have_posts() ) {

			while ( $arr_posts->have_posts() ) {
				$arr_posts->the_post();

				get_template_part('template-parts/posts/content', 'primary');
			}
		}

		wp_reset_postdata();
		?>
</section>
