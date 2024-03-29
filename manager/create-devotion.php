
<?php 
require_once './partials/header.php'; 

if (isset($_POST['submit_btn'])) {
  $title = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['title'])));
  $slug = CHECK_INPUT(SANITIZE($_POST['slug']));
  $bible = CHECK_INPUT(SANITIZE($_POST['bible']));
  $desc = CHECK_INPUT(SANITIZE(ALLOW_SAFE_SYMBOLS($_POST['desc'])));
  $file = $_FILES['image'];
  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  move_uploaded_file($tmp_name, "../assets/images/devotions/$image");

  $sql = "INSERT INTO devotions (devotion_title, devotion_slug, devotion_bible, devotion_body, devotion_img) VALUES ('$title', '$slug', '$bible', '$desc', '$image')";
  $result = VALIDATE_QUERY($sql);

  if ($result) {
    echo "<script>alert('Devotion Created!');</script>";
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
      <h1>Create Devotion</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Create Devotion</li>
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
                    <input type="text" name="title" onkeyup="InsertSlug(this)" required class="form-control mb-2" id="title" placeholder="Devotion title">
                </div>

                <div class="form-group">
                    <input type="text" readonly name="slug" required class="form-control mb-2" id="slug" placeholder="Devotion slug">
                </div>

                <div class="form-group">
                    <input type="text" name="bible" required class="form-control mb-2" id="bible" multiple placeholder="Devotion scriptures">
                </div>

                  <div class="form-group">
                    <label for="image" class="mb-1">Choose Image</label>
                      <input type="file" name="image" required class="form-control mb-2" id="image">
                  </div>

                  <div class="form-group">
                      <textarea name="desc" id="desc" class="form-control"></textarea>
                  </div>

                <button type="submit" name="submit_btn" class="mt-3 btn btn-primary shadow">Create Devotion <i class="bi bi-book"></i></button>
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