

    <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">News</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/accounts">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News</li>
                            </ol>
                        </div>
                    </div>
                    
                </div>          
            </div>
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                     <?php foreach($data['get_news'] as $get_news) :   ?>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card m-b-30">
                            <img class="card-img-top" src="<?php echo URLROOT; ?>/news_pics/<?php echo $get_news->picture; ?>" alt="blog">
                            <div class="card-body">
                                <!-- <p class="text-center mb-3"><span class="badge badge-success text-uppercase"><?php echo $get_news->page_keywords; ?></span></p> -->
                                <a href="<?php echo URLROOT; ?>/accounts/open_news/<?php echo $get_news->id; ?>"><h5 class="card-title font-18"><?php echo $get_news->page_title; ?></h5>
                                <p class="card-text mb-0"><?php echo substr($get_news->page_content,0,200); ?></p></a>                                
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="blog-link">
                                            <a href="<?php echo URLROOT; ?>/accounts/open_news/<?php echo $get_news->id; ?>" class="btn btn-primary-rgba">More<i class="feather icon-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="blog-meta">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><?php echo  $get_news->date_published;?></li>
                                                
                                                <li class="list-inline-item">|</li>
                                                <li class="list-inline-item">by <a href="#">Admin</a></li>
                                            </ul>
                                        </div>
                                    </div>    
                                </div>
                                
                            </div>
                        </div>

                    </div>

                    <?php endforeach; ?>


                   
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2019 Orbiter - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
     