
                <div class="page-content fade-in-up">
                    <!-- BEGIN: Page heading-->
                    <div class="page-heading">
                        <div class="page-breadcrumb">
                            <h1 class="page-title page-title-sep">Withdraw Fund </h1>
                           
                        </div>
                    </div><!-- BEGIN: Page content-->
                    <div>
                        <div class="row">
                         
                            <div class="col-md-10">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        
                                      <!--   <h5 class="mb-3">Choose a Coin</h5> -->
                                    

                                         <div class="tab-content mt-5">

                                            <?php flash('alert_message'); ?>

                                            <div class="tab-pane fade show active" id="tab-1">
                                <div class="card">
                                    <div class="card-body">
                                       
                                         <div class="alert alert-primary has-icon" role="alert"><i class="fa fa-info alert-icon"></i>Please Note that Minimum Withdrawal Amount is $300. Contact support@vertexoptions.com for a more detailed description. Ensure to provide your Withdrawal Code when contacting support. If you encounter any issue while withdrawing from your account, please contact support@vertexoptions.com for assistance.</div>
                                        
                                        <form id="login-form" action="<?php echo URLROOT; ?>/accounts/withdrawFund" method="post">
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
                                                    <div class="form-group"><label for="exampleInputEmail1">Withdrawal Type</label><select name="withdrawal_type"  class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp">
                                                           <option value="Bank Transfer">Bank Transfer</option>
                                                                <option value="Bitcoin">Bitcoin</option>
                                                                <option value="Others">Others</option>
                                                        </select></div>
                                                </div>
                                                 
                                                <div class="col-sm-12">
                                                    <div class="input-group-icon input-group-icon-right mb-4">
                                                        <div class="md-form mb-4">
                                                    <textarea class="md-form-control m-0" name="withdrawal_description" value="Enter Description(optional)"></textarea>

                                                            <label>Description</label><span class="input-icon input-icon-right"></span></div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                       
                                            <div class="form-group"><button type="submit" class="btn btn-primary mr-2 waves-effect waves-light" type="submit">SUBMIT</button></div>
                                        </form>
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