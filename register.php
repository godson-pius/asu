<?php
$headerTitle = "register";
require_once 'components/header.php';

if (isset($_POST['submit_btn'])) {
    $fullname = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['fullname'])));
    $email = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['email'])));
    $phone = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['phone'])));
    $postcode = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['postcode'])));
    $tob = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['tob'])));
    $lob = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['lob'])));
    $dob = CHECK_INPUT(SANITIZE($_POST['dob']));
    $status = CHECK_INPUT(SANITIZE($_POST['status']));
    $husbtown = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['husbtown'])));
    $nextofkin = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['nextofkin'])));
    $nextofkinphone = CHECK_INPUT(SANITIZE($_POST['nextofkinphone']));
    $interests = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['interests'])));
    $doj = CHECK_INPUT(SANITIZE($_POST['doj']));
    $signature = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['signature'])));
    $printname = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['printname'])));
    $address = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['address'])));


    if (isset($_POST['agree'])) {
        $sql = "INSERT INTO members (fullname, email, phone, postcode, address, tob, lob, dob, status, husband_town, nextofkin, nextofkin_phone, interests, signature, date_of_joining, print_name) VALUES ('$fullname', '$email', '$phone', '$postcode', '$address', '$tob', '$lob', '$dob', '$status', '$husbtown', '$nextofkin', '$nextofkin_phone', '$interests', '$signature', '$doj', '$printname')";
        $result = VALIDATE_QUERY($sql);
    
        if ($result) {
        echo "<script>alert('Registration Successful!');</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again')</script>";
        }
    } else {
        echo "<script>alert('Please agree to registration terms')</script>";
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
                                    <li class="active">Register</li>
                                </ul>
                            </div>

                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Become a member</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Main Contact Form Area-->
        <section class="main-contact-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-info-box">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h3>Get to join us</h3>
                                </div>
                                <h2>Register</h2>
                            </div>
                            <div class="text">
                                <p>Membership Registration fee of £10 payable on submission of this form. Registration fees are strictly non-refundable. Odachi is £50 Annually Paid and  monthly dues are £5.</p>
                            </div>

                        </div>
                    </div>



                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-form contact-form--style2">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h3>Become a member</h3>
                                </div>
                                <h2>Register</h2>
                            </div>

                            <form action="" method="post" class="default-form2">
                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="fullname" id="formName"
                                                    placeholder="Full Name" required="">
                                            </div>  
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" name="email" id="formEmail"
                                                    placeholder="Email Address" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="phone" id="formPhone"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="postcode" id="formPostcode"
                                                    placeholder="Post Code">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="tob" id="forTob"
                                                    placeholder="Town of birth">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="lob" id="forLob"
                                                    placeholder="LGA of birth">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <label for="fordob">Date of birth</label>
                                                <input type="date" class="form-control" name="dob" id="fordob">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <label for="forstatus">Marital Status</label>
                                                <select name="status" id="forstatus" style="position: relative; display: block; background: #ebf1ed; width: 100%; height: 62px; border: 1px solid #ebf1ed; color: #737c76; font-size: 14px; font-weight: 500; font-style: normal; padding-left: 30px; padding-right: 30px; border-radius: 0px; transition: all 500ms ease;">
                                                    <option value="married">Married</option>
                                                    <option value="not married">Not Married</option>
                                                    <option value="divorced">Divorced</option>
                                                    <option value="windowed">Windowed</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="husbtown" id="forhusbtown"
                                                    placeholder="Husband town/LGA">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="nextofkin" id="fornextofkin"
                                                    placeholder="Next of Kin">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="nextofkinphone" id="fornextofkinphone"
                                                    placeholder="Next of Kin Contact">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="interets" id="forinterets"
                                                    placeholder="Interests/Extra curricular activities">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <label for="doj">Date of joining</label>
                                                <input type="date" class="form-control" name="doj" id="doj">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="signature" id="forsignature"
                                                    placeholder="Signature">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="printname" id="forprintname"
                                                    placeholder="Print Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <textarea name="address" id="formaddress"
                                                    placeholder="Enter your address" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12 mb-4">
                                        <div class="row">
                                            <div class="col">
                                            <h5>Accept terms of payment</h5>
                                            </div>
                                            <div class="col">
                                            <input type="checkbox" name="agree" id="agree" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="">
                                            <button class="btn-one" name="submit_btn" type="submit">
                                                <span class="txt">Submit<i
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
                                <input type="search" class="form-control" name="search-input"
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



</body>

</html>