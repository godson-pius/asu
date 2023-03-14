<?php require_once './partials/header.php'; ?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once './partials/sidebar.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>All Partners</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">All Partners</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <hr>

        <?php
          if ($partners) {
            foreach ($partners as $partner) {
              extract($partner); ?>

              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                  <h5 class="card-title"><?= $name; ?></h5>

                      <div style="width: 265px; height: 220px; background-color:yellow; background-image: url(../images/partners/<?= $logo; ?>); background-position: center; background-size: cover; background-repeat: no-repeat; "></div>

                      <p class="mt-4"><?= $url; ?></p>

                  <hr>
                    <button id="deletePartner" data-id="<?= $partner_id; ?>" class="btn btn-danger shadow btn-sm" style="float: right;">Delete Partner <i class="bi bi-trash"></i></button>
                  </div>
                </div>
              </div>
        <?php } } else { echo "No Partner Yet!"; } ?>

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