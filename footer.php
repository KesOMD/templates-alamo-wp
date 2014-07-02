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

            <div class="footer-links-cont">
                <div class="footer-links" id="fl-col1">
                    <a href="http://www.alamo.co.uk/" target="_blank" alt="Home"><p>HOME</p></a>
                    <a href="http://aboutus.alamo.co.uk/" target="_blank" alt="About Us"><p>ABOUT US</p></a>
                    <a href="http://www.alamo.co.uk/Content/740/uk/ContactUs" target="_blank" alt="Contact Us"><p>CONTACT US</p></a>
                </div>
                <div class="footer-links" id="fl-col2">
                    <a href="http://www.alamo.co.uk/helpfulinformation/gb" target="_blank" alt="Helpful Information"><p>HELPFUL INFORMATION</p></a>
                    <a href="http://www.alamo.co.uk/affiliates" target="_blank" alt="Affiliates"><p>AFFILIATES</p></a>
                </div>
                <div class="footer-links" id="fl-col3">
                    <a href="http://www.alamo.co.uk/Content/740/uk/PrivacyPolicy" target="_blank" alt="Privacy Policy"><p>PRIVACY POLICY</p></a>
                    <a href="http://www.alamo.co.uk/Content/740/uk/CookiePolicy" target="_blank" alt="Car hire home"><p>COOKIE POLICY</p></a>
                    <a href="http://www.alamo.co.uk/Content/740/uk/Sitemap" target="_blank" alt="Car hire home"><p>SITEMAP</p></a>
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