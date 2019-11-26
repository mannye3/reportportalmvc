
                <div class="page-content fade-in-up">
                    <!-- BEGIN: Page heading-->
                    <div class="page-heading">
                        <div class="page-breadcrumb">
                            <h1 class="page-title page-title-sep">Verify Account</h1>
                           
                        </div>
                    </div><!-- BEGIN: Page content-->
                    <div>
                        <div class="row">
                         
                            <div class="col-md-10">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        
                                      <!--   <h5 class="mb-3">Choose a Coin</h5> -->
                                    

                                         <div class="tab-content mt-5">

                                           

                                            <div class="tab-pane fade show active" id="tab-1">
                                <div class="card">
                                    <div class="card-body">
                                       
                                         <div class="alert alert-primary has-icon" role="alert"><i class="fa fa-info alert-icon"></i>Verify Your account by providing us with a vaild document (ID card). Drivers Licence, Valid Work ID Card, Passport, etc are accepted. Please do not try to upload a fake document as our support teams reviews every document uploaded. Detected fake documents will lead to immediate suspension of account! Once Uploaded, Our support team reviews your document and gets back to you within 3 working days. The uploaded documents are for verification purposes only and are deleted once confirmed. You will be notified via email once your document has been verified. Choose your document and click on the verify button.</div>

                                         <br>
                                          <?php flash('alert_message'); ?>

                                         <!-- <form method="post" action="<?php echo URLROOT; ?>/accounts/file_upload" enctype="multipart/form-data">
<input type="file" name="file" multiple="multiple" >
<p align="center"><button type="submit" class="btn btn-warning" id="butsave" name="submit">Submit<span class="glyphicon glyphicon-send"></span></button></p>
</form> -->
                                        
                                        <form id="login-form" action="<?php echo URLROOT; ?>/accounts/file_upload" enctype="multipart/form-data" method="post">
                                            <div class="row">

                                                    <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Username</label><input class="form-control" readonly="" name="username" id="exampleInputEmail1"  value="<?php echo $_SESSION['username']; ?>" type="text" aria-describedby="emailHelp"></div>
                                                </div>

                                               

                                                   
                                               <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Document Name</label>
                                                        
                                                        <input required="" placeholder="Enter Document Name" class="form-control  <?php echo (!empty($data['doc_name_err'])) ? 'is-invalid' : ''; ?>" name="doc_name" id="exampleInputEmail1" type="text"  aria-describedby="emailHelp"></div>
                                                     <span class="invalid-feedback"><?php echo $data['doc_name_err']; ?></span>
                                                </div>


                                                 <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Front Page of Document</label>
                                                        
                                                        <input required=""  class="form-control"  id="exampleInputEmail1" type="file" name="file"  aria-describedby="emailHelp"></div>
                                                    
                                                </div>


                                                <div class="col-sm-12">
                                                    <div class="form-group"><label for="exampleInputEmail1">Back Page of Document</label>
                                                        
                                                        <input required=""  class="form-control" type="file" name="file2"  aria-describedby="emailHelp"></div>
                                                     
                                                </div>
                                               
                                            </div>
                                           
                                       
                                            <div class="form-group"><button type="submit" class="btn btn-primary mr-2 waves-effect waves-light" name="submit" type="submit">SUBMIT</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                                    
                                </div>
                            </div>
                             
                          
                        </div>



