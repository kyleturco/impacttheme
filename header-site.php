<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

  <head>
    <meta charset="utf-8">

    <?php // force Internet Explorer to use the latest rendering engine available ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title(''); ?></title>

    <?php // mobile meta (hooray!) ?>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/collide-favicon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <?php // or, set /favicon.ico for IE10 win ?>
    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- Style related CDNs -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <?php // wordpress head functions ?>
    <?php wp_head(); ?>
    <?php // end of wordpress head ?>

    <?php // drop Google Analytics Here ?>
    <?php // end analytics ?>

  </head>
  <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <div id="container">
      <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <?php // if you'd like to use the site description you can un-comment it below ?>
        <?php // bloginfo('description'); ?>

        <nav id="site-nav-inner" class="navbar navbar-default navbar-fixed-top" id="site-header" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="<?php echo home_url(); ?>" rel="nofollow">
              <img class="site-logo" itemscope itemtype="http://schema.org/Organization" src="<?php echo get_template_directory_uri(); ?>/library/images/collide-logo-blue.png" width="300px">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="nav navbar-nav navbar-right" role="tablist" id="myTab">
              <li class="menu-tab"><a class="header-link-inner" href="<?php echo home_url(); ?>/#home-services-section">Services</a></li>
              <li class="menu-tab"><a class="header-link-inner" href="<?php echo home_url(); ?>/#about-section">About</a></li>
              <li class="menu-tab"><a class="header-link-inner" href="<?php echo home_url(); ?>/#team-section">Team</a></li>
              <li class="menu-tab"><a class="header-link-inner" href="<?php echo home_url(); ?>/#contact-section">Contact Us</a></li>
            </ul>
          </div>
        </nav>
      </header>
