<!doctype html>
<html lang="en">
	<head>

		<meta charset="uft-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?php wp_title(''); ?></title>
		<?php wp_head(); //used to add functions plugin in header?>

		<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '399210314146320');
			fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=399210314146320&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->

		<!-- Google Analytics - Global Site Tag -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-89699287-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-89699287-1');
		</script>
		<!-- End Google Analytics - Global Site Tag -->


	</head>

	<?php


		if ( is_front_page()/*or is_home()*/ ) {
			$page_classes = array('home-class', 'another-class', 'bg-white', 'text-dark');
		}
		else {
			$page_classes = array('not-home-class', 'bg-white', 'text-dark');
		}

	?>

	<body <?php body_class($page_classes); //array passes in whatever class ?>>
		<header>

			<nav class="navbar fixed-top navbar-expand-sm text-center">
				<div class="container-fluid">

					<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/brand/hg_logo_web_blue.png" class="header-logo">
					</a>

					<div class="form-inline ml-auto">
						<div class="contact-icons d-flex flex-row justify-content-center align-content-center">
							<div class="animate animate-up mx-2">
								<a href="tel:+447902819990" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z" class=""></path></svg>
								</a>
							</div>
							<div class="animate animate-up mx-2">
								<a href="mailto:harrygautierdesign@gmail.com" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" class=""></path></svg>
								</a>
							</div>
							<div class="animate animate-up mx-2">
								<a class="border-bottom border-dark" type="button" name="download-cv">Download CV</a>
							</div>
						</div>

					</div>

				</div>
			</nav>


			<nav class="navbar fixed-top navbar-expand-sm text-center" style="top: 100px!important;">
				<div class="container-fluid">

					<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/brand/hg_logo_web_blue.png" class="header-logo">
					</a>



					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#topFixedNavbar" aria-controls="topFixedNavbar" aria-expanded="false" aria-label="Toggle navigation">

						<div class="form-inline">
							<a class="nav-item ml-auto mr-2 text-hide">Menu</a>

							<div class="nav-toggler">
								<span class="icon-bar top-bar blue-bar"></span>
								<span class="icon-bar middle-bar blue-bar"></span>
								<span class="icon-bar bottom-bar blue-bar"></span>
								<span class="sr-only">Menu</span>
							</div>
						</div>
					</button>


					<div class="collapse navbar-collapse" id="topFixedNavbar">
						<!--	comment out <ul> below for left aligned menu	-->
						<ul class="navbar-nav mx-auto"></ul>
						<div class="form-inline">
							<!-- css classes can be added in the menus section on wordpress-->
							<?php
								wp_nav_menu(array(
									'theme_location'=>'primary',
									'container'=> false,
									'menu_class'=>'navbar-nav mx-auto')
								);
							?>

							<div class="contact-icons d-flex flex-row justify-content-center align-content-center">
								<div class="animate animate-up mx-2">
									<a href="tel:+447902819990" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z" class=""></path></svg>
									</a>
								</div>
								<div class="animate animate-up mx-2">
									<a href="mailto:harrygautierdesign@gmail.com" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" class=""></path></svg>
									</a>
								</div>
								<div class="animate animate-up mx-2">
									<button class="btn btn-dark" type="button" name="download-cv">Download CV</button>
								</div>
							</div>

						</div>
					</div>
				</div>
			</nav>

		</header>

		<main>
		<div class="container-fluid body-main p-0">
