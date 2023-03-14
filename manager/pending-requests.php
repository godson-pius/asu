<?php
 require_once './partials/header.php'; 

 ?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once './partials/sidebar.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Delivery Request</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Messages</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <i class="text-secondary mb-2">Click <b>Mark done</b> when you've responded to any request</i> <hr>

        <?php
          if ($pending_requests) {
            foreach ($pending_requests as $pending) {
              extract($pending); ?>

              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?= $company; ?> | <span><?= $phone; ?></span> - <button class="btn btn-primary btn-sm shadow rounded"><?= $liter; ?> Liters</button></h5>
                    <p><?= $address; ?></p>

                    <hr>
                    <button id="done" data-id="<?= $request_id; ?>" class="btn btn-dark shadow btn-sm" style="float: right;">Mark Done <i class="bi bi-check2-circle"></i></button>
                  </div>
                </div>
              </div>
 
        <?php } } else { echo "No pending requests!"; } ?>
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

   <!-- Toastify Js -->
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

  <!-- Nadice Js -->
  <script src="./assets/js/nadice.js"></script>

</body>

</html>