<body>
    <div class="page-wrapper">
        <div class="auth-wrapper">
            <div class="card auth-content mb-0">
                <div class="card-body py-5">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 text-primary">Reidius</h3>
                        <div class="font-18 text-center">Login to Your Account</div>
                         <?php flash('register_success'); ?>
                    </div>
                    <form id="login-form" action="<?php echo URLROOT; ?>/users" method="post">

                        <div class="form-group mb-4"><label>Email Address</label>
                            <p style=" color: red;"><?php echo $data['email_err']; ?></p>
                            <input class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" type="email" name="email" id="emailaddress" value="<?php echo $data['email']; ?>" required="" placeholder="Enter your email"></div>
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>



                        
                        <div class="mb-4">

                             <div class="form-group mb-4"><label>Password</label>
                                  <p style=" color: red;"><?php echo $data['password_err']; ?></p>
                                  <input class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"  type="password" name="password" aria-describedby="emailHelp" value="<?php echo $data['password']; ?>" ></div>
                              <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                        </div>

                        <div class="flexbox mb-5"><label class="ui-switch switch-solid"><input type="checkbox" checked=""><span class="ml-0"></span> Remember Me</label><a href="forgot-password.html">Forgot password?</a></div>
                        <button class="btn btn-primary btn-rounded btn-block" type="submit">LOGIN</button>

                    </form>
                    <div class="text-center mt-5 font-13">
                        <div class="mb-2 text-muted"><p class="mt-5 mb-4 text-muted text-center">Don't Have An Account? - <a href="<?php echo URLROOT; ?>/users/register">Sign Up </a> </p></div>
                       
                    </div>
                </div>
            </div><a class="btn btn-link home-link" href="<?php echo URLROOT; ?>"><span class="btn-icon"><i class="ti-arrow-left font-20"></i>Go Home</span></a>
        </div>
    </div><!-- BEGIN: Page backdrops-->
   