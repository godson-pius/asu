<?php require_once './partials/header.php'; ?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once './partials/sidebar.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>All News</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">All News</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <hr>

        <?php
          if ($news) {
            echo '<button id="deleteAll" class="btn btn-danger shadow btn-sm mb-3" style="float: right;">Delete All <i class="bi bi-trash"></i></button>';
            foreach ($news as $new) {
              extract($new); ?>

              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                  <h5 class="card-title"><?= $post_title; ?> | <span><?= $post_slug; ?></span> - <span class="text-warning"><?= HUMAN_DATE($created_at); ?></span></h5>
                  <p><?= substr($post_desc, 0, 150); ?>...</p>

                  <hr>
                    <button id="delete" data-id="<?= $post_id; ?>" class="btn btn-danger shadow btn-sm" style="float: right; margin-left: 5px;">Delete <i class="bi bi-trash"></i></button>

                    <a href="edit-news?news=<?= $post_id; ?>" data-id="<?= $post_id; ?>" class="btn btn-info shadow btn-sm" style="float: right;">Edit <i class="bi bi-trash"></i></a>
                  </div>
                </div>
              </div>
        <?php } } else { echo "No news yet!"; } ?>

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