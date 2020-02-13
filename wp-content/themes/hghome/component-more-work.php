<div class="row mx-auto my-4 py-4">

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

			get_template_part('content', 'secondary');
		}
	}

	wp_reset_postdata();
	?>

</div>