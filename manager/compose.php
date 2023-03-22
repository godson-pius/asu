
<?php 
require_once './partials/header.php'; 

if (isset($_POST['submit_btn'])) {
  $subject = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['subject'])));
  $message = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['message'])));
  $member = $_POST['member'];

  if ($member == "all") {

        $sql = "INSERT INTO messages (subject, message, all_member) VALUES ('$subject', '$message', 1)";
        $result = VALIDATE_QUERY($sql);

        if ($result) {
        echo "<script>alert('Message sent');</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again')</script>";
        }
    } else {
        $member_details = EXECUTE_SINGLE_ROW_QUERY(SELECT_WHERE("members", "member_id", $member));
        extract($member_details);


        $sql = "INSERT INTO messages (subject, fullname, phone, message, dest) VALUES ('$subject', '$fullname', '$phone', '$message', $member_id)";
            $result = VALIDATE_QUERY($sql);

            if ($result) {
            echo "<script>alert('Message sent');</script>";
            } else {
                echo "<script>alert('Something went wrong! Please try again')</script>";
            }
        }
  }

?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once './partials/sidebar.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Compose message</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Compose message</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <hr>
        <div class="col-lg-12">

          <div class="card p-3">
            <div class="card-body">
              <form action="" method="post" class="mt-3">
                <div class="form-group">
                    <input type="text" name="subject" required class="form-control mb-2" id="title" placeholder="Enter Subject">
                </div>

                <textarea required name="message" class="form-control mb-2" placeholder="Compose message"></textarea>

                <div class="form-group">
                    <select name="member" id="member" class="form-control mb-2" required>
                    <option value="all">All Member</option>
                    
                    <?php 
                        if ($members) {
                            foreach ($members as $member) {
                                extract($member); ?>
                                    <option value="<?= $member_id; ?>"><?= $fullname; ?></option>
                    
                    <?php } } ?>
                    </select>
                </div>

                <button type="submit" name="submit_btn" class="mt-3 btn btn-primary shadow">Compose <i class="bi bi-users"></i></button>
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