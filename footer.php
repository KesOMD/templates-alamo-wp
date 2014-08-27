    </div><!--//content_container-->

    

    <div id="footer">

        <div class="footer_widgets_cont">

            <div class="footer-logo-cont">
                <div class="footer-logo">
                    <a>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/alamo_logo_213x96.png" class="logo" />
                    </a>
                    <p>2014 Alamo Rent a car</p>
                </div>
                
            </div>

            <div class="footer-links-cont">
                <div class="footer-links" id="fl-col1">
                    <a href="http://www.alamo.co.uk/" target="_blank" alt="Home"><p>Home</p></a>
                    <a href="http://aboutus.alamo.co.uk/" target="_blank" alt="About Us"><p>About Alamo</p></a>
                    <a href="http://www.alamo.co.uk/Content/740/uk/ContactUs" target="_blank" alt="Contact Us"><p>Contact us</p></a>
                </div>
                <div class="footer-links" id="fl-col2">
                    <a href="http://www.alamo.co.uk/helpfulinformation/gb" target="_blank" alt="Helpful Information"><p>Helpful information</p></a>
                    <a href="http://www.alamo.co.uk/affiliates" target="_blank" alt="Affiliates"><p>Affiliates</p></a>
                </div>
                <div class="footer-links" id="fl-col3">
                    <a href="http://www.alamo.co.uk/Content/740/uk/PrivacyPolicy" target="_blank" alt="Privacy Policy"><p>Privacy policy</p></a>
                    <a href="http://www.alamo.co.uk/Content/740/uk/CookiePolicy" target="_blank" alt="Car hire home"><p>Cookie policy</p></a>
                    <a href="http://www.alamo.co.uk/Content/740/uk/Sitemap" target="_blank" alt="Car hire home"><p>Sitemap</p></a>
                </div>
            </div>



            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Last') ) : ?>       
            <!--
            <div class="footer_box footer_box_last">

                <h3>Widget Footer</h3>

                <p>Please use widget to setup this text box. Please use widget to setup this text box. Please use widget to setup this text box. Please use widget to setup this text box.</p>

            </div>//footer_box-->            

            <?php endif; ?>

        </div><!--//footer_widgets_cont-->

    </div><!--//footer-->



</div><!--//main_container-->



<?php wp_footer(); ?>

</body>

</html>