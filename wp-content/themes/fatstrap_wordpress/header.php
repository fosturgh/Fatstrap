<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	
	 <html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title('&mdash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        
        <!-- Add CSS Files Here -->
        
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.min.css" type="text/css" />
		
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
	    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/app.css" type="text/css" />
	    
	    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fc-webicons.css" type="text/css" />
		
		 <!-- Add Wordpress RSS Here -->
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		
		
		<!-- Add Java Script Files Here -->
		<script src="<?php bloginfo('template_url'); ?>/js/vendor/custom.modernizr.js"></script>
		
		
		 <!-- Add Wordpress Pnig Here -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        
        <!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
		<!-- Favicons -->
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-114x114.png">
        
     	<?php wp_head(); ?>
  
    </head>
  
<body <?php body_class(); ?>>
<header>
<div class="row">
<div class="large-12 columns">
<div class="logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" title="" alt="" /></a></div>
</div>
</div>
</header>	
<div class="row">
	
	<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1><a href="#">Top Bar Title </a></h1>
    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <ul class="left">
      <li class="divider"></li>
      <li class="active"><a href="#">Main Item 1</a></li>
      <li class="divider"></li>
      <li><a href="#">Main Item 2</a></li>
      <li class="divider"></li>
      <li class="has-dropdown"><a href="#">Main Item 3</a>

        <ul class="dropdown">
          <li class="has-dropdown"><a href="#">Dropdown Level 1a</a>

            <ul class="dropdown">
              <li><label>Dropdown Level 2 Label</label></li>
              <li><a href="#">Dropdown Level 2a</a></li>
              <li><a href="#">Dropdown Level 2b</a></li>
              <li class="has-dropdown"><a href="#">Dropdown Level 2c</a>

                <ul class="dropdown">
                  <li><label>Dropdown Level 3 Label</label></li>
                  <li><a href="#">Dropdown Level 3a</a></li>
                  <li><a href="#">Dropdown Level 3b</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Dropdown Level 3c</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown Level 2d</a></li>
              <li><a href="#">Dropdown Level 2e</a></li>
              <li><a href="#">Dropdown Level 2f</a></li>
            </ul>
          </li>
          <li><a href="#">Dropdown Level 1b</a></li>
          <li><a href="#">Dropdown Level 1c</a></li>
          <li class="divider"></li>
          <li><a href="#">Dropdown Level 1d</a></li>
          <li><a href="#">Dropdown Level 1e</a></li>
          <li><a href="#">Dropdown Level 1f</a></li>
          <li class="divider"></li>
          <li><a href="#">See all &rarr;</a></li>
        </ul>
      </li>
      <li class="divider"></li>
    </ul>

    <!-- Right Nav Section -->
    <ul class="right">
      <li class="divider hide-for-small"></li>
      <li class="has-dropdown"><a href="#">Main Item 4</a>

        <ul class="dropdown">
          <li><label>Dropdown Level 1 Label</label></li>
          <li class="has-dropdown"><a href="#" class="">Dropdown Level 1a</a>

            <ul class="dropdown">
              <li><a href="#">Dropdown Level 2a</a></li>
              <li><a href="#">Dropdown Level 2b</a></li>
              <li class="has-dropdown"><a href="#">Dropdown Level 2c</a>

                <ul class="dropdown">
                  <li><a href="#">Dropdown Level 3a</a></li>
                  <li><a href="#">Dropdown Level 3b</a></li>
                  <li><a href="#">Dropdown Level 3c</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown Level 2d</a></li>
              <li><a href="#">Dropdown Level 2e</a></li>
              <li><a href="#">Dropdown Level 2f</a></li>
            </ul>
          </li>
          <li><a href="#">Dropdown Level 1b</a></li>
          <li><a href="#">Dropdown Level 1c</a></li>
          <li class="divider"></li>
          <li><label>Dropdown Level 1 Label</label></li>
          <li><a href="#">Dropdown Level 1d</a></li>
          <li><a href="#">Dropdown Level 1e</a></li>
          <li><a href="#">Dropdown Level 1f</a></li>
          <li class="divider"></li>
          <li><a href="#">See all &rarr;</a></li>
        </ul>
      </li>
      <li class="divider"></li>
      <li class="has-form">
        <form>
          <div class="row collapse">
            <div class="small-8 columns">
              <input type="text">
            </div>
            <div class="small-4 columns">
              <a href="#" class="alert button">Search</a>
            </div>
          </div>
        </form>
      </li>
      <li class="divider show-for-small"></li>
      <li class="has-form">
        <a class="button" href="#">Button!</a>
      </li>
    </ul>
  </section>
</nav>
	
	<!-- Toget this to work with the wordpress 3.0+ menu system just delete the above demo code and uncomment the below -->
<!--<nav class="top-bar">
  <ul class="title-area">
   
    <li class="name">
      <h1><a href="#">Top Bar Title </a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    
    <?php wp_nav_menu(array('theme_location'=>'headertop-menu'));?>

  </section>
</nav>-->
</div>
<hr />
