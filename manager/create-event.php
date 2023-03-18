
<?php 
require_once './partials/header.php'; 

if (isset($_POST['submit_btn'])) {
  $title = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['title'])));
  $slug = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['slug'])));
  $time = SANITIZE($_POST['time']);
  $date = SANITIZE($_POST['date']);
  $venue = ALLOW_SAFE_SYMBOLS(CHECK_INPUT(SANITIZE($_POST['venue'])));
  $desc = CHECK_INPUT(SANITIZE(ALLOW_SAFE_SYMBOLS($_POST['desc'])));
  $file = $_FILES['image'];
  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  move_uploaded_file($tmp_name, "../assets/images/events/$image");

  $sql = "INSERT INTO events (event_title, event_slug, event_time, event_date, event_venue,  event_img, event_desc) VALUES ('$title', '$slug', '$time', '$date', '$venue', '$image', '$desc')";
  $result = VALIDATE_QUERY($sql);

  if ($result) {
    echo "<script>alert('Event Created!');</script>";
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
      <h1>Create Events</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Create Events</li>
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
                    <input type="text" name="title" onkeyup="InsertSlug(this)" required class="form-control mb-2" id="title" placeholder="Event title">
                </div>

                <div class="form-group">
                    <input type="text" readonly name="slug" required class="form-control mb-2" id="slug" placeholder="Event slug title">
                </div>

                <div class="form-group">
                    <label for="time" class="form-label text-sm">Event time</label>
                    <input type="time" name="time" required class="form-control mb-2" id="time">
                </div>
                
                <div class="form-group">
                    <label for="date" class="form-label text-sm">Event date</label>
                    <input type="date" name="date" required class="form-control mb-2" id="date">
                </div>
                
                <div class="form-group">
                    <label for="venue" class="form-label text-sm">Event venue</label>
                    <input type="text" placeholder="Event venue" name="venue" required class="form-control mb-2" id="venue">
                </div>

                  <div class="form-group">
                    <label for="image" class="form-label">Choose event image</label>
                      <input type="file" name="image" required class="form-control mb-2" id="image">
                  </div>

                  <div class="form-group">
                    <label for="desc" class="form-label">Event description</label>
                      <textarea name="desc" id="desc" class="form-control"></textarea>
                  </div>

                <button type="submit" name="submit_btn" class="mt-3 btn btn-primary shadow">Create event <i class="bi bi-calendar"></i></button>
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