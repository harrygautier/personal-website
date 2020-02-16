<!-- home page template -->
<?php get_header(); ?>

<section id="hero">
  <div class="container text-left pt-6 pb-4">
    <!--
    <h1 class="about-title text-blue pt-6">Hi, I'm Harry Gautier.</h1>
  	<p class="about-description mt-3">I'm a freelance designer specialising in <strong>brand identity</strong> &amp; <strong>web design</strong>. Based in Chester, I work with clients directly to help create a stronger looking brand and robust online presence.</p>
  	<small class="about-quote text-grey-2">Art is created. Design is crafted.</small>
  	<img class="about-signature my-3" src="<?php bloginfo('stylesheet_directory'); ?>/assets/brand/hg_signature_blue.png">
    -->

    <h1 class="text-white hero-title">Developer & Designer</h1>
    <p class="about-description mt-3 text-light">A web developer with a strong foundation in design.</p>


  </div>
</section>



<?php get_template_part("template-parts/component", "work"); ?>

<?php get_template_part("template-parts/component", "about"); ?>

<?php get_template_part("template-parts/component", "cv"); ?>


<!-- gets the content for this page -->
<?php //the_content(); ?>



<?php get_footer(); ?>
