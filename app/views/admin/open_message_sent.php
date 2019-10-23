

            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Open</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                <li class="breadcrumb-item"><a href="#">Email</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Compose</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                        </div>                        
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <?php require APPROOT . '/views/inc/adminmsg_nav.php'; ?>
                   
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-9">
                        <div class="email-rightbar">
                            <div class="card email-open-box m-b-30">
                                <div class="card-header">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><h5 class="mt-2 mb-0"><?php echo $data['open_msg']->subject; ?></h5></li>
                                        <li class="list-inline-item float-right"><a href="#"><i class="feather icon-trash font-20"></i></a></li>
                                        <li class="list-inline-item float-right"><a href="#"><i class="feather icon-printer font-20"></i></a></li>

                                    </ul>
                                </div>
                                <div class="card-body">                                    
                                    <div class="row m-b-30">
                                        <div class="col-md-5">
                                            <div class="media">
                                              <img class="align-self-center mr-3" src="<?php echo URLROOT; ?>/assets/images/users/men.svg" alt="Generic placeholder image">
                                              <div class="media-body">
                                                <h6 class="mt-0">NASD Admin</h6>
                                                
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="open-email-head">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item"><?php echo $data['open_msg']->msg_date; ?></li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="mt-0"><?php echo $data['open_msg']->subject; ?></h6>
                                           
                                            <p class="text-muted"><?php echo $data['open_msg']->message; ?></p>
                                           
                                        </div>
                                    </div>
                                   <!--  <div class="row mt-3">
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/email/file-attached-1.jpg" alt="Generic placeholder image">
                                                <div class="card-body text-center">
                                                    <button type="button" class="btn btn-secondary-rgba">Download</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/email/file-attached-2.jpg" alt="Generic placeholder image">
                                                <div class="card-body text-center">
                                                <button type="button" class="btn btn-secondary-rgba">Download</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="card-footer">
                                    <div class="open-email-footer">
                                        
                                        <div class="row text-right">
                                            <div class="col-md-12">


                                                 <a href="<?php echo URLROOT; ?>/accounts/delete_msg_sent/<?php echo $data['open_msg']->msg_code;?>" onclick="return confirm('Are you sure you want to DELETE MESSAGE ?')">
                                                <button type="button" class="btn btn-danger-rgba my-1">Delete<i class="feather icon-delete ml-2"></i></button></a>


                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
