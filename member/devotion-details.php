        <?php require_once 'components/header.php';
            if (isset($_GET['devotion'])) {
                $topic = $_GET['devotion'];

                $devotion = EXECUTE_SINGLE_ROW_QUERY(SELECT_WHERE("devotions", "devotion_slug", "$topic"));
                extract($devotion);

                // Set session for global access
                SET_SESSION('devotionId', $devotion_id);
            }
            $member_id = $_SESSION['member'];
            $sql = "SELECT * FROM likes WHERE type = 'd' AND member_id = $member_id AND liked_id = $devotion_id";
            $execute = EXECUTE_SINGLE_ROW_QUERY($sql);

            if ($execute) {
                $btn_style = 'btn btn-primary btn-sm';
                $btn_text = 'Liked';
            } else {
                $btn_style = 'btn btn-danger btn-sm';
                $btn_text = 'Like';
            }
        ?>
        <!-- #/ header -->
        <!-- sidebar -->
       

        <?php require_once 'components/sidebar.php';?>


        <!-- #/ sidebar -->
        <!-- content body -->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>Hello, <span>study to show thyself approved</span></h4>
                    </div>
                    <div class="col p-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?= $devotion_title; ?></h4>
                                <h6>- <?= $devotion_bible; ?></h6>
                                <hr>
                                <br>
                                <p><?= $devotion_body; ?></p>

                                <!-- Like count -->
                                <button data-liked="<?= $devotion_id; ?>" data-type="d" data-member="<?= $_SESSION['member']; ?>" onclick="likePost(this)" class="<?= $btn_style; ?>"><?= $btn_text; ?></button> - <span id="total" class="text-primary"><?= GET_TOTAL_WHERE("likes", "liked_id", $devotion_id); ?> likes</span>
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
    <script src="./js/asu.js"></script>
</body>

</html>