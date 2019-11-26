    <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <a href="#" class="logo logo-large"><img src="<?php echo URLROOT; ?>/assets/images/nasdlogop.jpg" class="img-fluid" alt="logo"></a>
                    <a href="#" class="logo logo-small"><img src="<?php echo URLROOT; ?>/assets/images/nasdlogop.jpg" class="img-fluid" alt="logo"></a>
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <?php if ($_SESSION['username'] == 'super_admin') : ?>
                            <ul class="vertical-menu">
                        <li>
                            <a href="<?php echo URLROOT; ?>/admins">
                              <img src="<?php echo URLROOT; ?>/assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>Dashboard</span>
                            </a>
                            
                        </li>

                        <li>
                            <a href="javaScript:void();">
                               <i class="fa fa-users"></i><span>Users</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="<?php echo URLROOT; ?>/admins/users">Users</a></li>
                                <li><a href="<?php echo URLROOT; ?>/admins/add_user">Add New</a></li>
                                
                            </ul>
                        </li>

                        
                         <li>
                            <a href="javaScript:void();">
                                <i class="fa fa-envelope"></i><span>Email</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                             <ul class="vertical-submenu">
                                <li><a href="<?php echo URLROOT; ?>/admins/inbox">Inbox</a></li>
                                <li><a href="<?php echo URLROOT; ?>/admins/sent">Sent</a></li>
                                
                            </ul>
                        </li>


                        <li>
                            <a href="javaScript:void();">
                                <i class="fa fa-newspaper-o"></i><span>News</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                             <ul class="vertical-submenu">
                                <li><a href="<?php echo URLROOT; ?>/admins/news">News</a></li>
                                <li><a href="<?php echo URLROOT; ?>/admins/add_news">Add News</a></li>
                                
                            </ul>
                        </li>

                        

                        <li>
                            <a href="<?php echo URLROOT; ?>/admin_logins/logout">
                             <i class="fa fa-sign-out"></i><span>Logout</span>
                            </a>
                            
                        </li>

                                         
                    </ul>
                    <?php endif; ?>


                       <?php if ($_SESSION['username'] !== 'super_admin') : ?>
                            <ul class="vertical-menu">
                        <li>
                            <a href="<?php echo URLROOT; ?>/accounts">
                              <img src="<?php echo URLROOT; ?>/assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>Dashboard</span>
                            </a>
                            
                        </li>



                        

                         <li>
                            <a href="javaScript:void();">
                                <img src="<?php echo URLROOT; ?>/assets/images/svg-icon/tables.svg" class="img-fluid" alt="tables"><span>Trades</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                             <ul class="vertical-submenu">
                                <li><a href="<?php echo URLROOT; ?>/trades">Live Trades</a></li>
                                <li><a href="<?php echo URLROOT; ?>/accounts/tradeHistory">Trade Report</a></li>
                                
                            </ul>
                        </li>

                         <li>
                            <a href="<?php echo URLROOT; ?>/accounts/fin_stat">
                              <i class="fa fa-newspaper-o"></i><span>Fin Statement</span>
                            </a>
                            
                        </li>

                         <li>
                            <a href="javaScript:void();">
                                <i class="fa fa-envelope"></i><span>Email</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                             <ul class="vertical-submenu">
                                <li><a href="<?php echo URLROOT; ?>/accounts/inbox">Inbox</a></li>
                                <li><a href="<?php echo URLROOT; ?>/accounts/sent">Sent</a></li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo URLROOT; ?>/accounts/news">
                              <i class="fa fa-newspaper-o"></i><span>News</span>
                            </a>
                            
                        </li>

                        <li>
                            <a href="<?php echo URLROOT; ?>/users/logout">
                             <i class="fa fa-sign-out"></i><span>Logout</span>
                            </a>
                            
                        </li>

                                         
                    </ul>
                    <?php endif; ?>


                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->