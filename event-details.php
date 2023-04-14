<?php
$headerTitle = "event";
require_once 'components/header.php';

if (isset($_GET['event'])) {
    $event_slug = $_GET['event'];
    $events = EXECUTE_SINGLE_ROW_QUERY(SELECT_WHERE("events", "event_slug", $event_slug));
    extract($events);

    $comment_count = GET_TOTAL_WHERE_WITH_AND_CLAUSE("comments", "post_id", $event_id, "type", "e");

    $like_count = GET_TOTAL_WHERE_WITH_AND_CLAUSE("likes", "liked_id", $event_id, "type", "e");

    $all_comments = EXECUTE_QUERY(SELECT_WHERE_WITH_AND_CLAUSE("comments", "post_id", $event_id, "type", "e"));

    if (isset($_SESSION['member']) && isset($_SESSION['member_name'])) {
        $member_id = $_SESSION['member'];

        $sql = "SELECT * FROM likes WHERE type = 'e' AND member_id = $member_id AND liked_id = $event_id";
        $execute = EXECUTE_SINGLE_ROW_QUERY($sql);

        if ($execute) {
            $like_style = 'fa fa-thumbs-up';
        } else {
            $like_style = 'fa fa-thumbs-o-up';
        }

        if (isset($_POST['submit_comment'])) {
            $member = GET_SESSION('member_name');
            $comment = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['comment']));
        
            $sql = "INSERT INTO comments (post_id, member, comment, type) VALUES ($event_id, '$member', '$comment', 'e')";
            $result = VALIDATE_QUERY($sql);
        
            if ($result === true) {
                echo "<script>alert('Comment added')</script>";
            } else {
                echo "<script>alert('Failed to add comment! Please try again!')</script>";
            }
        }
    } else {
        REDIRECT("login");
    }
}

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
                                    <li class="active">Event Details</li>
                                </ul>
                            </div>

                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Event Details</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Blog Page Three-->
        <section class="blog-details-page">
            <div class="container">

                <div class="row">

                    <div class="col-xl-8 col-lg-12">
                        <div class="blog-details-content">

                            <div class="single-blog-style1 single-blog-style1--instyle3">
                                <div class="single-blog-style1__inner">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <!-- 770 * 420 -->
                                            <img src="assets/images/events/<?= $event_img; ?>" alt="event image">

                                            <!-- <div style="width: 770px; height: 420px; background-image: url(assets/images/events/<?= $event_img; ?>); background-position: center; background-size: cover;">
                                                    </div> -->
                                        </div>
                                        <div class="date-box">
                                                    <h6><?= date('d', strtotime($event_date)); ?><br> <span><?= date('M', strtotime($event_date)); ?></span></h6>
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

                                            <li>
                                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                                <a href="#"><?= $comment_count; ?> Comments</a>
                                            </li>

                                            <li style="cursor: pointer;">
                                                <i data-liked="<?= $event_id; ?>" data-type="e" data-member="<?= $_SESSION['member']; ?>" onclick="likePost(this)" class="<?= $like_style; ?>" aria-hidden="true"></i>
                                                <a id="total"><?= $like_count; ?> likes</a>
                                            </li>
                                        </ul>
                                        <div class="text-inner">
                                            <h3 class="blog-title"><?= $event_title; ?></h3>
                                        </div>
                                        <div class="text">
                                            <p><?= $event_desc; ?></p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Comment and Add Comments -->

                             <!-- Comment and Add Comments -->

                             <?php 
                                if (isset($_SESSION['member'])) {
                                    require_once 'components/comments.php';
                                } else {
                                    echo "<h2>Please login to comment!</h2>";
                                    echo "<a class='' href='member/login'>Login through this link</a>";
                                }
                            ?>

                        </div>
                    </div>


                    <!--Start Thm Sidebar Box-->
                    <div class="col-xl-4 col-lg-12">
                        <div class="thm-sidebar-box">

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

    <!-- thm custom script -->
    <script src="assets/js/custom.js"></script>

    <!-- ASU CUSTOM -->
    <script src="./assets/js/like.js"></script>



</body>

</html>