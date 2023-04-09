<?php
$headerTitle = "about";
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
                                    <li class="active">Sites and Sounds</li>
                                </ul>
                            </div>

                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Sites and Sounds</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Blog Page Three-->
        <section class="service-style2-area">
    <div class="gray-bg"></div>
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h3>Anambra State Union Uk</h3>
            </div>
            <h2>Sites and Sounds</h2>
        </div>
        <div class="row">

            <?php 
                if ($sites) {
                    foreach ($sites as $site) {
                        extract($site); 
                        $path = pathinfo("assets/sites/$site");
                        $ext = $path['extension'];  ?>

                        <div class="col-xl-4 col-lg-4">
                            <div class="single-service-style2">
                                <div class="">
                                    <?php 
                                        if ($ext == "jpg" || $ext == "jpeg" || $ext == "png" || $ext == "gif" || $ext == "bmp") { ?>
                                    <!-- <img src="assets/images/gallery/24.jpg" alt=""> -->
                                        <div style="width: 370px; height: 255px; background-image: url(assets/sites/<?= $site; ?>); background-position: center; background-size: cover;">
                                        </div>
                                        <?php } else if ($ext == "mp3" || $ext == "wav") { ?>
                                            <audio src="assets/sites/<?= $site; ?>" width="370" height="255" controls></audio>
                                        <?php } else if ($ext == "mp4" || $ext == "mkv") { ?>
                                            <video src="assets/sites/<?= $site; ?>" width="370" height="255" controls></video>
                                        <?php } ?>
                                </div>
                                <div class="text-holder text-center">
                                    <h3><a href=""><?= $site_desc; ?></a></h3>
                                </div>
                            </div>
                        </div>

            <?php } } ?>

        </div>
    </div>
</section>
        <!--End Blog Page Three-->



<!--Start slogan area-->
<section class="slogan-area">
    <div class="container">
        <div class="row">

            <div class="col-xl-5 col-lg-12">
                <div class="phone-number-box2">
                    <div class="icon">
                        <span class="icon-phone-ringing"></span>
                    </div>
                    <div class="phone">
                        <p>Have any questions?</p>
                        <a href="tel:+447438263290">+44 7438 263 290</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12">
                <div class="slogan-text-box">
                    
                </div>
            </div>
            <div class="col-xl-3 col-lg-12">
                <div class="slogan-btn-box">
                    <a class="btn-one" href="contact">
                                <span class="txt">
                                    Contact Us<i class="icon-phone-ringing arrow"></i>
                                </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End slogan area-->


        <div class="bottom-parallax">
                <!--Start Footer-->
                <?php require_once 'components/footer.php'; ?>
                <!--End Footer-->
        </div>


        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="flaticon-up-arrow"></span>
        </button>

        <!-- search-popup -->
        <!-- <div id="search-popup" class="search-popup">
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
        </div> -->
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