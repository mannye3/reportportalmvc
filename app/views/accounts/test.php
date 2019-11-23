
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
                                <?php echo  $data['properties_info']->Security; ?>
                       
                            </div>
                            <div class="card-body">
                               
                                <div class="table-responsive">
                                    <table class="table foo-filtering-table" data-filtering="true">
                                        <thead>
                                        <tr>
                                            <th data-breakpoints="xs">SN</th>
                                            
                                            <th>Title</th>
                                            <th>Blog Content</th>
                                            
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                             <?php $count = 0; foreach($data['properties_info'] as $properties_info) : $count++; ?>
                                              <?php foreach($data['getthings'] as $agents_pro) : ?>

                                        <tr>

                                            

                                            <td><?php echo $count;  ?></td>
                                            
                                            <td><?php echo substr($properties_info->Security,0,20); ?></a></td>
                                            <td><?php echo substr($properties_info->type,0,100); ?></td>
                                            
                                          
                                            
                                        </tr>
                                        
                                         
                                     
                                        <?php endforeach; ?>
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

