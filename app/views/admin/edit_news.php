
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">News</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                               
                                <li class="breadcrumb-item active" aria-current="page">Edit News</li>
                            </ol>
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
                    <div class="col-lg-7 col-xl-6">
                        <div class="card m-b-30">
                            
                            <div class="card-body">
                               <form id="login-form" action="<?php echo URLROOT; ?>/admins/edit_news/<?php echo $data['news_info']->id; ?>" enctype="multipart/form-data" method="post">


                                    <div class="form-group row">
                                        <label for="productTitle" class="col-sm-12 col-form-label">News Title</label>
                                        <div class="col-sm-12">
                                            <input type="text" value="<?php echo $data['news_info']->page_title; ?>" name="title" class="form-control font-20" id="productTitle" placeholder="Title">
                                        </div>
                                    </div>                                     
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-form-label">Description</label>
                                        <div class="col-sm-12">
                                            <textarea name="editor1"><?php echo $data['news_info']->page_content; ?></textarea>
                                        <script>
                                                CKEDITOR.replace( 'editor1' );
                                        </script>
                                        </div>
                                    </div>

                                <!-- <div class="form-group row">
                                        <label for="productTitle" class="col-sm-12 col-form-label">Feature Picture</label>
                                        <div class="col-sm-12">
                                             <input type="file" name="file" class="dropify" data-height="300"> 
                                        </div>
                                    </div> -->

                                <button type="type" name="submit" class="btn btn-primary btn-lg">Submit</button>
                                </form>
                            </div>
                            

                        </div>
                                          
                            </div>

                        <div class="col-lg-7 col-xl-6">
                        <div class="card m-b-30">
                            
                            <div class="card-body">
                               <form id="login-form" action="<?php echo URLROOT; ?>/admins/edit_newspicture/<?php echo $data['news_info']->id; ?>" enctype="multipart/form-data" method="post">


                                <div class="form-group row">
                                        <label for="productTitle" class="col-sm-12 col-form-label">Update Feature Picture</label>
                                        <div class="col-sm-12">
                                             <input type="file" name="file" class="dropify" data-default-file="<?php echo URLROOT; ?>/news_pics/<?php echo $data['news_info']->picture; ?>" data-height="300"> 
                                        </div>
                                    </div>

                                <button type="type" name="submit" class="btn btn-primary btn-lg">Submit</button>
                                 </form>
                            </div>


                        </div>
                                          
                            </div>
                            <!-- End col -->
                   

                   



                     
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>

            