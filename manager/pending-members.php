<?php require_once './partials/header.php'; ?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once './partials/sidebar.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>All Pending Members</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">All Pending Members</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <section class="row">
                    <!-- Recent Sales -->
                    <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Members <span>| Anambra State Union Uk &amp; Ireland</span></h5>

                  <table class="table table-borderless text-center datatable">
                    <thead>
                      <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date Joined</th>
                        <th scope="col">Date Registered</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                    if ($members) {
                        foreach ($members as $member) {
                        extract($member); ?>

                      <tr>
                        <td><a href="" class="text-primary"><?= $fullname; ?></a></td>
                        <td><?= $email; ?></td>
                        <td><?= $phone; ?></td>
                        <td><?= $date_of_joining; ?></td>
                        <td><?= HUMAN_DATE($created_at); ?></td>
                        <td>
                            <button data-id="<?= $member_id; ?>" id="approveMember" class="btn btn-success btn-sm">Approve</button>
                            <button data-id="<?= $member_id; ?>" id="delMember" class="btn btn-danger btn-sm">Delete</button>
                        </td>
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

  <!-- Toastify Js -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- Nadice Js -->
    <script src="./assets/js/asu.js"></script>

</body>

</html>