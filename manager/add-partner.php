
<?php 
require_once './partials/header.php'; 

if (isset($_POST['submit_btn'])) {
  $name = CHECK_INPUT(SANITIZE($_POST['name']));
  $url = CHECK_INPUT(SANITIZE($_POST['url']));

  $file = $_FILES['image'];
  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  move_uploaded_file($tmp_name, "../images/partners/$image");

  $sql = "INSERT INTO partners (name, logo, url) VALUES ('$name', '$image', '$url')";
  $result = VALIDATE_QUERY($sql);

  if ($result) {
    echo "<script>alert('Partner Added!');</script>";
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
      <h1>Add Partner</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Add Partner</li>
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
                    <input type="text" name="name" required class="form-control mb-2" id="name" placeholder="Partner name">
                </div>

                  <div class="form-group">
                      <input type="text" name="url" required class="form-control mb-2" id="url" placeholder="Partner Website link (https://worldbraintechnology.com)">
                  </div>

                  <div class="form-group">
                      <input type="file" name="image" required class="form-control" id="image">
                  </div>

                <button type="submit" name="submit_btn" class="mt-3 btn btn-primary shadow">Add Partner <i class="bi bi-cloud-plus"></i></button>
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