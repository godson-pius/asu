<?php require_once 'manager/prepared/prepared.php'; 

    // For News - Index page
    $news = EXECUTE_QUERY(SELECT_ALL("posts", "post_id"));

    // For Events - Events page
    $events = EXECUTE_QUERY(SELECT_ALL("events", "event_id"));

    // For Devotionals - Devotional page
    $devotions = EXECUTE_QUERY(SELECT_ALL("devotions", "devotion_id"));

    // For single devotions - index page
    $single_devotions = EXECUTE_QUERY(SELECT_ALL_LIMIT("devotions", "devotion_id", 0, 1));

    // For all categories
    $categories = EXECUTE_QUERY(SELECT_ALL("categories", "cat_id"));

    // For all galleries
    $galleries = EXECUTE_QUERY(SELECT_ALL("galleries", "gallery_id"));

    // For limited gallery selection
    $latest_galleries = EXECUTE_QUERY(SELECT_ALL_LIMIT("galleries", "gallery_id", 0, 3));

    // For all sites and sounds
    $sites = EXECUTE_QUERY(SELECT_ALL("sites", "site_id"));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Anambra State Union - Welcome</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom-animate.css">
    <link rel="stylesheet" href="assets/css/fancybox.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/imp.css">
    <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/rtl.css">
    <link rel="stylesheet" href="assets/css/scrollbar.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">

    <!-- Module css -->
    <link rel="stylesheet" href="assets/css/module-css/header-section.css">
    <link rel="stylesheet" href="assets/css/module-css/banner-section.css">
    <link rel="stylesheet" href="assets/css/module-css/about-section.css">
    <link rel="stylesheet" href="assets/css/module-css/blog-section.css">
    <link rel="stylesheet" href="assets/css/module-css/fact-counter-section.css">
    <link rel="stylesheet" href="assets/css/module-css/faq-section.css">
    <link rel="stylesheet" href="assets/css/module-css/contact-page.css">
    <link rel="stylesheet" href="assets/css/module-css/breadcrumb-section.css">
    <link rel="stylesheet" href="assets/css/module-css/team-section.css">
    <link rel="stylesheet" href="assets/css/module-css/partner-section.css">
    <link rel="stylesheet" href="assets/css/module-css/testimonial-section.css">
    <link rel="stylesheet" href="assets/css/module-css/services-section.css">
    <link rel="stylesheet" href="assets/css/module-css/footer-section.css">

    <link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/resources/logo.png">
    <link rel="icon" type="image/png" href="assets/images/resources/logo.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/images/resources/logo.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

</head>


<body>

<div class="boxed_wrapper ltr">

    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">Preloader Close</div>
        </div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

    <!-- page-direction -->
    <div class="page_direction">
        <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
        <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
    </div>
    <!-- page-direction end -->

    <!-- switcher menu -->
    <div class="switcher">
        <div class="switch_btn">
            <button><img src="assets/images/icon/color-palette.png" alt="Color Palette"> </button>
        </div>
        <div class="switch_menu">
            <!-- color changer -->
            <div class="switcher_container">
                <ul id="styleOptions" title="switch styling">
                    <li>
                        <a href="javascript: void(0)" data-theme="blue" class="blue-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end switcher menu -->


    <!-- Main header-->
    <header class="main-header header-style-one">

        <!--Start Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="header-top__left">
                        <div class="header-contact-info-style1">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text">
                                        <p>United Kingdom  & Ireland</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:info@anambrastateunion.org.uk ">info@anambrastateunion.org.uk </a></p>
                                    </div>
                                </li>
<!--                                <li>-->
<!--                                    <div class="icon">-->
<!--                                        <span class="icon-time"></span>-->
<!--                                    </div>-->
<!--                                    <div class="text">-->
<!--                                        <p>Mon - Sat 9:00 am to 6:00 pm</p>-->
<!--                                    </div>-->
<!--                                </li>-->

                            </ul>
                        </div>
                    </div>

                    <div class="header-top__right">
                        <div class="header-button-style1">
                            <a class="btn-one" href="member/register">
                                    <span class="txt">
                                        New member? Register<i class="icon-refresh arrow"></i>
                                    </span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End Header Top-->

        <!--Start Header-->
        <div class="header">
            <div class="auto-container">
                <div class="outer-box">

                    <!--Start Header Left-->
                    <div class="header-left">
                        <div class="main-logo-box">
                            <a href="index">
                                <img src="assets/images/resources/logo.png" alt="Awesome Logo" title="ASU Logo" width="120">
                            </a>
                        </div>
                        <div class="header-social-link">
                            <ul class="clearfix">
                                <!-- <li>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                </li> -->
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100092726475230" target="_blank"><i class="icon-facebook"></i></a>
                                </li>
                                <!-- <li>
                                    <a href="#"><i class="icon-pinterest"></i></a>
                                </li> -->
                                <li>
                                    <a href="https://www.instagram.com/invites/contact/?i=1or5kzvwyf6a7&utm_content=rbfs4j3" target="_blank"><i class="icon-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Header Left-->

                    <!--Start Header Middle-->
                    <div class="header-middle">
                        <div class="nav-outer style1 clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <div class="inner">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <!-- Main Menu -->
                            <nav class="main-menu style1 navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="<?php if ($headerTitle == "home") : echo "current"; endif; ?>"><a href="index"><span>Home</span></a></li>

                                        <li class="dropdown <?php if ($headerTitle == "about") : echo "current"; endif; ?>"><a href="about"><span>About Us</span></a>
                                            <ul>
                                                <li><a href="anambra-state">About Anambra State</a></li>
                                                <li><a href="about">About ASU Uk & Ireland</a></li>
                                                <li><a href="executives">Our Executives</a></li>
                                                <li><a href="sites-and-sounds">Site’s And Sounds Of Anambra State</a></li>
                                                <li><a href="gallery">Gallery</a></li>
                                            </ul>
                                        </li>

                                        <li class="<?php if ($headerTitle == "event") : echo "current"; endif; ?>"><a href="events"><span>Events</span></a></li>

                                        <li class="<?php if ($headerTitle == "news") : echo "current"; endif; ?>"><a href="news"><span>News</span></a></li>

                                        <li class="<?php if ($headerTitle == "devotion") : echo "current"; endif; ?>"><a href="devotional"><span>Devotional</span></a></li>

                                        <li class="<?php if ($headerTitle == "contact") : echo "current"; endif; ?>"><a href="contact"><span>Contact</span></a></li>

                                        <li class="dropdown"><a href="member"><span>Member</span></a>
                                            <ul>
                                                <li><a href="member">Dashboard</a></li>
                                                <li><a href="member/login">Login</a></li>
                                                <li><a href="member/register">Register</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                    </div>
                    <!--End Header Middle-->

                    <!--Start Header Right-->
                    <div class="header-right">
                        <div class="phone-number-box1">
                            <div class="icon">
                                <span class="icon-phone-ringing"></span>
                            </div>
                            <div class="phone">
                                <p>Have any questions?</p>
                                <a href="tel:+447438263290">+44 7438 263 290</a>
                            </div>
                        </div>

<!--                        <div class="serach-button-style1">-->
<!--                            <button type="button" class="search-toggler">-->
<!--                                <i class="icon-magnifying-glass"></i>-->
<!--                            </button>-->
<!--                        </div>-->

                    </div>
                    <!--End Header Right-->

                </div>
            </div>
        </div>
        <!--End header-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="index" class="img-responsive">
                            <img src="assets/images/resources/logo.png" alt="Sticky ASU Logo" title="" width="100">
                        </a>
                    </div>
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Sticky Header-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index"><img src="assets/images/resources/logo.png"
                                                                alt="Mobile ASU Logo" title="" width="160"></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

    </header>
