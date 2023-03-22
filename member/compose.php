        <?php require_once 'components/header.php';
            

            if (isset($_POST['submit'])) {
                $subject = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['subject'])));
                $message = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['message'])));
                $fullname = $fullname;
                $phone = $phone;

                $sql = "INSERT INTO messages (subject, fullname, phone, message, admin) VALUES ('$subject', '$fullname', '$phone', '$message', 1)";
                $result = VALIDATE_QUERY($sql);

                if ($result) {
                    echo "<script>alert('Message sent');</script>";
                  } else {
                      echo "<script>alert('Something went wrong! Please try again')</script>";
                  }
            }

        ?>
        <!-- #/ header -->
        <!-- sidebar -->
       

        <?php require_once 'components/sidebar.php';?>


        <!-- #/ sidebar -->
        <!-- content body -->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>Hello, <span>dear</span></h4>
                    </div>
                    <div class="col p-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Compose</li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Compose</h4>
                                <form action="" method="post">
                                    <input required type="text" name="subject" placeholder="Enter subject" class="form-control mb-2">

                                    <textarea required name="message" class="form-control" placeholder="Compose message"></textarea>

                                    <input type="submit" value="Send message" name="submit" class="btn btn-primary mt-3">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!-- #/ content body -->
        <!-- footer -->
        <?php require_once 'components/footer.php'; ?>
        <!-- #/ footer -->
    </div>
    <!-- Common JS -->
    <script src="./assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="./js/custom.min.js"></script>
    <script src="./assets/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
    <script src="./js/asu.js"></script>
</body>

</html>