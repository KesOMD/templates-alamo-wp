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
      controlNav: "thumbnails",
      slideshow: false
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
            
            <ul class="sub_navigation">
              <li><a href="http://www.somelink.co.uk/" target="_blank" alt="Car hire home"><p>Car hire home</p></a></li>
              <li><a href="http://www.somelink.co.uk/" target="_blank" alt="Reservations"><p>Reservations</p></a></li>
              <li><a href="http://www.somelink.co.uk/" target="_blank" alt="Deals"><p>Deals</p></a></li>
              <li><a href="http://www.somelink.co.uk/" target="_blank" alt="Locations"><p>Locations</p></a></li>
              <li><a href="http://www.somelink.co.uk/" target="_blank" alt="Cars"><p>Cars</p></a></li>
              <li><a href="http://www.somelink.co.uk/" target="_blank" alt="Amend reservation"><p>Amend reservation</p></a></li>
            </ul>

          </li>
        </ul>
        <div class="header-button-cont">
          <?php if ( is_home() ) { ?>
            <div class="header-button-home" id="home">
          <?php } else { ?>
            <div class="header-button" id="home">
          <?php } ?>    
            <a href="<?php bloginfo('url'); ?>">
              <p>Travel Home</p>
            </a> 
          </div>
          
          

          <div class="header-button" id="act">
            <a>
              <p>Activities</p>
            </a> 
          </div>

          <div class="header-button" id="dest">
            <a>
              <p>Destinations</p>
            </a> 
          </div>

          <div class="header-button" id="search">
            <a>
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
        
      </div><!-- header-button-cont -->

    </div><!--//header-->

    <div class="dropdown-container">
      <div class="dropdowns" id="search-dropdown">
        <div class="search_cont">
          <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            <input type="text" name="s" id="s" value="Enter activity or destination here" onfocus="if ( this.value == 'Enter activity or destination here' ) { this.value = '' }" onblur="if (this.value == '') { this.value = 'Enter activity or destination here' }">
            <INPUT TYPE="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.png" class="search_icon" BORDER="0" ALT="Submit Form">
          </form>
        </div><!-- search_cont -->
      </div><!-- search-dropdown -->

      <div class="dropdowns" id="activities-dropdown">
        <div class="act-container">
          <div class="grey-divide"></div>
          <div class="act-button">
            <a href="<?php echo get_tag_link(get_term_by( 'slug', 'food', 'post_tag' )->term_id ); ?>">Food</a>
          </div>
          <div class="grey-divide"></div>
          <div class="grey-divide"></div>
          <div class="grey-divide"></div>
          <div class="grey-divide"></div>
          <div class="grey-divide"></div>
          <div class="grey-divide"></div>
        </div>
      </div><!-- act-container -->
    </div><!-- activities-dropdown -->
    <?php
    if ( is_home() ) { ?>
    <div class="intro-cont">
      <h1>Alamo on the Road</h1>
      <h2>An essential guide to driving, travel and destinations worldwide.</h2>
    </div>
    <?php } ?>
    

    <div id="content_container">