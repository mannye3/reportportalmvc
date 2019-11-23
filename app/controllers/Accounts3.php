<?php
  class Accounts3 extends Controller {

    public function __construct(){
      if(!isLoggedIn()){
        redirect('users');
      }

      $this->accountModel = $this->model('Account');
      $this->account3Model = $this->model('Account3');
     
      // $this->listingModel = $this->model('listing');
      
    }

     public function test(){

      // $date2 = date("Ymd");

      $date2 = '20191121';
    

   
      $properties_info = $this->account3Model->getProperties($date2);

      $getthings = $this->accountModel->getbasic($properties_info->Security);

      // $catnam = $this->accountModel->eric($getthings->ID);




     var_dump($getthings); die();


    
  
      
     
       
      //     $data = [
      //   'properties_info' => $properties_info
      //   // 'getthings' => $getthings 
         
      // ];


     



    // echo   $data['properties_info']->Security; die();

     
 
            
                $this->view('inc/user_header');
                 $this->view('accounts/test', $data);
                $this->view('inc/user_footer');
          }


    // public function show($id){
    //   $post = $this->postModel->getPostById($id);
    //   $user = $this->userModel->getUserById($post->user_id);

    //   $data = [
    //     'post' => $post,
    //     'user' => $user
    //   ];

    //   $this->view('posts/show', $data);
    // }




            

             
     
    


  }