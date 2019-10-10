   <div class="content-area">
                <!-- BEGIN: Header-->
                <nav class="navbar navbar-expand navbar-light fixed-top header">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link navbar-icon sidebar-toggler" id="sidebar-toggler" href="#"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a></li>
                       
                    </ul>
                    <ul class="navbar-nav">
                       
                       
                         <div id="google_translate_element"></div><script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        <li class="nav-divider"></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle no-arrow d-inline-flex align-items-center" data-toggle="dropdown" href="#"><span class="d-none d-sm-inline-block mr-2"><?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></span><span class="position-relative d-inline-block"><img class="rounded-circle" src="<?php echo URLROOT; ?>/user/assets/img/users/admin-image.png" alt="image" width="36" /><span class="badge-point badge-success avatar-badge"></span></span></a>
                            <div class="dropdown-menu dropdown-menu-right pt-0 pb-4" style="min-width: 280px;">
                                <div class="p-4 mb-4 media align-items-center text-white" style="background-color: #2c2f48;"><img class="rounded-circle mr-3" src="<?php echo URLROOT; ?>/user/assets/img/users/admin-image.png" alt="image" width="55" />
                                    <div class="media-body">
                                        <h5 class="mb-1"><?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></h5>
                                        <div class="font-13">Administrator</div>
                                    </div>
                                </div><a class="dropdown-item d-flex align-items-center" href="<?php echo URLROOT; ?>/accounts/profile"><i class="ft-user mr-3 font-18 text-muted"></i>Profile</a><a class="dropdown-item d-flex align-items-center" href="#"><i class="ft-message-square mr-3 font-18 text-muted"></i>Messages</a><a class="dropdown-item d-flex align-items-center" href="#"><i class="ft-settings mr-3 font-18 text-muted"></i>Settings</a>
                                <div class="dropdown-divider my-3"></div>
                                <div class="mx-4"><a class="btn btn-link p-0" href="<?php echo URLROOT; ?>/users/logout"><span class="btn-icon"><i class="ft-power mr-2 font-18"></i>Logout</span></a></div>
                            </div>
                        </li>
                        <li><a class="nav-link navbar-icon quick-sidebar-toggler" href="javascript:;"><span class="ti-align-right"></span></a></li>
                    </ul>
                </nav><!-- END: Header-->