<?php get_header(); ?>

        

        <div class="blog-content">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php
                $images1 = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );

                $number_of_images = count($images1);
                debug_to_console( $number_of_images );
                ?>
                <?php if ($number_of_images > 1) { ?>
                <div class="flexslider" id="fs-post">
                    <ul class="slides">
                        <?php revconcept_get_images("$post->ID"); ?>
                    </ul>
                </div><!--end flexslider-->
                <?php } else { ?>
                <div class="main-post-image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php } ?>
                <div class="post-details">
                    <div class="share-container">
                        <?php echo do_shortcode('[ssba]'); ?>
                        <?php if( function_exists( 'pf_show_link' ) ) { echo pf_show_link(); } ?>
                    </div>
                    <h1><?php the_title(); ?></h1>
                </div>
                
                

                <div class="left_content">

                <?php echo get_the_content_with_format(); ?>

                </div><!--//left_content-->

                <?php  /* comments_template(); */ ?>

            <?php endwhile; else: ?>

                <h3>Sorry, no posts matched your criteria.</h3>

            <?php endif; ?>
        </div><!--//blog_left-->

        <div class="clear"></div>

        

<?php get_footer(); ?>            