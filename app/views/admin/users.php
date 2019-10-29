
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Users</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/admins">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            
                            <a href="<?php echo URLROOT; ?>/admins/add_user"><button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Add New User</button></a>
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
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                         <tr>
                                            <th>SN</th>
                                            <th>Username</th>
                                            <th>Symbol</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Reg Date</th>
                                            <th>Action</th>
                                            
                                        </tr>

                                        </thead>
                                        <tbody>
                                         <?php  $count = 0; foreach($data['allusers'] as $allusers) :  $count++; ?>
                                       <tr>
                                            <td><?php echo $count; ?></td>
                                            <td> <?php echo $allusers->username; ?> </td>
                                            <td><?php echo $allusers->symbol; ?></td>
                                            <td><?php echo $allusers->email; ?></td>  
                                            <td><?php echo $allusers->phone; ?></td>
                                            <td><?php echo $allusers->reg_date; ?></td>


                                             <td>
                                                    <div class="button-list">
                                                        <a href="<?php echo URLROOT; ?>/admins/edit_user/<?php echo $allusers->id; ?>" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                                        <a href="<?php echo URLROOT; ?>/admins/delete_user/<?php echo $allusers->id; ?> " onclick="return confirm('Are you sure you want to DELETE USER ?')" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
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

            