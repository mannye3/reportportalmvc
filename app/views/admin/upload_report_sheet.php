
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Upload Report Sheet</h4>
                        <div class="breadcrumb-list">
                            
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
                    <div class="col-lg-7 col-xl-8">
                        <div class="card m-b-30">
                            
                            <div class="card-body">
                               <form id="login-form" action="<?php echo URLROOT; ?>/admins/upload_reportsheet" enctype="multipart/form-data" method="post">


                                    <div class="form-group row">
                                        <label for="productTitle" class="col-sm-12 col-form-label">Company Name</label>
                                        <div class="col-sm-12">
                                            <input readonly=""  class="form-control font-20" value="<?php echo $data['user_info']->company; ?>">
                                        </div>

                                        
                                    </div> 

                                      <div class="form-group row">
                                        <label for="productTitle" class="col-sm-12 col-form-label">Symbol</label>
                                        <div class="col-sm-12">
                                            <input readonly="" name="symbol" class="form-control font-20" value="<?php echo $data['user_info']->symbol; ?>">
                                        </div>

                                        
                                    </div>  


                                     <div class="form-group row">
                                        <label for="productTitle" class="col-sm-12 col-form-label">Title</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="title" class="form-control font-20" >
                                        </div>

                                        
                                    </div>   

                                     <div class="form-group row">
                                        <label for="productTitle" class="col-sm-12 col-form-label">Year</label>
                                        <div class="col-sm-12">
                                             <select name="year"  required="" class="form-control select2">
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                            </select>
                                            
                                        </div>

                                        
                                    </div>                                     
                                   

                                <div class="form-group row">
                                        <label for="productTitle" class="col-sm-12 col-form-label">Upload Sheet</label>
                                        <div class="col-sm-12">
                                             <input type="file" name="file" class="dropify" data-height="300"> 
                                        </div>
                                    </div>

                                <button type="type" name="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>

                        </div>
                                          
                            </div>
                            <!-- End col -->
                   

                   



                     </form>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>

            