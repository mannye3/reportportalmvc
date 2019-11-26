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

     public function index(){

      // $date2 = date("Ymd");

      $date2 = '20191121';
    

   
      $properties_info = $this->account3Model->getProperties($date2);

      // $getthings = $this->accountModel->getbasic($properties_info->Security);

      $obj_enc = json_encode($properties_info);

      //echo $obj_enc . "<br>";

      $obj_dec = json_decode($obj_enc);

      foreach ($obj_dec as $obj) {
      $security =  $obj->Security;
      $totVol = $obj->totVol; 
      $totVal =  $obj->totVal;

      $getthings = $this->accountModel->getbasic($security);

     // echo  $id = $getthings->col1; die();

        $boyka = $this->accountModel->getboyka($getthings->col1);

          // echo  $refprice = $boyka->refprice; die();


      //    $refprice = $boyka->refprice;
      //   $closeprice = $boyka->closeprice;
      //   $pecup = $refprice * 1.1;
      //   $pecdown = $refprice * (1-0.1);


       


        //var_dump($getthings) . "<br>";

        // echo $security . "<br>";
        // echo $totVal . "<br>";
        // echo $id . "<br>";
        // echo $pecup . "<br>";
        // echo $pecdown . "<br>";


        // if($totVol >= 5000 ){
        //  $vwap = number_format( $totVal/$totVol,2);
        //    if($vwap >= $pecdown || $vwap >= $pecup){
        //       $price = $vwap;
        //         }
        //         else{
        //             $price = $refprice;
        //          }
        //           }elseif($totVol < 5000){
                                                                        
                                                                      
        //           $price = $refprice;
        //                                 }
        //            $change =   $price - $refprice ; 
        //            $percent = ($change / $refprice) * 100; 
        //            $percent = number_format($percent,2);


         // echo $boyka->id . "<br>";
         // echo $boyka->refprice* 1.1 . "<br>";
         // echo $boyka->closeprice* (1-0.1) . "<br>";








      }

     //  echo $obj_dec;die();

     //    var_dump($properties_info); die();

     //  $catnam = $this->accountModel->eric($getthings->ID);




     // var_dump($getthings); die();


    
  
      
     
       
          $data = [
        'obj_dec' => $obj_dec,
        'boyka' => $boyka 
         
      ];



      // $data = [
      //   'properties_info' => $properties_info,
      //   'getthings' => $getthings,
      //   'boyka' => $boyka
                 
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