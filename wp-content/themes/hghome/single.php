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

			<div class="page-title container my-4 py-4">
				<h5>
				<?php
					if($company_name) {
						echo $company_name;
					} ?>
				</h5>
				<h1><?php the_title(); ?></h1>
			</div>

			<figure class="p-relative overflow-hidden p-0 px-xl-4 pt-4 m-4">
				<img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); }?>" class="p-absolute">
			</figure>
			<br>
			<br>
			<br>


			<?php
			//only shows brief and tags if brief exists
			if($brief) { ?>
			<div class="intro row container mx-auto">
				<h3 class="col-12">Brief</h3>
				<div class="excerpt col-12 col-md-9">
					<p> <?php	echo $brief; ?>
					</p>
				</div>
				<div class="tags col-12 col-md-3">
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

					<?php
					if ($website_link) {
					?>
					<div class="website-link">
						<a target="_blank" href="<?php echo $website_link; ?>">Visit Website</a>
					</div>
					<?php } ?>
				</div>
			</div>
			<br>
			<br>
			<br>
			<?php } ?>


			<div class="single-content container">

				<?php the_content(); ?>

			</div>
			<br>

		<?php } } ?>

		</article>


  	<section class="more-work mt-4">
			<div class="row">
				<div class="col-12 col-md-1"></div>
  			<div class="col-12 col-md-8 my-4 mx-4">
					<h3 class="mb-0">More Selected Work</h3>
					<p class="text-bold">Suggested</p>
				</div>
			</div>

				<?php get_template_part("template-parts/more-work"); ?>

  	</section>



<?php get_footer(); ?>
