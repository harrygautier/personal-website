<!-- contact page template -->
<?php get_header(); ?>

<div class="container-fluid page-contact">
	<h1 class="page-title container">Contact</h1>
	
	<div class="container section-form">

		<!--
		<div class="contact-info">
			<a href="emailto:harrygautierdesign@gmail.com"><p>harrygautierdesign@gmail.com</p></a>		
			<a href="tel:+447902819990"><p>+44 7902 819990</p></a>
		</div>
		-->

		<?php
		if (have_posts()) {
			while(have_posts()) {
				the_post(); ?>
				<p><?php the_content(); ?></p>
			<?php
			}
		}

		?>
		
		
	</div>

</div>


<?php get_footer(); ?>