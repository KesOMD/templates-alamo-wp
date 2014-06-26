<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">

<head> 

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>

	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

<![endif]-->        

  <?php wp_head(); ?>

<!--  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>

  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js" type="text/javascript" charset="utf-8"></script>

  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.flexslider.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript">

  function show_post_desc(desc_num) {

      jQuery('#home_post_desc'+desc_num).css('display','block');

  }

  

  function hide_post_desc(desc_num) {

      jQuery('#home_post_desc'+desc_num).css('display','none');

  }

  </script>

  <script type="text/javascript" charset="utf-8">
  $(window).load(function()
  {
    $('.flexslider').flexslider({
      controlNav: "thumbnails"
    });
  });
  </script>

</head>

<body>



<?php $shortname = "simple_grid"; ?>



<div id="main_container">



    <div id="header">
      <div class="header-cont">
        <ul id="logo-nav">
          <li class="dropdown">
            <a id="header-logo">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/alamo_logo_213x96.png" class="logo" />
              <div class="menu-arrow">
                <div class="arrow-cont">
                  <img class="arr" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-arrow.png">
                </div>
              </div>
            </a>
            <!--
            <ul class="sub_navigation">
              <li><a href="http://www.jamesvillas.co.uk/" target="_blank" alt="James Villas main site"><div class="whi"><p>Main Site</p></div></a></li>
              <li><a href="http://www.jamesvillas.co.uk/information/about" target="_blank" alt="About Us"><div class="bl"><p>About Us</p></div></a></li>
              <li><a href="http://www.jamesvillas.co.uk/contact" target="_blank" alt="Contact Us"><div class="whi"><p>Contact Us</p></div></a></li>
              <li><a href="http://www.jamesvillas.co.uk/privacypolicy.cfm" target="_blank" alt="Privacy Police"><div class="bl"><p>Privacy Policy</p></div></a></li>
              <li><a href="http://www.jamesvillas.co.uk/cookie-policy" target="_blank" alt="Cookie Policy"><div class="whi"><p>Cookie Policy</p></div></a></li>
            </ul>
            -->
          </li>
        </ul>
        <div class="header-button-cont">

          <div class="header-button" id="home">
            <a href="<?php bloginfo('url'); ?>">
              <p>Travel Home</p>
            </a> 
          </div>

          <div class="header-button" id="act">
            <a href="<?php bloginfo('url'); ?>">
              <p>Activities</p>
            </a> 
          </div>

          <div class="header-button" id="dest">
            <a href="<?php bloginfo('url'); ?>">
              <p>Destinations</p>
            </a> 
          </div>

          <div class="header-button" id="search">
            <a href="<?php bloginfo('url'); ?>">
              <p>Search</p>
            </a> 
          </div>

          <div class="header-button" id="about">
            <a href="<?php bloginfo('url'); ?>">
              <p>About</p>
            </a> 
          </div>
        </div>
        
        <div class="clear"></div>
        <!--
        <div class="search_cont">
          <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            <input type="text" name="s" id="s" />
            <INPUT TYPE="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.png" class="search_icon" BORDER="0" ALT="Submit Form">
          </form>
        </div>//search_cont-->
      </div>
    </div><!--//header-->
    <div class="intro-cont">
      <h1>Alamo on the Road</h1>
      <h2>An essential guide to driving, travel and destinations worldwide.</h2>
    </div>
    <div id="content_container">