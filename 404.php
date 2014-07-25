<?php get_header(); ?>

        <div class="error-content">

            <div class="error-image-main">
                <div class="err-desk">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/404-image.jpg" />
                </div>
                <!--
                <div class="err-phone">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/404-image-phone.jpg" />
                </div>
                <div class="err-devices">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/404-image-devices.jpg" />
                </div>
                -->
            </div><!--//post-image-main-->

            <div class="error-text">
                <h1>404 error</h1>
                <p>Oops! The page you’re looking for can’t be found.</p>
                <p>You can use the back button in your browser to return to your previous page, or click <a href="<?php bloginfo('url'); ?>" title="Return Home">here</a> and we’ll take you back to the homepage of our blog.</p>
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
                        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'pop-thumb' ); ?></a>
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