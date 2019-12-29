<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/hthlogo_small.png">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->



	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



	<?php wp_get_archives('type=monthly&format=link'); ?>

	<?php //comments_popup_script(); // off by default ?>

	<?php wp_head(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>

<body>
    <div class="allcontainer">
<section id="top">
            <div class="container">
                <div class="pull-left">
                    <a class="bold" href="/"><img src="<?php bloginfo('template_directory'); ?>/images/hthlogo_small.png"> <span>Help The Homeless Worldwide</span></a>
                </div>
                <div class="pull-right">
					<a href="/">HOME</a>     
                    <a href="/partners">PARTNERS</a>     
                    <a href="/product-category/donate">DONATE TODAY!</a>     
                    <!--<a href="/store">STORE</a>   -->
                    <a href="/my-story">YOUR STORY</a>
					<a href="/events">NEWS & EVENTS</a>
					<a href="https://hthcoin.github.io/web">HTH COIN</a>
                    <a href="/about">ABOUT</a>
                </div>
            </div>
        
        </section>
