
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Inbox</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/accounts">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Inbox</li>
                            </ol>
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
                       <?php require APPROOT . '/views/inc/msg_nav.php'; ?>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-9">
                        <div class="email-rightbar">
                            <div class="card m-b-30">
                                <!-- <div class="card-header">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><i class="feather icon-square font-20"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="feather icon-download font-20"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="feather icon-alert-octagon font-20"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="feather icon-trash font-20"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="feather icon-clock font-20"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="feather icon-folder font-20"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="feather icon-tag font-20"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="feather icon-more-vertical- font-20"></i></a></li>
                                        <li class="list-inline-item float-right"><a href="#"><i class="feather icon-settings font-20"></i></a></li>
                                    </ul>
                                </div> -->
                               <div class="card-body">                                    
                                    <div class="table-responsive">
                                          <?php flash('alert_message'); ?>  
                                        <table class="table table-hover table-borderless">                                            
                                            <tbody>
                                                 <?php $count = 0; foreach($data['inbox'] as $inbox_msg) : $count++;  ?>
                                                <tr class="email-unread">                                                    
                                                    <td>(<?php echo $count; ?>)</td>
                                                   
                                                    <td><a href="<?php echo URLROOT; ?>/accounts/open_message/<?php echo $inbox_msg->msg_code; ?>"><?php echo substr($inbox_msg->subject,0,35); ?></a></td>                             
                                                    <td><a href="<?php echo URLROOT; ?>/accounts/open_message/<?php echo $inbox_msg->msg_code; ?>">
                                                        

                                                        <?php   
                                                    if ($inbox_msg->read_status  == 1){
                                                        echo '<span class="badge badge-success-inverse mr-2">New</span>';
                                                                    }
                                                        ?>

                                                        <?php   
                                                    if ($inbox_msg->msg_status  == 1){
                                                        echo '<span class="badge badge-danger-inverse mr-2">Urgent</span>';
                                                                    }
                                                        ?>
                                                        

                                                        
                                                        <p class="mt-1 mb-0 font-14"><?php 

                                                           echo substr($inbox_msg->message,0,35); ?> ...</p></td></a>
                                                    <td><?php echo $inbox_msg->msg_date; ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- <div class="card-footer">
                                    <div class="row">
                                        <div class="col-6 col-md-6 align-self-center">
                                            <div class="email-show-label">
                                                <span> Show : 1 - 10 of 590</span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 align-self-center">
                                            <div class="email-pagination float-right">
                                              <ul class="pagination mb-0">
                                                <li class="page-item">
                                                  <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                  </a>
                                                </li>
                                                <li class="page-item">
                                                  <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                  </a>
                                                </li>
                                              </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- End col -->                    
                </div>
                <!-- Start row -->
            </div>
          