<?php
$headerTitle = "news";
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
                                    <li class="active">News</li>
                                </ul>
                            </div>

                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>News</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Blog Page Two-->
        <section class="blog-page-two">
            <div class="container">

                <div class="row">


                <?php
                            if ($news) {
                                foreach ($news as $new) {
                                    extract($new); 
                                    $comment_count = GET_TOTAL_WHERE("comments", "post_id", $post_id);
                                    ?>
                    <!--Start Single Blog Style2-->
                    <div class="col-xl-4">
                        <div class="single-blog-style1 single-blog-style1--instyle2">
                            <div class="single-blog-style1__inner">
                                <div class="img-holder">
                                    <div class="inner">
                                    <div style="width: 370px; height: 340px; background-image: url(assets/images/news/<?= $post_img; ?>); background-position: center; background-size: cover;">
                                                    </div>
                                        
                                    </div>
                                    <div class="date-box">
                                                    <h6><?= date('d', strtotime($created_at)); ?><br> <span><?= date('M', strtotime($created_at)); ?></span></h6>
                                                </div>
                                </div>
                                <div class="text-holder">
                                    <ul class="meta-info">
                                        <li>
                                            <i class="fa fa-user" aria-hidden="true"></i> <a href="#">by
                                                Admin</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i> <a href="#"><?= $comment_count; ?>
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <div class="text-inner">
                                                    <h3 class="blog-title">
                                                        <a href="news-details?news=<?= $post_slug; ?>"><?= substr($post_title, 0, 20); ?>...</a>
                                                    </h3>
                                                </div>
                                                <div class="text">
                                                    <p><?= substr($post_desc, 0, 130); ?>...</p>
                                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog Style2-->
                    <?php } } ?>

                </div>

                <!-- <div class="row">
                    <div class="col-xl-12">
                        <ul class="styled-pagination text-center clearfix">
                            <li class="arrow prev"><a href="#"><span class="icon-left-arrow"></span></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="arrow next"><a href="#"><span class="icon-right-arrow"></span></a></li>
                        </ul>
                    </div>
                </div> -->

            </div>
        </section>
        <!--End Blog Page Two-->



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
            <!--Start footer area -->
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