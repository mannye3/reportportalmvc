<?php
  class Trades extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users');
      }

      $this->accountModel = $this->model('Account');
      $this->account3Model = $this->model('Account3');
     
      // $this->listingModel = $this->model('listing');
      
    }

     public function index(){

      $date2 = date("Ymd");

      // $date2 = '20191125';
    

   
      $properties_info = $this->account3Model->getProperties($date2);

       

      // $getthings = $this->accountModel->getbasic($properties_info->Security);

  //     $obj_enc = json_encode($properties_info);

  //     //echo $obj_enc . "<br>";

  //     $obj_dec = json_decode($obj_enc);

  //     foreach ($obj_dec as $obj) {
  //     $security =  $obj->Security;
  //     $totVol = $obj->totVol; 
  //     $totVal =  $obj->totVal;

  //     $getthings = $this->accountModel->getbasic($security);
  //      $obj_enc2 = json_encode($getthings);
  //     $obj_dec2 = json_decode($obj_enc2);


  //      foreach ($obj_dec2 as $obj2) {
  //       $col1 =  $obj2->col1;
       

   

  //       $boyka = $this->accountModel->getboyka($col1);

  //       $obj_enc3 = json_encode($boyka);
  //     $obj_dec3 = json_decode($obj_enc3);

  //      echo $obj_enc3 . "<br>";


  //      foreach ($obj_dec3 as $obj3) {
  //       $refprice =  $obj3->refprice;

       

  //         // var_dump($boyka) . "<br>";
  //         // echo  $refprice = $boyka->refprice; die();


  //     //   $refprice = $boyka->refprice;
  //     //   $closeprice = $boyka->closeprice;
  //     //   $pecup = $refprice * 1.1;
  //     //   $pecdown = $refprice * (1-0.1);


       


  //       //var_dump($getthings) . "<br>";

  //       // echo $security . "<br>";
  //       // echo $totVal . "<br>";
  //       // echo $id . "<br>";
  //       // echo $pecup . "<br>";
  //       // echo $pecdown . "<br>";


  //       // if($totVol >= 5000 ){
  //       //  $vwap = number_format( $totVal/$totVol,2);
  //       //    if($vwap >= $pecdown || $vwap >= $pecup){
  //       //       $price = $vwap;
  //       //         }
  //       //         else{
  //       //             $price = $refprice;
  //       //          }
  //       //           }elseif($totVol < 5000){
                                                                        
                                                                      
  //       //           $price = $refprice;
  //       //                                 }
  //       //            $change =   $price - $refprice ; 
  //       //            $percent = ($change / $refprice) * 100; 
  //       //            $percent = number_format($percent,2);


  //        // echo $boyka->id . "<br>";
  //        // echo $boyka->refprice* 1.1 . "<br>";
  //        // echo $boyka->closeprice* (1-0.1) . "<br>";








  //     }
  //   }

  // }

     //  echo $obj_dec;die();

     //    var_dump($properties_info); die();

     //  $catnam = $this->accountModel->eric($getthings->ID);




     // var_dump($getthings); die();


    
   // var_dump($boyka) . "<br>"; die();
      
     
       
          $data = [
        'properties_info' => $properties_info
        
        // 'obj_dec3' => $obj_dec3 
         
      ];



      // $data = [
      //   'properties_info' => $properties_info,
      //   'getthings' => $getthings,
      //   'boyka' => $boyka
                 
      // ];


     



    // echo   $data['properties_info']->Security; die();

     
 
            
                   $this->view('inc/user_header');
                 $this->view('accounts/trades', $data);
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