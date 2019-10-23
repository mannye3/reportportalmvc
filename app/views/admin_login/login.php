<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                   <form id="login-form" action="<?php echo URLROOT; ?>/admin_logins" method="post">
                                        <div class="form-head">
                                            <a href="index.html" class="logo"><img src="assets/images/nasdlogop.jpg" class="img-fluid" alt="logo"></a>
                                        </div> 
                                        <h4>Welcome to NASD Issuers Portal</h4>                                   
                                        <h4 class="text-primary my-4">Log in !</h4>

                                        <div class="form-group">
                                             <p style=" color: red;"><?php echo $data['username_err']; ?></p>
                                            <input type="text" name="username" class="form-control <?php echo (!empty($data['username_err'])) ? 'is-invalid' : ''; ?>" placeholder="Enter Username here" required>
                                            <!--  <span class="invalid-feedback"><?php echo $data['username_err']; ?></span> -->
                                        </div>

                                       
                                        <div class="form-group">
                                            <p style=" color: red;"><?php echo $data['password_err']; ?></p>
                                            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"  placeholder="Enter Password here" required>
                                        </div>
                                 
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox text-left">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                  <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                                                </div>                                
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="forgot-psw"> 
                                                <a id="forgot-psw" href="user-forgotpsw.html" class="font-14">Forgot Password?</a>
                                              </div>
                                            </div>
                                        </div>                          
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in</button>
                                    </form>
                                    <!-- <div class="login-or">
                                        <h6 class="text-muted">OR</h6>
                                    </div> -->
                                   <!--  <div class="social-login text-center">
                                        <button type="submit" class="btn btn-primary-rgba font-18"><i class="mdi mdi-facebook mr-2"></i>Facebook</button>
                                        <button type="submit" class="btn btn-danger-rgba font-18"><i class="mdi mdi-google mr-2"></i>Google</button>
                                    </div> -->
                                   <!--  <p class="mb-0 mt-3">Don't have a account? <a href="user-register.html">Sign up</a></p> -->
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>









