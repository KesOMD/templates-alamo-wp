<?php
/*
Template Name: Activities Page
*/
get_header(); ?>

    <div class="error-content">
        <div class="about-text-cont">
            <div class="about-header">
                <h1>Activities</h1>
            </div>
            <hr>
            <div class="actpage-container">
                <div class="act-button">
                    <a class="food" href="<?php echo get_tag_link(get_term_by( 'slug', 'food', 'post_tag' )->term_id ); ?>"><span>Food</span></a>
                </div>
                <div class="act-button">
                    <a class="adventure" href="<?php echo get_tag_link(get_term_by( 'slug', 'adventure', 'post_tag' )->term_id ); ?>"><span>Adventure</span></a>
                </div>
                <div class="act-button">
                    <a class="sport" href="<?php echo get_tag_link(get_term_by( 'slug', 'sport', 'post_tag' )->term_id ); ?>"><span>Sport</span></a>
                </div>
                <div class="act-button">
                    <a class="lifestyle" href="<?php echo get_tag_link(get_term_by( 'slug', 'lifestyle', 'post_tag' )->term_id ); ?>"><span>Lifestyle</span></a>
                </div>
                <div class="act-button">
                    <a class="entertainment" href="<?php echo get_tag_link(get_term_by( 'slug', 'entertainment', 'post_tag' )->term_id ); ?>"><span>Entertainment</span></a>
                </div>
                <div class="act-button">
                    <a class="general" href="<?php echo get_tag_link(get_term_by( 'slug', 'general', 'post_tag' )->term_id ); ?>"><span>General</span></a>
                </div>
            </div>
        </div>
    </div><!--//blog_left-->
    <div class="clear"></div>

        

<?php get_footer(); ?>