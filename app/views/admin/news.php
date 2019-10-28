
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">News</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                               
                                <li class="breadcrumb-item active" aria-current="page">News</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            
                            <a href="<?php echo URLROOT; ?>/admins/add_news"><button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Add New User</button></a>
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
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <?php flash('alert_message'); ?>
                       
                            </div>
                            <div class="card-body">
                               
                                <div class="table-responsive">
                                    <table class="table foo-filtering-table" data-filtering="true">
                                        <thead>
                                        <tr>
                                            <th data-breakpoints="xs">SN</th>
                                            <th>Photo</th>
                                            <th>Title</th>
                                            <th>Blog Content</th>
                                            <th data-breakpoints="xs sm md">Published Birth</th>
                                            <th>Actions</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                             <?php  $count = 0; foreach($data['allnews'] as $allnews) :  $count++; ?>
                                        <tr>

                                            

                                            <td><?php echo $count;  ?></td>
                                             <td><img src="<?php echo URLROOT; ?>/news_pics/<?php echo $allnews->picture; ?>" class="img-fluid" width="35" alt="product"></td>
                                            <td><?php echo substr($allnews->page_title,0,20); ?></td>
                                            <td><?php echo substr($allnews->page_content,0,50); ?></td>
                                            <td><?php echo $allnews->date_published;  ?></td>
                                           <td>
                                                    <div class="button-list">
                                                        <a href="<?php echo URLROOT; ?>/admins/edit_news/<?php echo $allnews->id; ?>" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                                        <a href="<?php echo URLROOT; ?>/admins/delete_news/<?php echo $allnews->id; ?> " onclick="return confirm('Are you sure you want to DELETE NEWS ?')" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                                    </div>
                                                </td>
                                            
                                        </tr>
                                        
                                         
                                        <?php endforeach; ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>

