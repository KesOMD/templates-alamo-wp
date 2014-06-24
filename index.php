<?php get_header(); ?>



        <div id="load_posts_container">



        <?php

        $category_ID = get_category_id('blog');

        $args = array(

                     'post_type' => 'post',

                     'posts_per_page' => 3,

                     'cat' => '-' . $category_ID,

                     'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)/*,

                     'offset' => 1*/

                     );            

        query_posts($args);

        $x = 0;

        

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        if($paged > 1) 

          $y = (0 + (($paged-1) * 3));

        else

          $y = 0;

        while (have_posts()) : the_post(); ?>                                                                      

            <div class="home_post_box">

              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-blog-image',array('alt' => 'post image')); ?></a>

              <div class="home_post_title_cont">
                <h1><?php the_title(); ?></h1>
              </div><!--//home_post_title_cont-->

              <div class="home_post_desc" id="home_post_desc<?php echo $y; ?>">
                <p>
                  <?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,100)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...  '; ?>
                </p>
              </div><!--//home_post_desc-->

            </div><!--//home_post_box-->

        

            <?php if($x == 2) { $x = -1; /*echo '<div class="clear"></div>';*/ } ?>

        

        <?php $x++; $y++; ?>

        <?php endwhile; ?>        

        <?php wp_reset_query(); ?>        

        

        <div class="clear"></div>

        

        </div><!--//load_posts_container-->

        

        <div class="load_more_cont">

            <p align="center"><span class="load_more_text"><?php next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/load-more-image.png" />') ?></span></p>

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