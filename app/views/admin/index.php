<!-- <?php foreach($data['Close_Deal'] as $Close_Deal) :
         
          $usi = $Close_Deal->Price;
          $date = $Close_Deal->TRADE_DATE;
           $date = strtotime($date);
            $date *= 1000;      
             $$data1[] = "[$date , $usi]";
  ?>
          


         <?php endforeach; ?>  -->




         <!-- <?php foreach($data['Deals'] as $Deals) :

          $Vol = $Deals->Daily_Volume;
          $datedeals = $Deals->Volume_Date;
          $datedeals = strtotime($datedeals);
            $datedeals *= 1000;

             $datadeals[] = "[$datedeals , $Vol]";

        


  ?>
          

        


         <?php endforeach; ?>  -->







<script src="https://code.highcharts.com/highcharts.js"></script>
 <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">CRM</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CRM</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                        </div>                        
                    </div>
                </div>          
            </div>

            <ul>
           
        </ul>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->                    
                    <!-- Start col -->
                    <div class="col-lg-12 col-xl-12">
                        <div class="card m-b-30 dash-widget">
                            <div class="card-header">                                
                                <div class="row align-items-center">
                                    
                                    <div class="col-7">
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-0 pl-0 pr-2">
                               <div id="container" style="height: 500px; min-width: 300px"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
                <!-- Start row -->
               
                <!-- End row -->
            </div>







<!--     <script type="text/javascript">


$(function () { 


    var data_click = <?php echo $click; ?>;

    var data_viewer = <?php echo $viewer; ?>;


    $('#container').highcharts({

        chart: {

            type: 'column'

        },

        title: {

            text: 'Yearly Website Ratio'

        },

        xAxis: {

            categories: ['2013','2014','2015', '2016']

        },

        yAxis: {

            title: {

                text: 'Rate'

            }

        },

        series: [{

            name: 'Click',

            data: data_click

        }, {

            name: 'View',

            data: data_viewer

        }]

    });

});


</script> -->


<script type="text/javascript">
  
  document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('container', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Fruit Consumption'
            },
            xAxis: {
               
                 categories: [<?php echo join($data1, ',') ?>],
            },
            yAxis: {
                title: {
                    text: 'Fruit eaten'
                }
            },
            series: [{
                name: 'Jane',
                data: [1, 0, 4]
            }, {
                name: 'John',
                data: [5, 7, 3]
            }]
        });
    });
</script>