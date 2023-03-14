<?php require_once './partials/header.php'; ?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once './partials/sidebar.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Customers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Customers</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <i class="text-secondary mb-2">Customers that have worked with us.</i> <hr>

        <div class="col-lg-12">

        <div class="card-body bg-white">
                  <h5 class="card-title">Customers <span>| Nadice Oil &amp; Gas Limited</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#Client Id</th>
                        <th scope="col">Company</th>
                        <th scope="col">Phone Number</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      if ($clients) {
                        foreach ($clients as $client) {
                          extract($client); ?>

                          <tr>
                            <th scope="row"><a href="#">#<?= $client_id; ?></a></th>
                            <td><?= $client; ?></td>
                            <td><a href="#" class="text-primary"><?= $phone; ?></a></td>
                          </tr>
                      
                          <?php } } else { echo "No client yet!"; } ?>

                    </tbody>
                  </table>

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