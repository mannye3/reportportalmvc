
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
                                                                <th>#</th>
                                                                <th>SYMBOL</th>
                                                                <th>OPEN</th>
                                                                <th>HIGH</th>
                                                                <th>HIGH QTY</th>
                                                                <!--<th>HIGH VALUE (N)</th>-->
                                                                <th>LOW</th>
                                                                <th>LOW QTY</th>
                                                                <!--<th>LOW VALUE (N)</th>-->
                                                                <th>DEALS</th>
                                                                <th>TOTAL QTY</th>
                                                                <th>TOTAL VALUE</th>
                                                                <th>CLOSE</th>
                                                                <th>% CHANGE</th>
                                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php $count = 0;  foreach ($data['obj_dec']  as $obj)  : 


                                                $security =  $obj->Security;
                                                  $totVol = $obj->totVol; 
                                                  $totVal =  $obj->totVal;
                                                  $maxprice = $obj->maxprice;
                                                  $maxqty = $obj->maxqty;
                                                  $minprice = $obj->minprice;
                                                  $minqty =  $obj->minqty;
                                                  $countall = $obj->countall;

                                             $count++; ?>

                                            <?php foreach($data['boyka'] as $boyka) :

                                                    $refprice = $boyka->refprice;
                                                   $closeprice = $boyka->closeprice;
                                                     $pecup = $refprice * 1.1;
                                                   $pecdown = $refprice * (1-0.1);


                                                   if($totVol >= 5000 ){
                                                                        
                                                                       $vwap = number_format( $totVal/$totVol,2);
                                                                      if($vwap >= $pecdown || $vwap >= $pecup){
                                                                          $price = $vwap;
                                                                      }
                                                                      else{
                                                                          $price = $refprice;
                                                                      }
                                                                    }elseif($totVol < 5000){
                                                                        
                                                                       
                                                                        $price = $refprice;
                                                                    }
                                                                  
                                                                  
                                                                    $change =   $price - $refprice ; 
                                                                         
                                                                        $percent = ($change / $refprice) * 100; 
                                                                         $percent = number_format($percent,2);
                                                                         



                    if($percent > 0){
            $percents = "<span style='color:#07fe00'> &#9650; ".$percent."</span>";
            $percentsB = "<span style='color:#07fe00'>&#9650;".$percent."</span>";
               }
             if($percent < 0){
             $percents = "<span style='color:red'> &#9660; ".$percent."</span>";
             $percentsB = "<span style='color:red'>&#9660;".$percent."</span>";
               }
           if($percent == 0){
            $percents = "<span style='color:#ff6839'> &#8212; ".$percent."%</span>";
             $percentsB = "&#8212; ".$percent;
            }

                                                ?>
                                             
                                              

                                        <tr>
                                                                <th scope="row"><?=$count?></th>
                                                                <td><?=$security?></td>
                                                                <td> <?= $refprice?></td>
                                                                <td><?=$maxprice?></td>
                                                                <th><?=number_format($maxqty)?></th>
                                                                <!--<td></td>-->
                                                                <td><?=$minprice?></td>
                                                                <td><?=$minqty?></td>
                                                                <!--<th></th></th>-->
                                                                <td><?=$countall?></td>
                                                                <td><?=number_format($totVol)?></td>
                                                                 <td><?=number_format($totVal)?></td>
                                                                <th scope="row"><?=$price?></th>
                                                                <td><?=$percents?></td>
                                                                
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

