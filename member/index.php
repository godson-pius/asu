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
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4>Devotions <span class="pull-right"><i class="ion-android-download f-s-30 text-primary"></i></span></h4>
                                <h6 class="m-t-20 f-s-14"><?= GET_TOTAL("devotions"); ?> Devotions</h6>
                                <div class="progress m-t-0 h-7px">
                                    <div role="progressbar" class="progress-bar bg-primary wow animated progress-animated w-<?= GET_TOTAL("devotions"); ?>pc h-7px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4>News <span class="pull-right"><i class="ion-android-upload f-s-30 text-success"></i></span></h4>
                                <h6 class="m-t-20 f-s-14"><?= GET_TOTAL("posts"); ?> News</h6>
                                <div class="progress m-t-0 h-7px">
                                    <div role="progressbar" class="progress-bar bg-success wow animated progress-animated w-<?= GET_TOTAL("posts"); ?>pc h-7px"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4>Events <span class="pull-right"><i class="ion-android-list f-s-30 text-danger"></i></span></h4>
                                <h6 class="m-t-20 f-s-14"><?= GET_TOTAL("events"); ?> Events</h6>
                                <div class="progress m-t-0 h-7px">
                                    <div role="progressbar" class="progress-bar bg-danger wow animated progress-animated w-<?= GET_TOTAL("events"); ?>pc h-7px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Mails</h4>


                                <div class="media border-bottom-1 p-t-15 p-b-15">
                                    <img src="./assets/images/avatar/1.jpg" class="mr-3 rounded-circle">
                                    <div class="media-body">
                                        <h5>John Tomas</h5>
                                        <p class="m-b-0">I shared this on my fb wall a few months back,</p>
                                    </div><span class="text-muted f-s-12">April 24, 2018</span>
                                </div>
                            
                                
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center"><i class="icon ion-ios-paper-outline f-s-75 text-success"></i>
                                    <h4 class="m-b-2">Today's Word</h4>
                                    <p class="p-l-30 p-r-30 m-t-15 m-b-30"><?= $latest_devotion['devotion_title']?></p><a href="devotion-details?devotion=<?= $latest_devotion['devotion_slug']; ?>" class="btn btn-sm btn-success btn-block m-t-15">Study</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Activity Timeline</h4>
                                <div class="timeline-">
                                    <ul class="timeline">

                                        <li>
                                            <div class="timeline-badge warning"></div><a href="#" class="timeline-panel text-muted"><span>20 minutes ago</span><h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6></a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger"></div><a href="#" class="timeline-panel text-muted"><span>30 minutes ago</span><h6 class="m-t-5">Google acquires Youtube.</h6></a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success"></div><a href="#" class="timeline-panel text-muted"><span>15 minutes ago</span><h6 class="m-t-5">StumbleUpon is acquired by eBay.</h6></a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning"></div><a href="#" class="timeline-panel text-muted"><span>20 minutes ago</span><h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./assets/images/users/2.jpg" class="rounded-circle m-t-15 w-75px" alt="">
                                    <h4 class="m-t-15 m-b-2"><?= $fullname; ?></h4>
                                    <p class="text-muted">ASU Member</p>
                                 
                                    <div class="row">
                                        <div class="col-12 border-bottom-1 p-t-20 p-b-10"><span class="pull-left f-w-600">Name:</span> <span class="pull-right"><?= $fullname; ?></span>
                                        </div>
                                        <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Email:</span> <span class="pull-right"><?= $email; ?></span>
                                        </div>
                                        <div class="col-12 p-t-10 p-b-10"><span class="pull-left f-w-600">Phone:</span> <span class="pull-right"><?= $phone; ?></span>
                                        </div>
                                    </div>
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
    <!-- Chartjs chart -->
    <script src="./assets/plugins/chartjs/Chart.bundle.js"></script>
    <!-- Custom dashboard script -->
    <script src="./js/dashboard-1.js"></script>
</body>

</html>