<!DOCTYPE html>

<html lang="sr" xmlns:fb="http://www.facebook.com/2008/fbml">

    <head>

        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

        <meta charset="utf-8">

        <meta name="description" content="Photon Tide">

        <link rel="Shortcut Icon" type="image/ico" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css" media="screen">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/queries/netbooks-tablets.css" type="text/css" media="screen and (max-width: 800px)" />

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5.js"></script>
		
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>		
        <!--[if IE]>

            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

            <style type="text/css">

                .clear {

                    zoom: 1;

                    display: block;

                }

            </style>

        <![endif]-->            

        <!--[if IE 7]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie/ie7.css" type="text/css" media="screen"><![endif]-->

        <!--[if lt IE 7]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie/ie6.css" type="text/css" media="screen"><![endif]-->



        <!-- ALL jQuery Tools. No jQuery library -->
		<script src="http://cdn.jquerytools.org/1.2.5/all/jquery.tools.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/jquery-tools/scrollable-horizontal.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/jquery-tools/scrollable-buttons.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/jquery-tools/scrollable-navigator.css" />    
        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>           
        <!-- Google Analytics -->
        <script type="text/javascript">

		  var _gaq = _gaq || [];

		  _gaq.push(['_setAccount', 'UA-17687919-1']);

		  _gaq.push(['_trackPageview']);

		  (function() {

			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>		
		<?php wp_head(); ?>		
    </head>

    <body <?php body_class(); ?>>

    <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=104642952941608&amp;xfbml=1"></script>

    	<header id="hd">

                <div class="hd-wrap">

                    <h1 id="logo"><a href="<?php echo get_option('home'); ?>/"></a></h1>

                    <nav class="socialNav">

                    	<ul>



                        	<li><a href="http://www.facebook.com/pages/Photon-Tide/132565616194"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" width="32" height="32" alt="Facebook"></a></li>



                            <li><a href="http://twitter.com/photontide"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" width="32" height="32" alt="Twitter"></a></li>



                            <li><a href="http://www.youtube.com/photontide"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" width="32" height="32" alt="Youtube"></a></li>                            



                        </ul>



                    </nav>



                    <nav class="mainNav">



                    	<ul>



                        	<li><a href="<?php echo get_option('home'); ?>/">Naslovna</a></li>



                            <li><a href="<?php bloginfo('url'); ?>/forum/">Forum</a></li>



                            <li><a href="<?php bloginfo('url'); ?>/?cat=3">Članci</a></li>



                            <li><a href="<?php bloginfo('url'); ?>/?cat=4">Radionica</a></li>



                        </ul>



                        <form id="searchform" method="get" action="<?php bloginfo('url'); ?>/index.php">



                          <fieldset class="search-box">



                            



                            <input type="text" size="10" class="search-field" value="Pretraži" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Pretraži':this.value;" id="s" name="s" />



                            <input type="submit" class="search-button" value="" id="" name="" />                            



                          </fieldset>



                        </form>



                    </nav>



                </div>



            </header>



        <div id="wrap">   