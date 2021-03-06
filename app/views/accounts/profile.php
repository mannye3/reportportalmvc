
 <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Profile</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/accounts">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
            <div class="contentbar">
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-4 col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body text-center">
                                <div class="user-slider">
                                    <div class="user-slider-item">
                                        <img src="<?php echo URLROOT; ?>/assets/images/users/boy.svg" alt="avatar" width="100px" class="rounded-circle mt-3 mb-4">
                                        <h5><?php echo $_SESSION['username']; ?></h5>
                                         <p><?php echo $_SESSION['user_symbol']; ?></p>
                                        <p><?php echo $_SESSION['user_company']; ?></p>
                                        <p><?php echo $_SESSION['user_address']; ?></p>
                                    </div>
                                   
                                   
                                </div>                                        
                            </div>
                           <!--  <div class="card-footer text-center">
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <p class="my-2">Follow</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="my-2">Message</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div> 
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-8">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Edit Profile</h5>
                            </div>
                             <div class="card-body">
                               
                               <?php flash('post_message'); ?>
                               
                                 <form id="login-form" action="<?php echo URLROOT; ?>/accounts/edit_profile" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo $_SESSION['user_email']; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Phone</label>
                                            <input type="number" name="phone" class="form-control" id="inputEmail4" placeholder="Phone" value="<?php echo $_SESSION['user_phone']; ?>">
                                        </div>
                                        <!-- <div class="form-group col-md-6">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                        </div> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Company</label>
                                        <input name="company" value="<?php echo $_SESSION['user_company']; ?>" type="text" class="form-control" id="inputAddress" placeholder="Company">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Website</label>
                                        <input name="website" value="<?php echo $_SESSION['user_website']; ?>"  type="text" class="form-control" id="inputAddress" placeholder="Enter Website">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Address </label>
                                        <input name="address" value="<?php echo $_SESSION['user_address']; ?>" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                   <!--  <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">State</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div> -->
                                   <!--  <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            Check me out
                                            </label>
                                        </div>
                                    </div> -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>

                     <div class="col-lg-8">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Update Password</h5>
                            </div>
                             <div class="card-body">
                                <?php flash('alert_message'); ?>
                               
                                 <form id="login-form" action="<?php echo URLROOT; ?>/accounts/edit_password" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">New Password</label>
                                            <input name="password" type="password" class="form-control" id="password">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirm_password" >
                                        </div>
                                        <!-- <div class="form-group col-md-6">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                        </div> -->
                                    </div>
                                 
                                   
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                   
                    <!-- End col -->
                </div> <!-- End row -->
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2019 Orbiter - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
