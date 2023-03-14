
<?php 
require_once './partials/header.php'; 

if (isset($_POST['submit_btn'])) {
  $price = CHECK_INPUT(SANITIZE($_POST['price']));
  $sql = "UPDATE price SET current = '$price', updated_at = now()";

  $result = VALIDATE_QUERY($sql);

  if ($result) {
    echo "<script>alert('Diesel Price Updated!');</script>";
  } else {
      echo "<script>alert('Something went wrong')</script>";
  }
}

?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once './partials/sidebar.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>All Request</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">All Requests</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <hr>
        <div class="col-lg-12">

          <div class="card p-3">
            <div class="card-body">
              <span class="text-dark" style="font-size: 13px;"><i>Last updated: <?= HUMAN_DATE_TIME($last_updated); ?></i></span>
              <form action="" method="post" class="mt-3">
                <div class="form-group">
                    <input type="number" name="price" required class="form-control" id="price" placeholder="Set new price">
                </div>

                <button type="submit" name="submit_btn" class="mt-3 btn btn-primary shadow">Update Price <i class="bi bi-check-circle"></i></button>
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