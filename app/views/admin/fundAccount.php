
                <div class="page-content fade-in-up">
                    <!-- BEGIN: Page heading-->
                    <div class="page-heading">
                        <div class="page-breadcrumb">
                            <h1 class="page-title page-title-sep">Fund Account</h1>
                           
                        </div>
                    </div><!-- BEGIN: Page content-->
                    <div>
                        <div class="row">
                         
                            <div class="col-md-10">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        
                                      <!--   <h5 class="mb-3">Choose a Coin</h5> -->
                                        <ul class="nav line-tabs nav-justified line-tabs-2x line-tabs-solid mb-5">
                                            <li class="nav-item"><a class="nav-link active text-center" data-toggle="tab" href="#tab-1"><i class="fa fa-money font-26 text-primary mb-2"></i><br><span class="text-muted">Bank Transfer</span></a></li>

                                            <li class="nav-item"><a class="nav-link text-center" data-toggle="tab" href="#tab-2"><i class="fa fa-btc font-26 text-primary mb-2"></i><br><span class="text-muted">Bitcoin</span></a></li>

                                            <li class="nav-item"><a class="nav-link text-center" data-toggle="tab" href="#tab-3"><i class="fa fa-credit-card font-26 text-primary mb-2"></i><br><span class="text-muted">Credit Card</span></a></li>


                                             <li class="nav-item"><a class="nav-link text-center" data-toggle="tab" href="#tab-4"><i class="fa fa-bank font-26 text-primary mb-2"></i><br><span class="text-muted">Others</span></a></li>


                                            
                                        </ul>

                                         <div class="tab-content mt-5">

                                            <?php flash('alert_message'); ?>

                                            <div class="tab-pane fade show active" id="tab-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="box-title">Bank Transfer</h4>
                                         <div class="alert alert-primary has-icon" role="alert"><i class="fa fa-info alert-icon"></i>Please Note that Minimum Fund Amount is $500. Contact payments@vertexoptions.com for a more detailed description. our account will be credited once your payment is confirmed</div>
                                        
                                        <form id="login-form" action="<?php echo URLROOT; ?>/accounts/fundAccount" method="post">
                                            <div class="row">

                                                    <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Username</label><input class="form-control" readonly="" name="username" id="exampleInputEmail1"  value="<?php echo $_SESSION['username']; ?>" type="text" aria-describedby="emailHelp"></div>
                                                </div>

                                               

                                                   
                                               <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Amount</label>
                                                        
                                                        <input required="" class="form-control  <?php echo (!empty($data['amount_err'])) ? 'is-invalid' : ''; ?>" name="amount" id="exampleInputEmail1" type="number"  aria-describedby="emailHelp"></div>
                                                     <span class="invalid-feedback"><?php echo $data['amount_err']; ?></span>
                                                </div>
                                                <div class="col-sm-12">

                                                    <div class="form-group"><label for="exampleInputEmail1">Fund Code</label><input readonly="" value="<?php echo $_SESSION['fundcode']; ?>" class="form-control" name="fundcode" id="exampleInputEmail1" type="text" aria-describedby="emailHelp"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="input-group-icon input-group-icon-right mb-4">
                                                        <div class="md-form mb-4">
                                                            <textarea class="md-form-control m-0" name="pay_description" value="Enter Description(optional)"></textarea>

                                                            <label>Description</label><span class="input-icon input-icon-right"></span></div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                       
                                            <div class="form-group"><button type="submit" class="btn btn-primary mr-2 waves-effect waves-light" type="submit">SUBMIT</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-2">
                                <div class="card">
                                     <div class="card-body">
                                         <h4 class="box-title">Bitcoin</h4>

                                         <div class="alert alert-primary has-icon" role="alert"><i class="fa fa-info alert-icon"></i>Please Note that Minimum Fund Amount is $500. Contact payments@vertexoptions.com for a more detailed description. our account will be credited once your payment is confirmed</div>

                                         <hr class="my-4">
                                        <p class="text-muted"></p>
                                        <ul class="list-unstyled">
                                            <li class="d-flex align-items-center mb-2"><i class="material-icons text-success mr-2">check</i> Copy the wallet address provided below.</li>
                                            <li class="d-flex align-items-center mb-2"><i class="material-icons text-success mr-2">check</i> Make payment from your Bitcoin wallet. (Send the equivalent bitcoin amount of the amount you wish to invest).

                                            </li>
                                            <li class="d-flex align-items-center"><i class="material-icons text-success mr-2">check</i> Provide your transaction hash ID. This can be gotten from your wallet after payment.</li>

                                            <li class="d-flex align-items-center"><i class="material-icons text-success mr-2">check</i> Click on Submit.</li>
                                        </ul>

                                        <p>Your account will be credited once your payment is confirmed.
                                            NOTE: If you have problems finding your Transaction Hash ID, Use the last 10 digits of your wallet address as the Transaction Hash ID.
                                            If you encounter any issue while funding your account, please contact payments@vertexoptions.com for assistance.</p>

                                       
                                       <form id="login-form" action="<?php echo URLROOT; ?>/accounts/fundAccountBtc" method="post">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Username</label><input class="form-control" readonly="" name="username" id="exampleInputEmail1"  value="<?php echo $_SESSION['username']; ?>" type="text" aria-describedby="emailHelp"></div>
                                                </div>

                                                 <div class="col-sm-12">

                                                    <div class="form-group"><label for="exampleInputEmail1">Fund Code</label><input readonly="" value="<?php echo $_SESSION['fundcode']; ?>" class="form-control" name="fundcode" id="exampleInputEmail1" type="text" aria-describedby="emailHelp"></div>
                                                </div>

                                                  <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Amount</label>
                                                      
                                                        <input required="" class="form-control  <?php echo (!empty($data['amount_err'])) ? 'is-invalid' : ''; ?>" name="amount" id="exampleInputEmail1" type="number"  aria-describedby="emailHelp"></div>
                                                     <span class="invalid-feedback"><?php echo $data['amount_err']; ?></span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Send Payment to: Bitcoin Address:</label>
                                                    <div class="md-form"><p style="color: red;" id="p1">1DQMVNadnodke4XMJ9ATpGHm9G8Wt8fYUe</p>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-6">
                                                    <div class="md-form"><button  onclick="copyToClipboard('#p1')" class="btn btn-primary mr-2 waves-effect waves-light">Copy Address</button>
                                                    </div>
                                                </div>

                                                  <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Senders Wallet Address:</label>
                                                       
                                                        <input required="" class="form-control" name="senderWallAdd" id="exampleInputEmail1" type="text"  aria-describedby="emailHelp"></div>
                                                    
                                                </div>


                                                 <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">STransaction HASH ID:</label>
                                                       
                                                        <input required="" class="form-control" name="sTransaction" id="exampleInputEmail1" type="text"  aria-describedby="emailHelp"></div>
                                                     
                                                </div>



                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="input-group-icon input-group-icon-right mb-4">
                                                        <div class="md-form mb-4">
                                                            <textarea class="md-form-control m-0" name="pay_description" value="Enter Description(optional)"></textarea>


                                                            <label>Description</label><span class="input-icon input-icon-right"></span></div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                       
                                            <div class="form-group"><button type="submit" class="btn btn-primary mr-2 waves-effect waves-light" type="submit">SUBMIT</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="box-title">Credit Card</h4>
                                         <div class="alert alert-primary has-icon" role="alert"><i class="fa fa-info alert-icon"></i>Please Note that Minimum Fund Amount is $500. Contact payments@vertexoptions.com for a more detailed description. our account will be credited once your payment is confirmed</div>
                                      <form id="login-form" action="<?php echo URLROOT; ?>/accounts/fundAccountBtc" method="post">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Username</label><input class="form-control" readonly="" name="username" id="exampleInputEmail1"  value="<?php echo $_SESSION['username']; ?>" type="text" aria-describedby="emailHelp"></div>
                                                </div>

                                                 <div class="col-sm-12">

                                                    <div class="form-group"><label for="exampleInputEmail1">Fund Code</label><input readonly="" value="<?php echo $_SESSION['fundcode']; ?>" class="form-control" name="fundcode" id="exampleInputEmail1" type="text" aria-describedby="emailHelp"></div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Amount</label>
                                                      
                                                        <input required="" class="form-control  <?php echo (!empty($data['amount_err'])) ? 'is-invalid' : ''; ?>" name="amount" id="exampleInputEmail1" type="number"  aria-describedby="emailHelp"></div>
                                                     <span class="invalid-feedback"><?php echo $data['amount_err']; ?></span>
                                                </div>

                                                 <div class="col-sm-6">
                                                    <div class="form-group"><label for="exampleInputEmail1">Card Name</label><input name="cardname" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp"></div>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <div class="form-group"><label for="exampleInputEmail1">Card Number</label><input name="cardnumber" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp"></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group"><label for="exampleInputEmail1">Expiry Year</label><select name="expiry_year"  class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp">
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                        </select></div>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <div class="form-group"><label for="exampleInputEmail1">Expiry Month</label><select name="expiry_month"  class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp">
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                               
                                                        </select></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group"><label for="exampleInputEmail1">Card CVV</label><input name="card_cvv" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp"></div>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <div class="form-group"><label for="exampleInputEmail1">Card Pin</label><input name="card_pin" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" ></div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="input-group-icon input-group-icon-right mb-4">
                                                        <div class="md-form mb-4">
                                                            <textarea name="pay_description" class="md-form-control m-0" value="Enter Description(optional)"></textarea>

                                                            <label>Description</label><span class="input-icon input-icon-right"></span></div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        
                                           
                                            <div class="form-group"><button type="submit" class="btn btn-primary mr-2 waves-effect waves-light" type="submit">SUBMIT</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-4">
                                <div class="card">
                                   <div class="card-body">

                                    <h4 class="box-title">Others</h4>
                                    

                                         <div class="alert alert-primary has-icon" role="alert"><i class="fa fa-info alert-icon"></i>For Other Payment Methods Listed below, Please contact payments@vertexoptions.com for guidance on how to fund your account using any of them. The Support Team will guide you on funding your account using the below methods.</div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-3 mb-3"><img class="rounded-lg" src="<?php echo URLROOT; ?>/user/assets/img/products/mg.jpg" alt="image" /></div>
                                                    <div class="col-lg-3 mb-3"><img class="rounded-lg" src="<?php echo URLROOT; ?>/user/assets/img/products/wu.png"  alt="image" /></div>
                                                     <div class="col-lg-3 mb-3"><img class="rounded-lg" src="<?php echo URLROOT; ?>/user/assets/img/products/pp.png" alt="image" /></div>
                                                      <div class="col-lg-3 mb-3"><img class="rounded-lg" src="<?php echo URLROOT; ?>/user/assets/img/products/nt.jpg" alt="image" /></div>
                                                   
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>

                                    
                                </div>
                            </div>
                             
                          
                        </div>




<script type="text/javascript">
    function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>