<?php
/*
Template Name: About Page
*/
get_header(); ?>

        <div class="error-content">

            <div class="error-image-main">
                <div class="err-desk">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/about-us-image.jpg" />
                </div>
                <!--
                <div class="err-phone">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/404-image-phone.jpg" />
                </div>
                <div class="err-devices">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/404-image-devices.jpg" />
                </div>
                -->
            </div><!--//error-image-main-->
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <div class="about-text-cont">
                <div class="about-header">
                    <h1><?php the_title(); ?></h1>
                </div>
                <hr>
                <div class="about-text">
                    <?php the_content(); ?>
                </div>
                <hr>
            </div>
            <?php endwhile; endif; ?>
            <div class="author-list-cont">
                <h2>Check out our Authors</h2>
                <ul class="author-list">
                    <?php wp_list_authors(); ?>
                </ul>
                <hr>
            </div>
            <div class="recent-post-cont" id="error-related">
                <h2>Most recent posts</h2>
                <?php
                $a = 0;
                $counter = 3;
                $recentPosts = new WP_Query();
                $recentPosts->query('showposts=3');
                ?>
                <?php while ( $recentPosts->have_posts() ) : $recentPosts->the_post(); ?>
                <div id="rp-pos<?php echo $a++ ?>" class="recent-post">
                    <div class="recent-image">
                        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'post-gal-image' ); ?></a>
                    </div>
                    <div class="recent-text">
                        <h3><a href="<?php the_permalink() ?>" rel="bookmark">
                            <?php
                            $post_title = get_the_title();
                            $char_count = mb_strlen($post_title);

                            //Count the amount of characters in the title and trim if too long
                            if ($char_count < 40)
                            {
                                echo get_the_title();
                                    
                            }
                            else
                            {
                                $temp_arr_content = explode(" ",substr(strip_tags(get_the_title()),0,30)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...';
                            }

                            ?>
                        </a></h3>
                    </div>
                </div>
                <div class="v-divider" id="v-pos<?php echo $a ?>"></div>
                <?php endwhile ?>
            </div>
        </div><!--//blog_left-->

        

        <div class="clear"></div>

        

<?php get_footer(); ?>            