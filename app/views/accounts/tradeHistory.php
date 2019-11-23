
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Trade History</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/accounts">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Trade History</li>
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
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                         <tr>
                                            <th>SN</th>
                                            <th>Buyer Name</th>
                                            <th>Buyer Broker Code</th>
                                            <th>Seller Name</th>
                                            <th>Seller Broker Code</th>
                                            <th>Volume</th>
                                            <th>Price</th>
                                            <th>Trade Date</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                         <?php  $count = 0; foreach($data['get_report'] as $get_report) :  $count++; ?>
                                       <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $get_report->BUYER_NAME; ?> </td>
                                            <td><?php echo $get_report->TO_MEMBER; ?></td>
                                            <td><?php echo $get_report->SELLER_NAME; ?></td>  
                                            <td><?php echo $get_report->FROM_MEMBER; ?></td>
                                            <td><?php echo $get_report->VOLUME; ?></td>
                                            <td><?php echo $get_report->PRICE/10000; ?></td>
                                            <td><?php echo date("m-d-Y", strtotime($get_report->TRADE_DATE));?>



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
