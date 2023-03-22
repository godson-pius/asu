<?php
require_once '../manager/prepared/prepared.php';

if (isset($_POST['login_btn'])) {
    $email = CHECK_INPUT(SANITIZE($_POST['email']));
    $tmp_password = CHECK_INPUT(SANITIZE($_POST['password']));
    $password = ENCRYPT($tmp_password);

    $sql = "SELECT * FROM members WHERE email = '$email' AND password = '$password'";
    $result = EXECUTE_QUERY($sql);
        
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        extract($row);
        
        if ($verified == 0) {
            echo "<script>alert('Account not verified! Please contact admin')</script>";
        } else {
            SET_SESSION("member", $member_id);
            SET_SESSION("member_name", $fullname);
        
        REDIRECT('index');
        }
    } else {
        echo "<script>alert('Invalid login credentials')</script>";
    }

  }
?>

<!DOCTYPE html>
<html lang="en" class="h-100" id="login-page1">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Member Login</title>
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
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card">
                            <div class="card-body">
                                <div class="logo text-center">
                                    <a href="index.html">
                                        <img src="../assets/images/resources/logo.png" alt="Logo" width="200">
                                    </a>
                                </div>
                                <h4 class="text-center m-t-15">Log into Your Account</h4>
                                <form action="" method="post" class="m-t-30 m-b-30">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <a href="register">Don't have an account? Register</a>
                                        </div>
                                        <div class="form-group col-md-6 text-right"><a href="#">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center m-b-15 m-t-15">
                                        <button type="submit" name="login_btn" class="btn btn-primary">Sign in</button>
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