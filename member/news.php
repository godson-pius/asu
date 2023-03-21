        <?php require_once 'components/header.php'; ?>
        <!-- #/ header -->
        <!-- sidebar -->
       

        <?php require_once 'components/sidebar.php';?>


        <!-- #/ sidebar -->
        <!-- content body -->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>Hello, <span>Welcome here</span></h4>
                    </div>
                    <div class="col p-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">News</li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">News</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>News</th>
                                                <th>Date posted</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                            if ($news) {
                                                foreach ($news as $post) {
                                                    extract($post); ?>
                                            <tr>
                                                <td><?= $post_title; ?></td>
                                                <td><?= substr($post_desc, 0, 20); ?>...</td>
                                                <td><?= HUMAN_DATE($created_at); ?></td>
                                                <td>
                                                    <a href="../news-details?news=<?= $post_slug; ?>">Engage News</a>
                                                </td>
                                            </tr>

                                            <?php } } ?>
                                         
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>News</th>
                                                <th>Date posted</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!-- #/ content body -->
        <!-- footer -->
        <?php require_once 'components/footer.php'; ?>
        <!-- #/ footer -->
    </div>
    <!-- Common JS -->
    <script src="./assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="./js/custom.min.js"></script>
    <script src="./assets/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
</body>

</html>