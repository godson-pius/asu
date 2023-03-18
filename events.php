<?php
$headerTitle = "event";
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
                                    <li class="active">Events</li>
                                </ul>
                            </div>

                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Events</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Blog Page Three-->
        <section class="blog-page-three">
            <div class="container">

                <div class="row">
                    <div class="col-xl-8">
                        <div class="blog-content-box">


                        <?php
                            if ($events) {
                                foreach ($events as $event) {
                                    extract($event); ?>

                            <!--Start Single Blog Style3-->
                            <div class="single-blog-style1 single-blog-style1--instyle3">
                                <div class="single-blog-style1__inner">
                                    <div class="img-holder">
                                        <div class="inner">
                                        <div style="width: 770px; height: 420px; background-image: url(assets/images/events/<?= $event_img; ?>); background-position: center; background-size: cover;">
                                                    </div>
                                        </div>
                                        <div class="date-box">
                                                    <h6><?= date('d', strtotime($date)); ?><br> <span><?= date('M', strtotime($date)); ?></span></h6>
                                                </div>
                                    </div>
                                    <div class="text-holder">
                                        <ul class="meta-info">
                                            <li>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href="#">by Admin</a>
                                            </li>

                                            <li>
                                                <i class="fa fa-clock" aria-hidden="true"></i>
                                                <a href="#">Time: <?= $event_time; ?></a>
                                            </li>

                                            <li>
                                                <i class="fa fa-venue" aria-hidden="true"></i>
                                                <a href="#">Venue: <?= $event_venue; ?></a>
                                            </li>
                                        </ul>
                                        <div class="text-inner">
                                            <h3 class="blog-title">
                                                <a href="event-details?event=<?= $event_slug; ?>"><?= $event_title; ?></a>
                                            </h3>
                                        </div>
                                        <div class="text">
                                            <p><?= $event_desc; ?></p>
                                        </div>
                                        <div class="btn-box">
                                            <a class="btn-one" href="event-details?event=<?= $event_slug; ?>">
                                                <span class="txt">
                                                    Know more<i class="icon-refresh arrow"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Blog Style3-->
                            <?php } } ?>

                            <!-- Pagination -->
                            <!-- <div class="row">
                                <div class="col-xl-12">
                                    <ul class="styled-pagination clearfix">
                                        <li class="arrow prev"><a href="#"><span class="icon-left-arrow"></span></a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="arrow next"><a href="#"><span class="icon-right-arrow"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->

                        </div>
                    </div>

                    <!--Start Thm Sidebar Box-->
                    <div class="col-xl-4 col-lg-5">
                        <div class="thm-sidebar-box">
                            <!-- Search Bar -->
                            <!-- <div class="sidebar-search-box">
                                <form class="search-form" action="#">
                                    <input placeholder="Search" type="text">
                                    <button type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div> -->

                            <div class="single-sidebar-box">
                                <div class="sidebar-title">
                                    <h3>Recent Posts</h3>
                                </div>
                                <div class="sidebar-blog-post">
                                    <ul class="blog-post">

                                        <?php
                                            $recent_posts = EXECUTE_QUERY(SELECT_ALL_LIMIT("posts", "post_id", 0, 3));
                                            if ($recent_posts) {
                                                foreach ($recent_posts as $recent) {
                                                    extract($recent); ?>
                                        <li>
                                            <div class="inner">
                                                <div class="img-box">
                                                    <!-- 70 * 70 -->
                                                    <div style="width: 70px; height: 70px; background-image: url(assets/images/news/<?= $post_img; ?>); background-position: center; background-size: cover;">
                                                    </div>
                                                    <img src="assets/images/sidebar/news-1.jpg" alt="Awesome Image">
                                                    <div class="overlay-content">
                                                        <a href="news-details?news=<?= $post_slug; ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <div class="admin"><span class="icon-user"></span> by Admin</div>
                                                    <h4><a href="news-details?news=<?= $post_slug; ?>"><?= $post_title; ?></a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <?php } } ?>


                                    </ul>
                                </div>
                            </div>

                            <div class="single-sidebar-box">
                                <div class="sidebar-title">
                                    <h3>Categories</h3>
                                </div>
                                <ul class="sidebar-categories-box">
                                    <?php 
                                        if ($categories) {
                                            foreach ($categories as $category) {
                                                extract($category); ?>
                                                <li><a href=""><?= $cat_name; ?></a></li>
                                    <?php } } ?>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!--End Thm Sidebar Box-->
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
                <!--End Footer-->


                <div class="footer-bottom">
                    <div class="container">
                        <div class="bottom-inner">
                            <div class="copyright">
                                <p>Copyright &copy; 2022 <a href="index.php">Westo</a> All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </footer>
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