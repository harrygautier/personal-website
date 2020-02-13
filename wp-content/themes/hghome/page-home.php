<!-- home page template -->
<?php get_header(); ?>

<section class="about container">

	<h1 class="about-title">Hi, I'm Harry Gautier.</h1>
	<p class="about-description">I'm a freelance designer specialising in <strong>brand identity</strong> &amp; <strong>web design</strong>. Based in Chester, I work with clients directly to help create a stronger looking brand and robust online presence.</p>
	<small class="about-quote">Art is created. Design is crafted.</small>
	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/brand/hg_signature_blue.png" class="about-signature">
	
</section>


<section class="work mx-md-4 px-md-4">
	<div class="row mx-auto mx-lg-4 px-lg-4">
		<?php

		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'orderby' => 'date',
			'order'   => 'DESC',
			'posts_per_page' => 2,
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
	<br>
	<br>
	<br>
</section>


<section class="services py-4">
	<div class="shadow"></div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="intro my-4 row justify-content-center mx-auto">
		<div class="col-12 col-lg-6">
			<h2>Services</h2>
			<p>As a designer, I love to offer new services to my clients and am open to any new ideas. Please see what I specialise in below - If it's not there, please feel free to contact me about anything digital.</p>
		</div>
	</div>
	<br>
	<div class="row my-4">
		<div class="col-xl-2 col-lg-1"></div>
		<div class="col-12 col-xl-4 col-lg-5 p-4 mx-2 mx-lg-0">
			<h4>Logo Design</h4>
			<p>Identifying your brand or company is a big deal. I can help to create a mark that will allow your customers and consumers to pinpoint you between your competitors.</p>
		</div>
		<div class="col-12 col-xl-4 col-lg-5 p-4 mx-2 mx-lg-0">
			<h4>Wordpress Development</h4>
			<p>A website is crucial for a brand and allows you as a vendor to send the right message to your consumers. I can work through what is needed from your ideal visitor and direct them through with less friction.</p>
		</div>
		<div class="col-xl-2 col-lg-1"></div>
		<div class="col-xl-2 col-lg-1"></div>
		<div class="col-12 col-xl-4 col-lg-5 p-4 mx-2 mx-lg-0">
			<h4>UI &amp; UX Design</h4>
			<p>Understanding the customer ensures that you can work out how they use an app or website. Reverse engineering the users need can help to reduce the time needed to achieve a specific goal.</p>
		</div>
		<div class="col-12 col-xl-4 col-lg-5 p-4 mx-2 mx-lg-0">
			<h4>Brand Identity</h4>
			<p>Unlike logo design, this embodies a whole identity for your brand or company. If you are just starting or require a rebrand, I can help to craft the look and feel you need to attract the relevant consumer.</p>
		</div>
		<div class="col-xl-2 col-lg-1"></div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
</section>


<section class="projects py-4">
	<br>
	<br>
	<br>
	
	<div class="intro my-4 row justify-content-center mx-auto">
		<div class="col-12 col-lg-6">
			<h2>Selected Work</h2>
			<p>Please see more of my work below. Focusing on brand identiry and web design, I strive to deliver products that align with my clients vision.</p>
		</div>
	</div>
		
	<div class="row mx-auto mx-lg-4 px-lg-4">
		<?php

		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'orderby' => 'date',
			'order'   => 'DESC',
			'posts_per_page' => 3,
			'offset' => 2
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

		
	
	<br>
	<br>
	<br>
</section>


<!-- gets the content for this page -->
<?php //the_content(); ?>



<?php get_footer(); ?>