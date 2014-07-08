<?php
/*
Template Name: Blank Page
*/
get_header(); ?>

        <div class="blank-content">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <div class="blank-text-cont">
                <div class="blank-header">
                    <h1><?php the_title(); ?></h1>
                </div>
                <hr>
                <div class="blank-text">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div><!--//blog_left-->

        

        <div class="clear"></div>

        

<?php get_footer(); ?>            