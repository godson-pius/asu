<?php
$headerTitle = "contact";
require_once 'components/header.php';
?>


        <!--Start breadcrumb area paroller-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear"
                                data-aos-duration="1500">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Contact</li>
                                </ul>
                            </div>

                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Contact</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Google Map Style2 Area-->
        <section class="google-map-area">
            <div class="auto-container">
                <div class="contact-page-map-outer">
                    <!--Map Canvas-->
                    <div class="map-canvas" data-zoom="12" data-lat="51.509865" data-lng="-0.118092"
                        data-type="roadmap" data-hue="#ffc400" data-title="Envato"
                        data-icon-path="assets/images/icon/map-marker.png"
                        data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    </div>
                </div>
            </div>
        </section>
        <!--End Google Map Style2 Area-->



        <!--Start Main Contact Form Area-->
        <section class="main-contact-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-info-box">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h3>Get in Tocuh with us</h3>
                                </div>
                                <h2>Contact Us</h2>
                            </div>
                            <div class="text">
                                <p>You can send us a message if need be, and <br> we will reply as fast as possible.</p>
                            </div>

                            <div class="contact-info-list">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-telephone"></span>
                                        </div>

                                        <div class="text">
                                            <p>Have any questions?</p>
                                            <h4>Free: <a href="tel:123456789">+44 7438 263 290</a></h4>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-email-1"></span>
                                        </div>

                                        <div class="text">
                                            <p>Write a email</p>
                                            <h4><a href="mailto:yourmail@email.com">info@anambrastateunion.org.uk</a></h4>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin-1"></span>
                                        </div>

                                        <div class="text">
                                            <p>Visit our location</p>
                                            <h4>United Kingdom and Ireland</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-form contact-form--style2">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h3>Write Message</h3>
                                </div>
                                <h2>Send a Message</h2>
                            </div>

                            <form id="contact-form" name="contact_form" class="default-form2"
                                action="assets/inc/sendmail.php" method="post">
                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_name" id="formName"
                                                    placeholder="Full Name" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" name="form_email" id="formEmail"
                                                    placeholder="Email Address" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_phone" value="" id="formPhone"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_subject" value="" id="formSubject"
                                                    placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <textarea name="form_message" id="formMessage"
                                                    placeholder="Write a Message" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="button-box">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                type="hidden" value="">
                                            <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                                <span class="txt">send a message<i
                                                        class="icon-refresh arrow"></i></span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--End Main Contact Form Area-->








        <div class="bottom-parallax">
            <!--Start footer area -->
            <footer class="footer-area">
                <div class="footer-area-bg" style="background-image: url(assets/images/resources/footer-bg-1.png);">
                </div>

                <div class="footer-top">
                    <div class="container">
                        <div class="subscribe-content-box">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="subscribe-title">
                                        <div class="icon">
                                            <span class="icon-open-envelope"></span>
                                        </div>
                                        <div class="inner-title">
                                            <h3>Subscribe Now to Get<br> Latest Updates</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="subscribe-box">
                                        <form class="subscribe-form" action="#">
                                            <input type="email" name="email" placeholder="Email address">
                                            <button class="btn-one" type="submit">
                                                <span class="txt"><i class="icon-send"></i></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Start Footer-->
                <?php require_once 'components/footer.php'; ?>
                <!--End footer area-->
        </div>


        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="flaticon-up-arrow"></span>
        </button>

        <!-- search-popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><i class="icon-close"></i></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.php">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value=""
                                    placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn style-four">
                            </fieldset>
                        </div>
                    </form>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="index.php">waste</a></li>
                        <li><a href="index.php">Dumpster</a></li>
                        <li><a href="index.php">Zerowaste</a></li>
                        <li><a href="index.php">Garbage</a></li>
                        <li><a href="index.php">trash</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search-popup end -->
    </div>



    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.event.move.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.paroller.min.js"></script>
    <script src="assets/js/jquery-sidebar-content.js"></script>
    <script src="assets/js/knob.js"></script>
    <script src="assets/js/map-script.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/pagenav.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/wow.js"></script>

    <script src="assets/js/jquery-1color-switcher.min.js"></script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM&callback=initMap">
    </script>

    <!-- thm custom script -->
    <script src="assets/js/custom.js"></script>



</body>

</html>