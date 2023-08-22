<?php
    require_once '../manager/prepared/prepared.php';
    
    if (isset($_POST['submit_btn'])) {
        $fullname = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['fullname']));
        $email = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['email']));
        $phone = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['phone']));
        $postcode = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['postcode']));
        $tob = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['tob']));
        $lob = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['lob']));
        $dob = CHECK_INPUT(SANITIZE($_POST['dob']));
        $status = CHECK_INPUT(SANITIZE($_POST['status']));
        $husbtown = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['husbtown']));
        $nextofkin = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['nextofkin']));
        $nextofkinphone = SANITIZE($_POST['nextofkinphone']);
        $interests = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['interests']));
        $doj = CHECK_INPUT(SANITIZE($_POST['doj']));
        $signature = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['signature']));
        $printname = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['printname']));
        $address = ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['address']));
        $tmp_password = CHECK_INPUT(SANITIZE($_POST['password']));
        $password = ENCRYPT($tmp_password);
    
    
        if (isset($_POST['agree'])) {
            $sql = "INSERT INTO members (fullname, email, phone, postcode, address, tob, lob, dob, status, husband_town, nextofkin, nextofkin_phone, interests, signature, date_of_joining, print_name, password) VALUES ('$fullname', '$email', '$phone', '$postcode', '$address', '$tob', '$lob', '$dob', '$status', '$husbtown', '$nextofkin', '$nextofkinphone', '$interests', '$signature', '$doj', '$printname', '$password')";
            $result = VALIDATE_QUERY($sql);
        
            if ($result) {
            echo "<script>alert('Registration Successful!');</script>";
                REDIRECT('login');
            } else {
                echo "<script>alert('Something went wrong! Please try again')</script>";
            }
        } else {
            echo "<script>alert('Please agree to registration terms')</script>";
        }
      }
?>

<!DOCTYPE html>
<html lang="en" class="h-100" id="login-page1">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Member Register</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/resources/logo.png">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">
    <script src="./js/modernizr-3.6.0.min.js"></script>
</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/></svg>
        </div>
    </div>
    <div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-8">
                    <div class="form-input-content">
                        <div class="card">
                            <div class="card-body">
                                <div class="logo text-center">
                                    <a href="../index">
                                        <img src="../assets/images/resources/logo.png" alt="Logo" width="200">
                                    </a>
                                </div>
                                <h4 class="text-center m-t-15">Join Union</h4>
                                <form action="" method="post" class="m-t-30 m-b-30">
                                    <div class="row">
                                        <div class="col">
                                        <div class="form-group">
                                        <label>Fullname</label>
                                        <input required type="text" name="fullname" class="form-control" placeholder="Fullname">
                                    </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group">
                                        <label>Email</label>
                                        <input required type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input required type="text" name="phone" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Post Code</label>
                                                <input required type="text" name="postcode" class="form-control" placeholder="Post Code">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Town of birth</label>
                                                <input required type="text" name="tob" class="form-control" placeholder="Town of birth">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>LGA of birth</label>
                                                <input required type="text" name="lob" class="form-control" placeholder="LGA of birth">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Date of birth</label>
                                                <input required type="date" name="dob" class="form-control" placeholder="Date of birth">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Marital Status</label>
                                                <select name="status" class="form-control" required>
                                                <option value="married">Married</option>
                                                    <option value="not married">Not Married</option>
                                                    <option value="divorced">Divorced</option>
                                                    <option value="windowed">Widowed</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Husband town/LGA</label>
                                                <input required type="text" name="husbtown" class="form-control" placeholder="Husband town/LGA">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Next of Kin</label>
                                                <input required type="text" name="nextofkin" class="form-control" placeholder="Next of Kin">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Next of Kin Contact</label>
                                                <input required type="text" name="nextofkinphone" class="form-control" placeholder="Next of Kin Contact">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Interests/Extra curricular activities</label>
                                                <input required type="text" name="interests" class="form-control" placeholder="Interests/Extra curricular activities">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Date of joining</label>
                                                <input required type="date" name="doj" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Signature</label>
                                                <input required type="text" name="signature" class="form-control" placeholder="Signature">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Print Name</label>
                                                <input required type="text" name="printname" class="form-control" placeholder="Print Name">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input required type="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address" placeholder="Enter your address" required></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input required type="checkbox" name="agree"> <span> Accept terms of registration</span>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        </div>
                                        <div class="form-group col-md-6 text-right"><a href="login">Have an account? Login</a>
                                        </div>
                                    </div>
                                    <p><i>Membership Registration fee of £10 payable on submission of this form. Registration fees are strictly non-refundable. Odachi is £50 Annually Paid and  monthly dues are £5.</i></p>
                                    <div class="text-center m-b-15 m-t-15">
                                        <button type="submit" name="submit_btn" class="btn btn-primary">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="././assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="./js/custom.min.js"></script>
</body>

</html>