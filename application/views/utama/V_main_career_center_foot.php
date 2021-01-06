    <!-- start: FOOTER -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="newsletter">
                        <h4>Newsletter</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.
                        </p>
                        <form method="POST" action="#" id="newsletterForm">
                            <div class="input-group">
                                <input type="text" id="email" name="email" placeholder="Email Address" class="form-control">
                                <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    Go!
                                </button>
                            </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Latest Tweet</h4>
                    <div class="twitter" id="tweet">
                        <i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.
                        <a href="#" class="time">
                        12 Dec
                    </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-details">
                        <h4>Contact Us</h4>
                        <ul class="contact">
                            <li>
                                <p>
                                    <i class="fa fa-map-marker"></i><strong>Address:</strong> 1234 Street Name, City Name, United States
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-phone"></i><strong>Phone:</strong> (123) 456-7890
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-envelope"></i><strong>Email:</strong>
                                    <a href="mailto:mail@example.com">
                                    mail@example.com
                                </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <h4>Follow Us</h4>
                    <div class="social-icons">
                        <ul>
                            <li class="social-twitter tooltips" data-original-title="Twitter" data-placement="bottom">
                                <a target="_blank" href="http://www.twitter.com">
                                Twitter
                            </a>
                            </li>
                            <li class="social-facebook tooltips" data-original-title="Facebook" data-placement="bottom">
                                <a target="_blank" href="http://facebook.com" data-original-title="Facebook">
                                Facebook
                            </a>
                            </li>
                            <li class="social-linkedin tooltips" data-original-title="LinkedIn" data-placement="bottom">
                                <a target="_blank" href="http://linkedin.com" data-original-title="LinkedIn">
                                LinkedIn
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <a class="logo" href="index.html">
                        CLIP<i class="clip-clip"></i>ONE
                    </a>
                    </div>
                    <div class="col-md-7">
                        <p>
                            &copy; Copyright
                            <script>
                                document.write(new Date().getFullYear())
                            </script> by Clip-One. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <nav id="sub-menu">
                            <ul>
                                <li>
                                    <a href="#">
                                    FAQ's
                                </a>
                                </li>
                                <li>
                                    <a href="#">
                                    Sitemap
                                </a>
                                </li>
                                <li>
                                    <a href="#">
                                    Contact
                                </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a id="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- end: FOOTER -->

    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
        <script src="../../bower_components/respond/dest/respond.min.js"></script>
        <script src="../../bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <script src="../../bower_components/jquery-1.x/dist/jquery.min.js"></script>
        <![endif]-->
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/usr_career_center/bower_components/jquery/dist/jquery.min.js"></script>
    <!--<![endif]-->
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/usr_career_center/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/usr_career_center/bower_components/blockUI/jquery.blockUI.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/usr_career_center/bower_components/jquery.transit/jquery.transit.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/usr_career_center/bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/usr_career_center/bower_components/jquery_appear/jquery.appear.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/usr_career_center/bower_components/jquery.cookie/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/usr_career_center/assets/js/min/main.min.js"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script src="<?php echo base_url(); ?>lib_career_center/usr_career_center/bower_components/flexslider/jquery.flexslider-min.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
        jQuery(document).ready(function() {
            Main.init();
        });
    </script>
</body>

</html>