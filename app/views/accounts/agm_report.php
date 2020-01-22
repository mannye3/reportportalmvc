
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">AGM Report</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/accounts">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">AGM Report</li>
                            </ol>
                        </div>
                    </div>
                    <!-- <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                        </div>                        
                    </div> -->
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
                               <!--  <h5 class="card-title">Data Export Table</h5> -->
                            </div>
                            <div class="card-body">
                              <!--   <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6> -->
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                         <tr>
                                            <th>SN</th>
                                            <th>Title</th>
                                            <th>Year</th>
                                            <th>Action</th>
                                           
                                        </tr>

                                        </thead>
                                        <tbody>
                                         <?php  $count = 0; foreach($data['get_report'] as $get_report) :  $count++; ?>
                                       <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $get_report->title; ?> </td>
                                            <td><?php echo $get_report->year; ?></td>

                                             <td>
                                                    <div class="button-list">
                                                        <a download href="<?php echo URLROOT; ?>/<?php echo $get_report->report_sheet; ?>"  class="btn btn-primary-rgba">DOWNLOAD REPORT</i></a>
                                                        
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
