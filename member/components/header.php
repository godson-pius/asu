<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Member Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">

    <link href="../../assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    <link href="./css/style.css" rel="stylesheet">
    <script src="./js/modernizr-3.6.0.min.js"></script>
</head>

<body class="v-light vertical-nav fix-header fix-sidebar">
    <div id="preloader">    
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/></svg>
        </div>
    </div>
    <div id="main-wrapper">
        <!-- header -->
        <div class="header">
            <div class="nav-header">
                <div class="brand-logo"><a href="index.html"><b><img src="./assets/images/logo.png" alt=""> </b><span class="brand-title"><img src="./assets/images/logo-text.png" alt=""></span></a>
                </div>
                <div class="nav-control">
                    <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="header-content">
                <div class="header-left">
                    <ul>
                        <li class="icons position-relative"><a href="javascript:void(0)"><i class="icon-magnifier f-s-16"></i></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <div class="header-search" id="header-search">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-append"><span class="input-group-text"><i class="icon-magnifier"></i></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-right">
                    <ul>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-bell f-s-18" aria-hidden="true"></i><div class="pulse-css"></div></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-heading"><span class="text-left">Recent Notifications</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./assets/images/avatar/1.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. Saifun</div>
                                                    <div class="notification-text">5 members joined today</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./assets/images/avatar/2.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mariam</div>
                                                    <div class="notification-text">likes a photo of you</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./assets/images/avatar/3.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Tasnim</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./assets/images/avatar/4.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Ishrat Jahan</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center"><a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-comment f-s-18" aria-hidden="true"></i><div class="pulse-css"></div></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-heading"><span class="text-left">2 New Messages</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./assets/images/avatar/1.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Saiul Islam</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./assets/images/avatar/2.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Ishrat Jahan</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./assets/images/avatar/3.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Saiul Islam</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./assets/images/avatar/4.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Ishrat Jahan</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center"><a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons">
                            <a href="javascript:void(0)"> <i class="mdi mdi-crosshairs-gps f-s-18" aria-hidden="true"></i>
                                <div class="pulse-css"></div>
                            </a>
                            <div class="drop-down dropdown-task animated bounceInDown">
                                <div class="dropdown-content-heading"><span class="text-left">Task Update</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">85% Complete</small>
                                                    <div class="notification-heading">Task One</div>
                                                    <div class="progress">
                                                        <div style="width: 85%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-success"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">60% Complete</small>
                                                    <div class="notification-heading">Task Two</div>
                                                    <div class="progress">
                                                        <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-primary"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">25% Complete</small>
                                                    <div class="notification-heading">Task Three</div>
                                                    <div class="progress">
                                                        <div style="width: 25%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar" class="progress-bar progress-bar-warning"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">75% Complete</small>
                                                    <div class="notification-heading">Task Four</div>
                                                    <div class="progress">
                                                        <div style="width: 75%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class="progress-bar progress-bar-danger"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center"><a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-account f-s-20" aria-hidden="true"></i></a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="#"><i class="mdi mdi-email"></i> <span>Inbox</span></a>
                                        </li>
                                        <li><a href="#"><i class="mdi mdi-settings"></i> <span>Setting</span></a>
                                        </li>
                                        <li><a href="#"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="#"><i class="icon-power"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>