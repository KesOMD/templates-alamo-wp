<?php
/*
Template Name: Destinations Page
*/
get_header(); ?>

    <div class="error-content">
        <div class="about-text-cont">
            <div class="about-header">
                <h1>Destinations</h1>
            </div>
            <hr>
            <div class="destpage-container">
                <?php
                $cat_us = get_category_by_slug( 'united-states-2' );
                $cat_us_URL = get_category_link( $cat_us->term_id );
                ?>
                <a href="<?php echo $cat_us_URL; ?>" title="<?php echo $cat_us->name ?>"><h2><?php echo $cat_us->name ?></h2></a>
                <ul class="destpage-bycategories">
                <?php
                $categories = get_categories( array( 'parent' => $cat_us->term_id, 'hide_empty' => 0 ) );
                foreach ( $categories as $category )
                {
                    echo '<li class="cat-item"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . ' ' . '</a></li>';
                }
                ?>
                </ul>
            </div>
            <hr>
            <div class="destpage-container">
                <?php
                $cat_uk = get_category_by_slug( 'united-kingdom' );
                $cat_uk_URL = get_category_link( $cat_uk->term_id );
                ?>
                <a href="<?php echo $cat_uk_URL; ?>" title="<?php echo $cat_uk->name ?>"><h2><?php echo $cat_uk->name ?></h2></a>
                <ul class="destpage-bycategories">
                <?php
                $categories = get_categories( array( 'parent' => $cat_uk->term_id, 'hide_empty' => 0 ) );
                foreach ( $categories as $category )
                {
                    echo '<li class="cat-item"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . ' ' . '</a></li>';
                }
                ?>
                </ul>
            </div>
            <hr>
            <div class="destpage-container" id="other-dest">
                <?php
                $cat_oth = get_category_by_slug( 'other-destinations' );
                $cat_oth_URL = get_category_link( $cat_oth->term_id );
                ?>
                <a href="<?php echo $cat_oth_URL; ?>" title="<?php echo $cat_uk->name ?>"><h2><?php echo $cat_oth->name ?></h2></a>
            </div>
        </div>
    </div><!--//blog_left-->
    <div class="clear"></div>

        

<?php get_footer(); ?>            