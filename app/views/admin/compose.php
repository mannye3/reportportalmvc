
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Compose</h4>
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
                            <div class="card m-b-30">
                                <div class="card-header">
                                    <h5 class="card-title">New Message</h5>
                                </div>
                                <div class="card-body">
                                <?php flash('alert_message'); ?>                                  
                                    <form action="<?php echo URLROOT; ?>/admins/admin_compose" method="post">
                                        <div class="form-group row">
                                            <label for="emailTo" class="col-sm-2 col-form-label">To</label>
                                            <div class="col-sm-10">
                                                <select class="form-control"  name="receiver_symbol" >
                                            <?php foreach($data['load_users'] as $load_users) : ?>
                                                <option value="<?php echo $load_users->symbol; ?>"><?php echo $load_users->symbol; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                              
                                                
                                            </div>
                                        </div>
                                        
                                        
                                        

                                        <div class="form-group row">
                                            <label for="emailSubject" class="col-sm-2 col-form-label">Subject</label>
                                            <div class="col-sm-10">
                                                <input name="subject" required="" type="text" class="form-control <?php echo (!empty($data['subject_err'])) ? 'is-invalid' : ''; ?>" id="emailSubject" placeholder="Subject">
                                                <span class="invalid-feedback"><?php echo $data['subject_err']; ?></span>
                                            </div>
                                        </div>                                      
                                        <div class="form-group row">
                                            <label for="emailSubject" class="col-sm-2 col-form-label">Message</label>
                                            <div class="col-sm-10">
                                                <textarea name="message"  class="summernote"></textarea>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary-rgba my-1"><i class="feather icon-send mr-2"></i>Send</button>
                                                <!-- <button type="submit" class="btn btn-success-rgba my-1"><i class="feather icon-save mr-2"></i>Save</button>
                                                <button type="submit" class="btn btn-danger-rgba my-1"><i class="feather icon-trash mr-2"></i>Delete</button> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
