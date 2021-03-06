<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=9"/>

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style-mobile.css" type="text/css">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style-tablet.css" type="text/css">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

  <link rel="icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
  
  <link rel="shortcut icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />

<!--[if lt IE 9]>

	<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

<![endif]-->        

  <?php wp_head(); ?>

<!--  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>-->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>

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
      directionNav: true,
      animation: "slide",
      animationLoop: false,
      slideshow: false,
      thumbCaptions: true,
      prevText: "",
      nextText: "",
      useCSS: true
    })
  });
  </script>

  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3415293-4']);
    _gaq.push(['_setDomainName', 'alamo.co.uk']);
      
      _gaq.push(['_trackPageview']);
  
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  </script>

  <link rel="alternate" type="application/rss+xml" title="Alamo » Feed RDF-RSS 1" href="<?php bloginfo('rdf_url'); ?>">
  <link rel="alternate" type="application/rss+xml" title="Alamo » Feed RSS 0.92" href="<?php bloginfo('rss_url'); ?>">
  <link rel="alternate" type="application/rss+xml" title="Alamo » Feed RSS 2" href="<?php bloginfo('rss2_url'); ?>">
  <link rel="alternate" type="application/rss+xml" title="Alamo » Feed Atom" href="<?php bloginfo('atom_url'); ?>">

</head>

<body>



<?php $shortname = "simple_grid"; ?>



<div id="main_container">



    <div id="header">
      <div class="header-cont">
        <ul id="logo-nav">
          <li class="dropdown">
            <a id="header-logo">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/alamo_logo_215x96.png" class="logo" />
              <div class="menu-arrow">
                <div class="arrow-cont">
                  <img class="arr" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-arrow.png">
                </div>
              </div>
            </a>
            
            <ul class="sub_navigation">
              <li><a href="http://www.alamo.co.uk/" target="_blank" alt="Car hire home"><p>Car hire home</p></a></li>
              <li><a href="http://www.alamo.co.uk/RatesAndReservation/740/uk/RatesReservation" target="_blank" alt="Reservations"><p>Reservations</p></a></li>
              <li><a href="http://www.alamo.co.uk/Content/740/uk/hotdeals" target="_blank" alt="Deals"><p>Deals</p></a></li>
              <li><a href="http://www.alamo.co.uk/Locations/740/uk" target="_blank" alt="Locations"><p>Locations</p></a></li>
              <li><a href="http://www.alamo.co.uk/Content/740/uk/Fleet/main?selectedCountry=GB" target="_blank" alt="Cars"><p>Cars</p></a></li>
              <li><a href="http://www.alamo.co.uk/Content/740/uk/ExistingReservation" target="_blank" alt="Amend reservation"><p>Amend reservation</p></a></li>
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
            <?php
            $aboutpage = get_page_by_title( "About Alamo", "ARRAY_N" );
            $aboutpageID = $aboutpage[0];
            $aboutpageURL = get_page_link( $aboutpageID );
            ?>
            <a href="<?php echo $aboutpageURL; ?>">
              <p>About</p>
            </a> 
          </div>
        </div>
        
        <div class="mob-logo-cont">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/alamo_logo_215x96.png" class="logo" alt="Alamo Car Hire"/>
          </a>
        </div>

        <div class="mob-button-cont">
          <div class="mob-button" id="mobile">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mob-menu-icon.png" />
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
        <div class="close-container" id="search-close">
          <div class="close-btn"></div>
        </div>
      </div><!-- search-dropdown -->

      <div class="dropdowns" id="activities-dropdown">
        <div class="act-container">
          <div class="grey-divide"></div>
          <div class="act-button">
            <a class="food" href="<?php echo get_tag_link(get_term_by( 'slug', 'food', 'post_tag' )->term_id ); ?>"><span>FOOD</span></a>
          </div>
          <div class="grey-divide"></div>
          <div class="act-button">
            <a class="adventure" href="<?php echo get_tag_link(get_term_by( 'slug', 'adventure', 'post_tag' )->term_id ); ?>"><span>ADVENTURE</span></a>
          </div>
          <div class="grey-divide"></div>
          <div class="act-button">
            <a class="sport" href="<?php echo get_tag_link(get_term_by( 'slug', 'sport', 'post_tag' )->term_id ); ?>"><span>SPORT</span></a>
          </div>
          <div class="grey-divide"></div>
          <div class="act-button">
            <a class="lifestyle" href="<?php echo get_tag_link(get_term_by( 'slug', 'lifestyle', 'post_tag' )->term_id ); ?>"><span>LIFESTYLE</span></a>
          </div>
          <div class="grey-divide"></div>
          <div class="act-button">
            <a class="entertainment" href="<?php echo get_tag_link(get_term_by( 'slug', 'entertainment', 'post_tag' )->term_id ); ?>"><span>ENTERTAINMENT</span></a>
          </div>
          <div class="grey-divide"></div>
          <div class="act-button">
            <a class="general" href="<?php echo get_tag_link(get_term_by( 'slug', 'general', 'post_tag' )->term_id ); ?>"><span>GENERAL</span></a>
          </div>
          <div class="grey-divide"></div>
        </div>
        <div class="close-container" id="act-close">
          <div class="close-btn"></div>
        </div>
      </div><!-- activities-dropdown -->

      <div class="dropdowns" id="dest-dropdown">
        <div class="dest-container">
          <div class="dest-divide"></div>
          <div class="dest-list-cont">
            <?php
            $cat_us = get_category_by_slug( 'united-states-2' );
            $cat_us_URL = get_category_link( $cat_us->term_id );
            ?>
            <a href="<?php echo $cat_us_URL; ?>" title="<?php echo $cat_us->name ?>"><p><?php echo $cat_us->name ?></p></a>
            <ul class="bycategories">
            <?php
            $categories = get_categories( array( 'parent' => $cat_us->term_id, 'hide_empty' => 0 ) );
            foreach ( $categories as $category )
            {
                echo '<li class="cat-item"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . ' ' . '</a></li>';
            }
            ?>
            </ul>
          </div>
          <div class="dest-divide"></div>
          <div class="dest-list-cont" id="uk-cat">
            <?php
            $cat_uk = get_category_by_slug( 'united-kingdom' );
            $cat_uk_URL = get_category_link( $cat_uk->term_id );
            ?>
            <a href="<?php echo $cat_uk_URL; ?>" title="<?php echo $cat_uk->name ?>"><p><?php echo $cat_uk->name ?></p></a>
            <ul class="bycategories">
            <?php
            $categories = get_categories( array( 'parent' => $cat_uk->term_id, 'hide_empty' => 0 ) );
            foreach ( $categories as $category )
            {
                echo '<li class="cat-item"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . ' ' . '</a></li>';
            }
            ?>
            </ul>
          </div>
          <div class="dest-divide"></div>
          <div class="dest-list-cont" id="oth-cat">
            <?php
            $cat_oth = get_category_by_slug( 'other-destinations' );
            $cat_oth_URL = get_category_link( $cat_oth->term_id );
            ?>
            <a href="<?php echo $cat_oth_URL; ?>" title="<?php echo $cat_uk->name ?>"><p><?php echo $cat_oth->name ?></p></a>
          </div>
          <div class="dest-divide"></div>
          <div class="close-container" id="dest-close">
            <div class="close-btn"></div>
          </div>
        </div><!-- dest-container -->
      </div><!-- dest-dropdown -->

      <div class="mob-dropdown" id="mobile-dd">
        <?php
        $actlistpage = get_page_by_title( "Activities", "ARRAY_N" );
        $actlistpageID = $actlistpage[0];
        $actlistpageURL = get_page_link( $actlistpageID );

        $destlistpage = get_page_by_title( "Destinations", "ARRAY_N" );
        $destlistpageID = $destlistpage[0];
        $destlistpageURL = get_page_link( $destlistpageID );
        ?>
        <ul>
          <li><a href="<?php bloginfo('url'); ?>"><p>Home</p></a></li>
          <li><a href="<?php echo $actlistpageURL; ?>"><p>Activities</p></a></li>
          <li><a href="<?php echo $destlistpageURL; ?>"><p>Destinations</p></a></li>
        </ul>
      </div><!-- Mobile Dropdown -->
    </div><!-- dropdown-container -->
    <?php
    if ( is_home() ) { ?>
    <div class="intro-cont">
      <h1>Alamo on the Road</h1>
      <h2>An essential guide to driving, travel and destinations worldwide.</h2>
    </div>
    <?php } ?>
    

    <div id="content_container">