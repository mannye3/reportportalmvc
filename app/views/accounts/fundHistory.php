
                <div class="page-content fade-in-up">
                    <!-- BEGIN: Page heading-->
                    <!-- BEGIN: Page content-->
                    <div>
                        <div class="row">
                            <!-- <div class="col-md-3"><button class="btn btn-primary btn-rounded btn-block mb-5"><span class="btn-icon"><i class="ti-plus"></i>New Question</span></button>
                                <div class="nav flex-column contacts-filter-nav"><a class="nav-link d-flex align-items-center active" href="javascript:;"><i class="mr-3 ft-grid font-20" role="img"></i>All Contacts</a><a class="nav-link d-flex align-items-center" href="javascript:;"><i class="mr-3 ft-users font-20"></i>Frequently Contacted</a><a class="nav-link d-flex align-items-center" href="javascript:;"><i class="mr-3 ft-star font-20"></i>Starred Contacts</a></div>
                            </div> -->
                            <div class="col-md-12">
                                 <div class="card">
                          <div class="card-body">
                                <h5 class="box-title">Fund History</h5>
                                <div class="flexbox mb-4">
                                   <!--  <div class="flexbox"><label class="mb-0 mr-2">Type:</label><select class="selectpicker form-control show-tick" id="type-filter" title="Please select" data-width="150px">
                                            <option value="">All Clients</option>
                                            <option>Confirmed</option>
                                            <option>Pending</option>
                                            <option>Shipped</option>
                                            <option>Completed</option>
                                            <option>Pending</option>
                                            <option>Canceled</option>
                                        </select></div> -->
                                    <div class="input-group-icon input-group-icon-right mr-3"><span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span><input class="form-control form-control-rounded" id="key-search" type="text" placeholder="Search ..."></div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered w-100" id="dt-filter">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Amount</th>
                                                <th>Fund Code</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Status</th>  
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php  $count = 0; foreach($data['my_funds'] as $my_funds) :  $count++; ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $my_funds->amount; ?></td>
                                               <td><?php echo $my_funds->fundcode; ?></td>
                                                <td><?php echo $my_funds->tran_date; ?></td>
                                                 <td><?php echo $my_funds->pay_description; ?></td>


                                                <td>
                                                    <?php    
                                        if ($my_funds->status  == 1){
                                            echo '<span class="badge badge-success badge-pill">Approved</span></span>';
                                                        }
                                            ?>

                                            <?php

                                                if ($my_funds->status == 0){
                                                echo ' <span class="badge badge-danger badge-pill">Pending</span></span>';
                                            }
                                            ?>




                                            </td>
                                            </tr>
                                           <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div><!-- END: Page content-->
                </div><!-- BEGIN: Footer-->