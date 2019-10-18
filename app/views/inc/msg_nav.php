<div class="col-lg-3">
                        <div class="email-leftbar">
                            <div class="card m-b-30">
                                <div class="card-header text-center">
                                    <a href="<?php echo URLROOT; ?>/accounts/compose" class="btn btn-danger-rgba btn-lg btn-block py-2 px-0 font-18"><i class="feather icon-plus mr-2"></i>Compose</a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                      <li class="list-group-item d-flex justify-content-between align-items-center">
                                        
                                        <a href="<?php echo URLROOT; ?>/accounts/inbox" class="active"><i class="feather icon-inbox mr-2"></i>Inbox</a>
                                        <span class="badge badge-primary-inverse text-primary">9</span>
                                      </li>
                                      
                                
                                      <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="<?php echo URLROOT; ?>/accounts/sent"><i class="feather icon-send mr-2"></i>Sent</a>
                                        <span class="badge badge-secondary-inverse"><?php echo $data['total_sent']->totalmsgsent; ?></span>                                        
                                      </li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>