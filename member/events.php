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
                            <li class="breadcrumb-item active">Events</li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Events</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Venue</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                            if ($events) {
                                                foreach ($events as $event) {
                                                    extract($event); ?>
                                            <tr>
                                                <td><?= $event_title; ?></td>
                                                <td><?= $event_venue; ?></td>
                                                <td><?= $event_date; ?></td>
                                                <td><?= $event_time; ?></td>
                                                <td>
                                                    <a href="../event-details?event=<?= $event_slug; ?>">Learn more</a>
                                                </td>
                                            </tr>

                                            <?php } } ?>
                                         
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>Venue</th>
                                                <th>Date</th>
                                                <th>Time</th>
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