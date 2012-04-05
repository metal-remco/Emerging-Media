<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <!-- Zoekmachine optimalisatie (SEO) -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="nl" />

    <title><?php wp_title('&raquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="Weblog van De Zware Jongens. Emerging Media. Hogeschool Rotterdam." />
    <meta name="keywords" content="De Zware Jongens, Emerging Media, Hogeschool Rotterdam" />

    <!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/style.css" />

    <!-- Favicons -->
    <link href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico" type="image/x-icon" rel="shortcut icon"  />
    <link href="<?php bloginfo('template_directory'); ?>/assets/images/favicon-ios.png" rel="apple-touch-icon-precomposed" />
    
<?php wp_head(); ?>

</head>

<body>

    <!--[if lte IE 6]>
        <p>U gebruikt Internet Explorer 6, wij ondersteunen deze browser niet! Schakel over naar een andere browser of accepteer dat dit blog er niet optimaal uitziet.</p>
    <![endif]-->

	<div id="container">
    
    	<div id="header">
                
        	<div id="navigation">
            
            	<div id="navigation-container">
                            
                    <ul id="menu">
                        <li<?php if(is_front_page()): echo ' class="current_page_item"'; endif; ?>><a href="<?php bloginfo('wpurl'); ?>" title="<?php bloginfo('name'); ?>">Home</a></li>
						<?php wp_list_pages( array('title_li'=>'','link_before'=>'<span class="seperator">&nbsp;/&nbsp;</span>') ); ?>
                    </ul>                
    
                    <div id="search">
                        <?php get_search_form(); ?>
                    </div>
                    
                    <div class="clear"></div>
                    
                </div>
            
            </div><!-- navigation -->
            
            <div id="header-widgets" class="radius">
            
                <ul id="header-widgets-panel" class="radius">
                
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(2)): echo '<li>Widget Fout</li>'; endif; ?>
                    <div id="header-switch-panel"></div>
    
                </ul><!-- header-widgets-panel: fixed -->
            
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(1)): echo '<li>Widget Fout</li>'; endif; ?>
                <div id="header-switch"></div>

            </div><!-- header-widgets -->
                                
            <div class="clear"></div>
            
        </div><!-- header -->
        
        <!-- Fixed -->
        
            <a href="<?php bloginfo('wpurl'); ?>" title="<?php bloginfo('name'); ?>" id="logo">
                <img id="logo" src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" width="180" height="180" alt="<?php bloginfo('name'); ?>" />
            </a>
            <div id="header-arrow"></div>
        
        <!-- Fixed -->
        
        <div id="breadcrumbs">
        
			<p>U bevindt zich hier: <?php if(function_exists('bcn_display')) { bcn_display(); } ?></p>
            
        </div>
