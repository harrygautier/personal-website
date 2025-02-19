<?php get_header(); ?>



<?php
if (have_posts()) {
	while(have_posts()) {
		the_post();

		//set custom fields to variables
		$company_name = get_field('company_name', $post->ID, true);
		$brief = get_field('brief', $post->ID, true);
		$website_link = get_field('website_link', $post->ID, true);
		?>

		<article class="container-fluid single">

			<div class="container my-4 py-4 px-2 off-screen off-screen-right">
				<h5>
				<?php
					if($company_name) {
						echo $company_name;
					} ?>
				</h5>
				<h1><?php the_title(); ?></h1>
			</div>

			<figure class="overflow-hidden p-0 px-xl-4 pt-4 m-4 mb-4 off-screen off-screen-bottom">
				<img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); }?>" class="position-block">

			</figure>
			<?php
			if ($website_link) { ?>
				<div class="container-fluid off-screen off-screen-left">
					<div class="website-link animate animate-left text-right pr-4 mx-xl-4 mb-5">
						<a class="border-bottom border-light pb-1" target="_blank" href="<?php echo $website_link; ?>">Visit Website</a>
					</div>
				</div>
			<?php }

			//only shows brief and tags if brief exists
			if($brief) { ?>

				<div class="intro container mx-auto mb-5">

					<div class="row d-flex flex-row flex-md-row-reverse justify-content-center my-6 off-screen off-screen-right">

						<div class="col-12 col-md-8 col-lg-6">
							<h2 class="mb-0">Project</h2>
							<div class="excerpt">
								<p> <?php	echo $brief; ?>
								</p>
							</div>
						</div>

						<div class="col-12 col-md-4 col-lg-3">

							<div class="tags mt-md-5 pt-3">
								<?php
								$posttags = get_the_tags();
								if ($posttags) {
									echo '<ul class="p-0 list-unstyled">';
									foreach($posttags as $tag) {
										echo '<li><h4>' .$tag->name. '</h4></li>';
									}
									echo '</ul>';
								}
								?>

							</div>
						</div>

					</div>


					</div>


				</div>
			<?php } ?>


			<div class="single-content container">

				<?php the_content(); ?>

			</div>
			<br>

		<?php } } ?>

		</article>




		<?php get_template_part("template-parts/component", "more-work"); ?>



<?php get_footer(); ?>
