        <?php require_once 'components/header.php';
            

            if (isset($_POST['submit'])) {
                $file = $_FILES['image'];
                $image = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                move_uploaded_file($tmp_name, "assets/images/users/$image");

                $sql = "UPDATE members SET image = '$image' WHERE member_id = $member_id";
                $result = VALIDATE_QUERY($sql);

                if ($result) {
                    echo "<script>alert('Profile Pics Updated');</script>";
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
                                <h4 class="card-title">Setting</h4>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <label for="">Choose Profile Picture</label>
                                    <input type="file" name="image" placeholder="Enter subject" class="form-control mb-2" required>

                                    <input type="submit" value="Update Image" name="submit" class="btn btn-primary mt-3">
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