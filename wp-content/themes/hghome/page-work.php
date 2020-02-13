<!-- work page template -->
<?php get_header(); ?>



<div class="section-work">
	<h1 class="page-title container">My Projects</h1>
	
	<div class="row mx-auto mx-lg-4 px-lg-4">
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

				get_template_part('content', 'primary');
			}
		}

		wp_reset_postdata();
		?>
		
		<?php the_content(); ?>
		
	</div>
	
</div>

<?php get_footer(); ?>