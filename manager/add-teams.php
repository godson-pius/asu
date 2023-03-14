
<?php 
require_once './partials/header.php'; 

if (isset($_POST['submit_btn'])) {
  $fullname = CHECK_INPUT(SANITIZE($_POST['fullname']));
  $email = CHECK_INPUT(SANITIZE($_POST['email']));
  $role = CHECK_INPUT(SANITIZE($_POST['role']));
  $file = $_FILES['image'];
  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  move_uploaded_file($tmp_name, "../images/teams/$image");

  $sql = "INSERT INTO teams (fullname, email, image, role) VALUES ('$fullname', '$email', '$image', '$role')";
  $result = VALIDATE_QUERY($sql);

  if ($result) {
    echo "<script>alert('Team Added!');</script>";
  } else {
      echo "<script>alert('Something went wrong! Please try again')</script>";
  }
}

?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once './partials/sidebar.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Team</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Add Team</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <hr>
        <div class="col-lg-12">

          <div class="card p-3">
            <div class="card-body">
              <form action="" method="post" class="mt-3" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="fullname" required class="form-control mb-2" id="fullname" placeholder="Team Fullname">
                </div>

                  <div class="form-group">
                    <input type="email" name="email" required class="form-control mb-2" id="email" placeholder="Team Email">
                  </div>

                  <div class="form-group">
                      <input type="text" name="role" required class="form-control mb-2" id="role" placeholder="Team Role">
                  </div>

                  <div class="form-group">
                      <input type="file" name="image" required class="form-control" id="image">
                  </div>

                <button type="submit" name="submit_btn" class="mt-3 btn btn-primary shadow">Add Team <i class="bi bi-person"></i></button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once './partials/footer.php'; ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>