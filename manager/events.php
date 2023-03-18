<?php require_once './partials/header.php'; ?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once './partials/sidebar.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>All Events</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">All Events</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <hr>

        <?php
          if ($events) {
            echo '<button id="deleteAllEvent" class="btn btn-danger shadow btn-sm mb-3" style="float: right;">Delete All <i class="bi bi-trash"></i></button>';
            foreach ($events as $event) {
              extract($event); ?>

              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                  <h5 class="card-title"><?= $event_title; ?> | <span><?= $event_date; ?></span> - <span><?= $event_time; ?></span> <br> Venue: <span class="text-dark"><?= $event_venue; ?></span></h5>
                  <p><?= substr($event_desc, 0, 150); ?>...</p>

                  <hr>
                    <button id="deleteEvent" data-id="<?= $event_id; ?>" class="btn btn-danger shadow btn-sm" style="float: right; margin-left: 5px;">Delete <i class="bi bi-trash"></i></button>

                    <a href="edit-event?event=<?= $event_id; ?>" data-id="<?= $event_id; ?>" class="btn btn-info shadow btn-sm" style="float: right;">Edit <i class="bi bi-trash"></i></a>
                  </div>
                </div>
              </div>
        <?php } } else { echo "No event yet!"; } ?>

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
    <script src="./assets/js/asu.js"></script>

</body>

</html>