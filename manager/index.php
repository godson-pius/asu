<?php require_once './partials/header.php'; ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once './partials/sidebar.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Messages</h6>
                    </li>

                    <li><a class="dropdown-item" href="./contacts">View messages</a></li>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Messages</h5>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h6><?= GET_TOTAL('messages'); ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
              <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>ASU News</h6>
                    </li>

                    <li><a class="dropdown-item" href="./create-news">Create News</a></li>
                </div>
                <div class="card-body">
                  <h5 class="card-title">News</h5>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h6><?= GET_TOTAL('posts'); ?></h6>
                      <!-- <span class="text-muted small pt-2 ps-1">Nadice Oil &amp; Gas</span> -->
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Events</h5>

              <div class="activity">
                <h3><?= GET_TOTAL('events'); ?></h3>
              </div>

            </div>
          </div><!-- End Recent Activity -->

        </div><!-- End Right side columns -->

      </div>
    </section>

    <section>
      <section class="row">
                    <!-- Recent Sales -->
                    <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">News <span>| Anambra State Union Uk &amp; Ireland</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Date Posted</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      if ($news) {
                        foreach ($news as $new) {
                          extract($new); ?>

                      <tr>
                        <th scope="row"><a href="#">#<?= $post_id; ?></a></th>
                        <td><?= $post_title; ?></td>
                        <td><?= $post_cat; ?></td>
                        <td>
                          <img src="../assets/images/news/<?= $post_img; ?>" alt="Post Image" width="50">
                        </td>
                        <td><?= HUMAN_DATE($created_at); ?></td>
                      </tr>

                      <?php } } ?>

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
      </section>
    </section>

    <section>
      <section class="row">
                    <!-- Recent Sales -->
                    <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Events <span>| Anambra State Union Uk &amp; Ireland</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date</th>
                        <th scope="col">Venue</th>
                        <th scope="col">Date Posted</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      if ($events) {
                        foreach ($events as $event) {
                          extract($event); ?>

                      <tr>
                        <th scope="row"><a href="#">#<?= $event_id; ?></a></th>
                        <td><a href="" class="text-primary"><?= $event_title; ?></a></td>
                        <td><?= $event_date; ?></td>
                        <td><?= $event_venue; ?></td>
                        <td><?= HUMAN_DATE($created_at); ?></td>
                      </tr>

                      <?php } } ?>

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
      </section>
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