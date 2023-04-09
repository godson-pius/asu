
<?php 
require_once './partials/header.php'; 

if (isset($_POST['submit_btn'])) {
    $desc = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['desc'])));
    $file = $_FILES['site'];
    $site = $_FILES['site']['name'];
    $tmp_name = $_FILES['site']['tmp_name'];
    move_uploaded_file($tmp_name, "../assets/sites/$site");

  $sql = "INSERT INTO sites (site, site_desc) VALUES ('$site', '$desc')";
  $result = VALIDATE_QUERY($sql);

  if ($result) {
    echo "<script>alert('Site Added!');</script>";
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
      <h1>Add Sites</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Add Sites</li>
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
                    <label for="site" class="mb-1">Add media</label>
                      <input type="file" name="site" required class="form-control mb-2">
                  </div>

                  <div class="form-group">
                    <label for="desc" class="mb-1">Enter Description</label>
                      <textarea name="desc" id="desc" class="form-control mb-2"></textarea>
                  </div>

                <button type="submit" name="submit_btn" class="mt-3 btn btn-primary shadow">Add Site <i class="bi bi-music-note-list"></i></button>
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

  <!-- Rich TextArea -->

  <script>
    const InsertSlug = (e) => {
        const formatted = e.value.replaceAll(' ', '-')
        document.getElementById('slug').value = formatted.toLowerCase()
    }
  </script>

</body>

</html>