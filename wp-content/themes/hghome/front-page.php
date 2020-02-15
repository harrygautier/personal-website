<!-- home page template -->
<?php get_header(); ?>

<section class="about">
  <div class="container">

    <h1 class="about-title">Hi, I'm Harry Gautier.</h1>
  	<p class="about-description">I'm a freelance designer specialising in <strong>brand identity</strong> &amp; <strong>web design</strong>. Based in Chester, I work with clients directly to help create a stronger looking brand and robust online presence.</p>
  	<small class="about-quote">Art is created. Design is crafted.</small>
  	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/brand/hg_signature_blue.png" class="about-signature">

  </div>
</section>


<section class="work">
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



<!-- gets the content for this page -->
<?php //the_content(); ?>



<?php get_footer(); ?>
