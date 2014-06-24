<?php get_header(); ?>



        <div id="load_posts_container">



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
        

        if(have_posts()) : while (have_posts()) : the_post(); ?>                                                                      

            <div class="home_post_box">

              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-blog-image',array('alt' => 'post image')); ?></a>

              <div class="home_post_title_cont">
                <h1><?php the_title(); ?></h1>
              </div><!--//home_post_title_cont-->

              <div class="home_post_desc">
                <p>
                  <?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,100)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...  '; ?>
                </p>
              </div><!--//home_post_desc-->

            </div><!--//home_post_box-->

        <?php endwhile; endif; ?>        

        <?php wp_reset_query(); ?>        

        

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
			result = $(out).find('#load_posts_container .home_post_box');

			nextlink = $(out).find('.load_more_cont a').attr('href');

      $('#load_posts_container').append(result);

			if (nextlink != undefined)
      {

				$('.load_more_cont a').attr('href', nextlink);

			}
      else
      {

				$('.load_more_cont').remove();
        $('#load_posts_container').append('<div class="clear"></div>');
			}

      if (nextlink != undefined)
      {
        $.get(nextlink, function(data)
        {
          if($(data + ":contains('home_post_box')") != '')
          {
            //alert('not found');
            $('#load_posts_container').append('<div class="clear"></div>');        
          }
        });
      }
		}
	});
});

</script>        

        

<?php get_footer(); ?>            