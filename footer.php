    </div><!--//content_container-->

    

    <div id="footer">

        <div class="footer_widgets_cont">

            <div class="footer-logo-cont">
                <div class="footer-logo">
                    <a>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/alamo_logo_213x96.png" class="logo" />
                    </a>
                </div>
                <p>2014 Alamo Rent a car</p>
            </div>

            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Last') ) : ?>       

            <div class="footer_box footer_box_last">

                <h3>Widget Footer</h3>

                <p>Please use widget to setup this text box. Please use widget to setup this text box. Please use widget to setup this text box. Please use widget to setup this text box.</p>

            </div><!--//footer_box-->            

            <?php endif; ?>

        </div><!--//footer_widgets_cont-->

    </div><!--//footer-->



</div><!--//main_container-->



<?php wp_footer(); ?>

</body>

</html>