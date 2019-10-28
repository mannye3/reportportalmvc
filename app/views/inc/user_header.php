<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xpanthersolutions.com/admin-templates/orbiter/html/light-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2019 17:22:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Orbiter - Bootstrap Minimal & Clean Admin Template</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/assets/images/newNasdIcon.jpg">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="<?php echo URLROOT; ?>/assets/plugins/switchery/switchery.min.css" rel="stylesheet">
    <!-- Apex css -->
    <link href="<?php echo URLROOT; ?>/assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">
    <!-- jvectormap css -->
    <link href="<?php echo URLROOT; ?>/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <!-- Slick css -->
    <link href="<?php echo URLROOT; ?>/assets/plugins/slick/slick.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/assets/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT; ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT; ?>/assets/css/flag-icon.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT; ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT; ?>/assets/plugins/summernote/summernote-bs4.css" rel="stylesheet" />

    <link href="<?php echo URLROOT; ?>/assets/plugins/jquery-confirm/css/jquery-confirm.css" rel="stylesheet" type="text/css">

    <!-- DataTables css -->
    <link href="<?php echo URLROOT; ?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo URLROOT; ?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive Datatable css -->
    <link href="<?php echo URLROOT; ?>/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
     <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/data.js"></script>
<script src="https://code.highcharts.com/stock/modules/drag-panes.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>

                <!-- dropify -->
<link href="<?php echo URLROOT; ?>/assets/dropify/dropify.min.css" rel="stylesheet" type="text/css" />    <!-- End css -->
</head>
<body class="vertical-layout">    
    <!-- Start Infobar Setting Sidebar -->
    
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
    <?php include'user_nav.php'; ?>
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img src="<?php echo URLROOT; ?>/assets/images/nasdlogop.jpg" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="<?php echo URLROOT; ?>/assets/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="<?php echo URLROOT; ?>/assets/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="<?php echo URLROOT; ?>/assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="<?php echo URLROOT; ?>/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                           <img src="<?php echo URLROOT; ?>/assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                           <img src="<?php echo URLROOT; ?>/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                               <!--  <li class="list-inline-item">
                                    <div class="settingbar">
                                        <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                            <img src="<?php echo URLROOT; ?>/assets/images/svg-icon/settings.svg" class="img-fluid" alt="settings">
                                        </a>
                                    </div>
                                </li> -->
                                <li class="list-inline-item">
                                    <div class="notifybar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo URLROOT; ?>/assets/images/svg-icon/notifications.svg" class="img-fluid" alt="notifications">
                                            <span class="live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                                <div class="notification-dropdown-title">
                                                    <h4>Notifications</h4>                            
                                                </div>
                                                <ul class="list-unstyled">                                                    
                                                    <li class="media dropdown-item">
                                                        <span class="mr-3 action-icon badge badge-primary-inverse"><i class="feather icon-dollar-sign"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">$135 received</h5>
                                                            <p><span class="timing">Today, 10:45 AM</span></p>                            
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="mr-3 action-icon badge badge-success-inverse"><i class="feather icon-file"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">Project X prototype approved</h5>
                                                            <p><span class="timing">Yesterday, 01:40 PM</span></p>                            
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="mr-3 action-icon badge badge-danger-inverse"><i class="feather icon-eye"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">John requested to view wireframe</h5>
                                                            <p><span class="timing">3 Sep 2019, 05:22 PM</span></p>                            
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="mr-3 action-icon badge badge-warning-inverse"><i class="feather icon-package"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">Sports shoes are out of stock</h5>
                                                            <p><span class="timing">15 Sep 2019, 02:55 PM</span></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>                                
                               
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                          <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo URLROOT; ?>/assets/images/users/profile.svg" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                      <h5><?php echo $_SESSION['username']; ?></h5>
                                                    </div>
                                                </div>
                                                <div class="userbox">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="media dropdown-item">
                                                            <a href="<?php echo URLROOT; ?>/accounts/profile" class="profile-icon"><img src="<?php echo URLROOT; ?>/assets/images/svg-icon/user.svg" class="img-fluid" alt="user">My Profile</a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <a href="<?php echo URLROOT; ?>/accounts/inbox" class="profile-icon"><img src="<?php echo URLROOT; ?>/assets/images/svg-icon/email.svg" class="img-fluid" alt="email">Email</a>
                                                        </li>                                                        
                                                        <li class="media dropdown-item">
                                                            <a href="<?php echo URLROOT; ?>/users/logout" class="profile-icon"><img src="<?php echo URLROOT; ?>/assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div> 
                <!-- End row -->
            </div>
            <!-- End Topbar -->
      





