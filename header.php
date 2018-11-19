<!doctype html>
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-T9BD5MM');</script>
		<!-- End Google Tag Manager -->

		<!-- Google Tag Manager -->
		<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-W7B399X');</script> -->
		<!-- End Google Tag Manager -->

		<!-- Open graph tags -->
		<?= metaTags(); ?>

		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php
		// Inline Modernizr as described by the author:
		// https://github.com/Modernizr/Modernizr/issues/1204#issuecomment-142143094
		?>
		<script type="text/javascript">
			<?php //echo file_get_contents(__DIR__.'/assets/vendor/modernizr.js')?>
		</script>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-70870113-1', 'auto');
			ga('send', 'pageview');
		</script>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9BD5MM"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<div id="main" v-cloak>
			<template v-if='ready'>

			<div id="header">
				<main-navigation inline-template>
					<div class="main-navigation" :class="{ visible: menuVisible }">
						<a class="logo icon-kh-logo" href="<?php echo esc_url(home_url()); ?>">
							</a>

						<div class="menu-toggle" @click='menuToggle' :class="{ active: menuActive }">
							<div class="bars icon-hamburger" :class="{ active: menuActive }"></div>
						</div>

						<transition name="slide-in-down">
							<div class="mobile-links" v-if="menuActive">
								<div class="menu-toggle" @click='menuToggle' :class="{ active: menuActive }">
									<div class="bars icon-close white" :class="{ active: menuActive }"></div>
								</div>
								<div class="mobile-wrapper">
								<a class="mobile_logo icon-kh-logo white" href="<?php echo esc_url(home_url('/')); ?>">
								</a>
								<?php echo wp_nav_menu(array('menu' => 'primary')); ?>
							</div>
							</div>
						</transition>


						<div class="links">
							<?php echo wp_nav_menu(array('menu' => 'primary')); ?>
						</div>
						</div>
						</main-navigation>
						<cookies-popup inline-template>
							<div class='cookies-popup' v-if='visible'
								:class='{ moveDown: moveDown }'>
								<div class='cookies-content'>
									<p>We use cookies and Google Analytics to better understand how you use our website and mobile applications (our "Services"), to improve your user experience, and to better tailor our advertising. You can learn more about our use of cookies and data collection, including opt-out information, by reading our privacy policy, found <a href="/privacy">here</a>. By continuing to use our Services, you are consenting to our use of cookies and our data collection.</p>
									<div class="close-cookies icon-close" @click='accept'></div>
								</div>
							</div>
						</cookies-popup>
					</div>
