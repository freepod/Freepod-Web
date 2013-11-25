<!DOCTYPE HTML>
<html>
<head>

	<title><?php bloginfo('name') ?> <?php if ( is_single() ) ?> <?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/gumby-girds.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-44944409-1', 'freepod.net');
	  ga('send', 'pageview');

	</script>

    <?php wp_head(); ?>

</head>
<body>

	<header>
		<nav class="navbar">
			<div class="center">
				<ul>
					<li><a href="<?php bloginfo('url'); ?>/category/podcasts">Podcasts</a></li>
					<li><a href="<?php bloginfo('url'); ?>/category/blog">Blog</a></li>
					<!-- <li><a href="<?php bloginfo('url'); ?>/live">Live</a></li>
					<li><a href="<?php bloginfo('url'); ?>/qui-sommes-nous">Qui sommes-nous ?</a></li>-->
				</ul>
			</div>
		</nav>

		<div class="logo-container center">

			<a href="<?php bloginfo('url'); ?>">
				<img src="<?php bloginfo('template_url'); ?>/images/logo-flat.png" src="Freepod logo" class="logo" />
			</a>
			
			<a href="https://plus.google.com/117087594698030037560">
				<img alt="Freepod sur Facebook" src="<?php bloginfo('template_url'); ?>/images/plus.png" class="facebook" />
			</a>


			<a href="https://www.facebook.com/freepod">
				<img alt="Freepod sur Facebook" src="<?php bloginfo('template_url'); ?>/images/facebook.png" class="facebook" />
			</a>

			<a href="https://twitter.com/freepod">
				<img alt="Freepod sur Twitter" src="<?php bloginfo('template_url'); ?>/images/twitter.png" class="twitter" />
			</a>

			<h2 class="slogan"><?php bloginfo('description') ?></h2>

		</div>
	</header>