<?php
  class Pages extends Controller {
    public function __construct(){

      $this->listingModel = $this->model('Listing');
      $this->agentModel = $this->model('Agent');

     
    }

    
    public function index(){

        $feat_pro = $this->listingModel->getFeaturedProperty();
         $pro_pictures = $this->listingModel->GetProertyPics();

              $data = [
            'feat_pro' => $feat_pro,
             'pro_pictures' => $pro_pictures
              ];
      $this->view('inc/header');
      $this->view('pages/index', $data);
      $this->view('inc/footer');
    }

    public function assets(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];
      $this->view('inc/header');
      $this->view('pages/assets', $data);
      $this->view('inc/footer');
    }


     public function payment_methods(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];
      $this->view('inc/header');
      $this->view('pages/payment_methods', $data);
      $this->view('inc/footer');
    }



    public function regional_representative(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];
      $this->view('inc/header');
      $this->view('pages/regional_representative', $data);
      $this->view('inc/footer');
    }



     public function contacts(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];
      $this->view('inc/header');
      $this->view('pages/contacts', $data);
      $this->view('inc/footer');
    }





  


  }


