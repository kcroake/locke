<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css">
		<?php wp_head(); ?>
    </head>
    <body>
        <!--[if lte IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <header>
        
            <div class="container clearfix">
                <div class="logo">
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/logo.svg"/>
                    </a>
                </div>
                <div class="menu-button">
	                <button>&#9776; Menu</button>
                </div>
                
                <?php if(is_front_page()) { ?>
                
                <?php 
	                $mainArgs = array(
		                'theme_location' => 'main-menu',
		                'menu' => '',
		                'container' => 'nav',
		                'depth' => 2
	                ); 
	                wp_nav_menu($mainArgs); ?>
				<?php } else { ?>
				   <?php 
	                $mainArgs2 = array(
		                'theme_location' => 'main-menu-inner',
		                'menu' => '',
		                'container' => 'nav',
		                'depth' => 2
	                ); 
	                wp_nav_menu($mainArgs2); ?>
				<?php } ?>
            </div>
        
    </header>