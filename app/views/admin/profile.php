<?php foreach($data['total_funds'] as $total_funds) : ?>
         <?php endforeach; ?>


                <div class="page-content fade-in-up">
                    <!-- BEGIN: Page heading-->
                    <!-- BEGIN: Page content-->
                    <div>
                        <div class="bg-white pt-4 px-5" style="margin: -30px -30px 40px">
                            <div class="flexbox mb-4 mt-3">
                                <div class="media"><span class="position-relative d-inline-block mr-4"><img class="rounded-circle" src="<?php echo URLROOT; ?>/user/assets/img/users/admin-image.png" alt="image" width="100" /><span class="badge-point badge-success avatar-badge" style="bottom: 5px;right: 14px;height: 14px;width: 14px;"></span></span>
                                    <div class="media-body">
                                        <div class="h4"><?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></div>
                                       <!--  <div class="text-muted">Web Developer</div> -->
                                    </div>
                                </div>
                            </div>
                            <ul class="nav line-tabs m-0">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-1"><i class="ti-user nav-tabs-icon"></i>Home</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-2"><i class="ti-settings nav-tabs-icon"></i>Password Update</a></li>
                              <!--   <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-2"><i class="ti-pulse nav-tabs-icon"></i>Password Update</a></li> -->
                            </ul>
                        </div>
                        <div class="tab-content mt-5">
                            <div class="tab-pane fade show active" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="card">
                                             <div class="card-body">
                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="box-title mb-0">Information</h5><a href="#"><i class="ti-pencil"></i> Edit</a>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-6 text-muted">Full Name:</div>
                                            <div class="col-6"><i class="fa fa-address-card"></i> <?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></div>
                                        </div>
                                         <div class="row mb-2">
                                            <div class="col-6 text-muted">Email:</div>
                                            <div class="col-6"><i class="fa fa-envelope"></i> <?php echo $_SESSION['user_email']; ?></div>
                                        </div>
                                         <div class="row mb-2">
                                            <div class="col-6 text-muted">Account Currency:</div>
                                            <div class="col-6"><i class="fa fa-money"></i> <?php echo $_SESSION['currency_type']; ?></div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-6 text-muted">Account Balance:</div>
                                            <div class="col-6"><i class="fa fa-money"></i> <?php echo number_format($total_funds->totalamount);  ?></div>
                                        </div>

                                        <!-- <div class="row mb-2">
                                            <div class="col-6 text-muted">Last Name:</div>
                                            <div class="col-6"></div>
                                        </div> -->
                                       
                                       <!--  <div class="row mb-2">
                                            <div class="col-6 text-muted">Address:</div>
                                            <div class="col-6"><?php echo $_SESSION['fname']; ?></div>
                                        </div> -->
                                        <div class="row mb-2">
                                            <div class="col-6 text-muted">Phone:</div>
                                            <div class="col-6"><i class="fa fa-phone"></i> <?php echo $_SESSION['user_phone']; ?></div>
                                        </div>


                                        

                                         <?php   
                                        if ($_SESSION['status']  == 1){
                                            echo '<div class="row mb-2">
                                            <div class="col-6 text-muted">Status:</div>
                                            <div class="col-6"><i class="fa fa-lock"></i> Verified</div>
                                        </div>';
                                                        }
                                            ?>


                                             <?php   
                                        if ($_SESSION['status']  == 0){
                                            echo '<div class="row mb-2">
                                            <div class="col-6 text-muted">Status:</div>
                                            <div class="col-6"><i class="fa fa-lock"></i> Unverified</div>
                                        </div>';
                                                        }
                                            ?>

                                           
                                           
                                         <div class="row mb-2">
                                            <div class="col-6 text-muted">Date Registered:</div>
                                            <div class="col-6"><i class="fa fa-calendar"></i> <?php echo $_SESSION['reg_date']; ?></div>
                                        </div>


                                       
                                    </div>
                                     <div class="col-lg-3">
                                     </div>
                                        </div>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2">
                                <div class="card">
                                     <div class="card-body">
                                         <?php flash('alert_message'); ?>
                                        <h4 class="box-title">Password Update</h4>
                                        <form id="login-form" action="<?php echo URLROOT; ?>/accounts/edit_password" method="post">
                                            <div class="row">
                                               
                                                <div class="col-sm-6">
                                                    <input type="hidden" name="id" value="<?php echo $_SESSION['user_id']; ?>">
                                                    <div class="md-form"><input minlength="6" class="md-form-control" name="password" id="password" type="password" placeholder="Enter New Password" ><label>New Password</label></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="md-form"><input class="md-form-control" id="confirm_password" type="password" placeholder="Confirm Password"><label>Confirm Password</label></div>
                                                </div>
                                               
                                            </div>
                                           
                                            
                                            <div class="form-group"><button class="btn btn-primary mr-2 waves-effect waves-light" type="submit">SUBMIT</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="tab-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="box-title">Settings</h4>
                                        <form action="javascript:;">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="md-form"><input class="md-form-control" type="text" value="<?php echo $_SESSION['fname']; ?>"><label>First Name</label></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="md-form"><input class="md-form-control" type="text" value="<?php echo $_SESSION['lname']; ?>"><label>Last Name</label></div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group-icon input-group-icon-right mb-4">
                                                        <div class="md-form mb-4"><input class="md-form-control m-0" type="text" value="New York, USA 228 Park Ave Str."><label>Address</label><span class="input-icon input-icon-right"><i class="material-icons">place</i></span></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group-icon input-group-icon-right mb-4">
                                                        <div class="md-form mb-4"><input class="md-form-control m-0" type="text" value="Web Designer"><label>Position</label><span class="input-icon input-icon-right"><i class="material-icons">work</i></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group-icon input-group-icon-right mb-4">
                                                        <div class="md-form mb-4"><input class="md-form-control m-0" type="text" value="+1-202-555-0134"><label>Phone</label><span class="input-icon input-icon-right"><i class="material-icons">phone</i></span></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group-icon input-group-icon-right mb-4">
                                                        <div class="md-form mb-4"><input class="md-form-control m-0" type="text" value="johndue@gmail.com"><label>Email</label><span class="input-icon input-icon-right"><i class="material-icons">email</i></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-5"><label>Gender</label>
                                                <div><label class="radio radio-inline radio-primary"><input type="radio" name="a" checked=""><span>Male</span></label><label class="radio radio-inline radio-primary"><input type="radio" name="a"><span>Female</span></label></div>
                                            </div>
                                            <div class="form-group"><button class="btn btn-primary mr-2 waves-effect waves-light" type="submit">SUBMIT</button><button class="btn btn-light waves-effect" type="reset">CLEAR</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div><!-- END: Page content-->
                </div><!-- BEGIN: Footer-->
                