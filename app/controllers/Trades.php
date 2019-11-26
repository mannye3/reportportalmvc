<?php
  class Trades extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users');
      }

      $this->accountModel = $this->model('Account');
      $this->account3Model = $this->model('Account3');
      
    }

     public function index(){

      $trade_date = date("Ymd");

      // $trade_date = '20191125';
    
      $properties_info = $this->account3Model->getProperties($trade_date);

      
          $data = [
        'properties_info' => $properties_info     
      ];

                $this->view('inc/user_header');
                 $this->view('accounts/trades', $data);
                $this->view('inc/user_footer');
          }

  }