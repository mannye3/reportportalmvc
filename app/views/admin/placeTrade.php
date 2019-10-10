
                <div class="page-content fade-in-up">
                    <!-- BEGIN: Page heading-->
                    <div class="page-heading">
                        <div class="page-breadcrumb">
                            <h1 class="page-title page-title-sep">Place Trade</h1>
                           
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
                                       
                                         <div class="alert alert-primary has-icon" role="alert"><i class="fa fa-info alert-icon"></i>Place a Random trade for our Software Robot. Trades place here are analyzed carefully and selected based on the anaylsis result. All winnings from your trades are summed and added to your account at the end of every trade circle (This could be 2 or 3 days). Ensure to enter a valid asset name, invalid asset names will be discarded.<i class="fa fa-link" style="color: orange;"> <a href="https://www.tradingview.com/markets/" target="_blank" style="color: orange;">Click HERE</a> to see the List of ALL Trading Assets.</i></div>
                                        
                                        <form id="login-form" action="<?php echo URLROOT; ?>/accounts/placeTrade" method="post">
                                            <div class="row">

                                                    <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Username</label><input class="form-control" readonly="" name="username" id="exampleInputEmail1"  value="<?php echo $_SESSION['username']; ?>" type="text" aria-describedby="emailHelp"></div>
                                                </div>

                                               

                                                   
                                               <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Trade Amount</label>
                                                        
                                                        <input required="" class="form-control  <?php echo (!empty($data['amount_err'])) ? 'is-invalid' : ''; ?>" name="amount" id="exampleInputEmail1" type="number"  aria-describedby="emailHelp"></div>
                                                     <span class="invalid-feedback"><?php echo $data['amount_err']; ?></span>
                                                </div>
                                                <div class="col-sm-12">

                                                    <div class="form-group"><label for="exampleInputEmail1">Asset Name: <small>Click <i class="fa fa-link" style="color: orange;"><a href="https://www.tradingview.com/markets/" target="_blank" style="color: orange;"> HERE</a></i> to see ALL</small></label><input class="form-control" name="asset_name" id="exampleInputEmail1" type="text" aria-describedby="emailHelp"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                 <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Select Asset Category:</label><select name="asset_type"  class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp">
                                                          <option value="All">All</option>
                                                      <option value="Stock">Stock</option>
                                                      <option value="Future">Future</option>
                                                      <option value="Forex">Forex</option>
                                                      <option value="CFD">CFD</option>
                                                      <option value="Cryptocurrency">Cryptocurrency</option>
                                                      <option value="Index">Index</option>
                                                      <option value="Economy">Economy</option>
                                                      <option value="Others">Others</option>
                                                        </select></div>
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