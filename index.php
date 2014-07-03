<?php get_header(); ?>



        <div id="load_posts_container">

        <div class="main-post">
        <?php
        $my_query = new WP_Query('showposts=1');
        while ( $my_query->have_posts() ) : $my_query->the_post();
        $do_not_duplicate = $post->ID;

        $images1 = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );

        $number_of_images = count($images1);
        ?>

          <?php if ($number_of_images > 1) { ?>
            <div class="flexslider">
              <ul class="slides">
                <?php revconcept_get_images("$post->ID"); ?>
              </ul>
            </div><!--end flexslider-->
          <?php } else { ?>
            <div class="main-post-image">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
          <?php } ?>
            <div class="main-post-details">
              <div class="main-post-text">
                <div class="main-post-title">
                  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                </div>
                <div class="main-post-desc">
                  <p>
                    <?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,100)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...  '; ?>
                  </p>
                </div>
                <div class="main-post-link">
                  <a href="<?php the_permalink(); ?>">
                    <p>Read More</p>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/read-more-arrow.png" />
                  </a>
                </div>
              </div>
              <div class="main-post-tags">
                <?php the_tags('<div class="main-post-tag"><div class="main-tag-left"></div><div class="main-tag-right">','</div></div><div class="main-post-tag"><div class="main-tag-left"></div><div class="main-tag-right">','</div></div>'); ?>
              </div>
              
            </div>
          

        <?php endwhile; ?>
        </div><!--end main-post-->

        <div id="other-posts">
        <?php

        $category_ID = get_category_id('blog');

        $args = array(

                     'post_type' => 'post',

                     'posts_per_page' => 3,

                     'cat' => '-' . $category_ID,

                     'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)

                     );            

        query_posts($args);

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        

        if(have_posts()) : while (have_posts()) : the_post();
            if( $post->ID == $do_not_duplicate) continue;
        ?>                                                                      

            <div class="home_post_box">

              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-blog-image',array('alt' => 'post image')); ?></a>

              <div class="home_post_title_cont">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              </div><!--//home_post_title_cont-->

              <div class="home_post_desc">
                <p>
                  <?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,100)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...  '; ?>
                </p>
              </div><!--//home_post_desc-->
              <div class="main-post-link home-post-link">
                <a href="<?php the_permalink(); ?>">
                  <p>Read More</p>
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/read-more-arrow.png" />
                </a>
              </div>

            </div><!--//home_post_box-->

        <?php endwhile; endif; ?>        

        <?php wp_reset_query(); ?>        

        </div><!--end other-posts-->

        <div class="right-side" id="rs-bar">
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