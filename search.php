<?php get_header(); ?>

    <div id="load_posts_container">

        <div class="cat-header">
            <div class="cat-desc">
                <p>Your results for...</p>
            </div>
            <div class="cat-name">
                <h1><?php echo get_search_query(); ?></h1>
            </div>
        </div>

        <div id="other-posts">
        <?php

        global $wp_query;

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $query_args = explode("&", $query_string);
        $search_query = array('posts_per_page' => 3, 'paged' => $paged);

        foreach ($query_args as $key => $string)
        {
            $query_split = explode("=", $string);
            $search_query[$query_split[0]] = urldecode($query_split[1]);
        }

        $search = new WP_Query($search_query);
        $total_results = $search->found_posts;
        

        if ( $search->have_posts() ) : while ($search->have_posts()) : $search->the_post(); ?>                                                                      

            <div class="home_post_box">

              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-gal-image',array('alt' => 'post image')); ?></a>

              <div class="home_post_title_cont">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </div><!--//home_post_title_cont-->

              <div class="home_post_desc">
                <p>
                  <?php $temp_arr_content = explode(" ",substr( strip_tags( strip_shortcodes( get_the_content() ) ),0,100 ) ); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...  '; ?>
                </p>
              </div><!--//home_post_desc-->
              <div class="main-post-link home-post-link">
                <a href="<?php the_permalink(); ?>">
                  <p>Read More</p>
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/read-more-arrow.png" />
                </a>
              </div>

            </div><!--//home_post_box-->

        <?php endwhile; else: ?>
        <div class="no-results-cont">
          <p class="no-posts-here">Sorry no matches.</p>
          <div class="search_cont" id="no-res-search">
            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
              <input type="text" name="s" id="s" value="Enter activity or destination here" onfocus="if ( this.value == 'Enter activity or destination here' ) { this.value = '' }" onblur="if (this.value == '') { this.value = 'Enter activity or destination here' }">
              <INPUT TYPE="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.png" class="search_icon" BORDER="0" ALT="Submit Form">
            </form>
          </div><!-- search_cont -->
        </div>
        
        <?php endif; ?>


        <?php wp_reset_query(); ?>       

        </div><!--end other-posts-->

        <div class="right-side" id="rs-bar2">
          <div class ="email-signup">
            <div class="email-header">
              <h3>Newsletter</h3>
            </div>
            <div class="email-text">
              <p>Register now to be the first to hear about exclusive offers, news and updates from Alamo Rent A Car.</p>
            </div>
            <div class="email-button">
              <a href="http://www.alamo.co.uk/Content/740/uk/EmailProgramme" target="_blank"><p>Enter here</p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/read-more-arrow.png" /></a>
            </div>
          </div>

          <div class="pop-posts">
            <div class="email-header">
              <h3>Popular posts</h3>
            </div>
            <?php
            if (function_exists('wpp_get_mostpopular'))
              wpp_get_mostpopular("limit=2&range='all'&stats_author=1&excerpt_length=100&stats_category=1&thumbnail_width=212&thumbnail_height=130&wpp_start='<div class=\"pop-container\">'&wpp_end=''&post_html='<div class=\"pop-post\"><a href={url}>{thumb}</a><div class=\"pop-title\"><a href={url}><h3>{text_title}</h3></a></div></div>'");
            ?>
          </div>
        </div>

        <div class="clear"></div>

        

        </div><!--//load_posts_container-->

        
        

        <div class="load_more_cont">
            <?php next_posts_link('<div class="load-more-button"><p>Load more</p></div>', 0); ?>
        </div><!--//load_more_cont-->

        

        

<script type="text/javascript">

// Ajax-fetching "Load more posts"

$('.load_more_cont a').live('click', function(e)
{

    e.preventDefault();

    $.ajax({

        type: "GET",

        url: $(this).attr('href') + '#main_container',

        dataType: "html",

        success: function(out)
    {
            result = $(out).find('#other-posts .home_post_box');

            nextlink = $(out).find('.load_more_cont a').attr('href');

      $('#other-posts').append(result);

            if (nextlink != undefined)
      {

                $('.load_more_cont a').attr('href', nextlink);

            }
      else
      {

                $('.load_more_cont').remove();
        $('#other-posts').append('<div class="clear"></div>');
            }

      if (nextlink != undefined)
      {
        $.get(nextlink, function(data)
        {
          if($(data + ":contains('home_post_box')") != '')
          {
            //alert('not found');
            $('#other-posts').append('<div class="clear"></div>');        
          }
        });
      }
        }
    });
});

</script>        

</div>        

<?php get_footer(); ?>            