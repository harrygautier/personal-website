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
			$page_classes = array('home-class', 'another-class');
		}
		else {
			$page_classes = array('not-home-class');
		}

	?>

	<body <?php body_class($page_classes); //array passes in whatever class ?>>
		<header id="top">

			<nav class="navbar fixed-top navbar-expand-sm p-3 text-center text-white">
				<div class="container-fluid">

					<a class="navbar-brand" href="<?php	if (is_front_page()) : echo '#top';	else : echo get_home_url();	endif; ?>">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/brand/hg_logo_web_white.png" class="header-logo">



					</a>



					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#topFixedNavbar" aria-controls="topFixedNavbar" aria-expanded="false" aria-label="Toggle navigation">

						<div class="form-inline">
							<a class="nav-item ml-auto mr-2 text-hide">Menu</a>

							<div class="nav-toggler">
								<span class="icon-bar top-bar bg-light"></span>
								<span class="icon-bar middle-bar bg-light"></span>
								<span class="icon-bar bottom-bar bg-light"></span>
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
								// wp_nav_menu(array(
								// 	'theme_location'=>'primary',
								// 	'container'=> false,
								// 	'menu_class'=>'navbar-nav mx-auto text-white')
								// );
							?>

							<ul class="navbar-nav mx-auto">
								<li class="nav-item mx-2 my-2 my-sm-0"><a href="<?php if (is_front_page()) : echo '#work';	else : echo get_home_url() . '#work';	endif; ?>" class="nav-link">Work</a></li>
								<li class="nav-item mx-2 my-2 my-sm-0"><a href="<?php if (is_front_page()) : echo '#about';	else : echo get_home_url() . '#about';	endif; ?>" class="nav-link">About</a></li>
								<li class="nav-item mx-2 my-2 my-sm-0"><a href="<?php if (is_front_page()) : echo '#cv';	else : echo get_home_url() . '#cv';	endif; ?>" class="nav-link">CV</a></li>
								<li class="nav-item mx-2 my-2 my-sm-0"><a href="#contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>

		</header>

		<main>
		<div class="container-fluid body-main p-0">
