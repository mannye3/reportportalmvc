<?php
  class Accounts extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users');
      }

      $this->accountModel = $this->model('Account');
      // $this->listingModel = $this->model('listing');
      // $this->utilityModel = $this->model('Utility');
    }

      public function index(){
      // Get User Properties
      // $total_funds = $this->accountModel->Totalfunds($_SESSION['user_email']);

            

      // $data = [
      //       'total_funds' => $total_funds
      //         ];

              

          $this->view('inc/user_header');
           $this->view('accounts/index', $data);
          $this->view('inc/user_footer');
    }


     public function profile(){
      // $total_funds = $this->accountModel->Totalfunds($_SESSION['user_email']);

            

      // $data = [
      //       'total_funds' => $total_funds
      //         ];

          $this->view('inc/user_header');
           $this->view('accounts/profile', $data);
          $this->view('inc/user_footer');
    }


    public function edit_profile(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
            $data =[
              'id' => $_SESSION['user_id'],
              'email' => trim($_POST['email']),
              'phone' => trim($_POST['phone']),
              'company' => trim($_POST['company']),
              'website' => trim($_POST['website']),
              'address' => trim($_POST['address']),
              'email_err' => '',
              'phone_err' => '',
            ];

            

            // Validate Email
            if(empty($data['email'])){
              $data['email_err'] = 'Pleae enter name';
            } else {
    
            }

            // Validate Phone
            if(empty($data['phone'])){
              $data['phone_err'] = 'Pleae enter phone';
            } else {
            }

        

            // Make sure errors are empty
            if(empty($data['email_err']) && empty($data['phone_err'])){
              // Validated
              
          // Validated
          if($this->accountModel->updateUser($data)){

            $_SESSION['user_email'] = $data['email'];
            $_SESSION['user_phone'] = $data['phone'];
            $_SESSION['user_company'] = $data['company'];
            $_SESSION['user_website'] = $data['website'];
             $_SESSION['user_address'] = $data['address'];
            
            flash('post_message', 'Profile Updated');
            redirect('accounts/profile');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('accounts/profile', $data);
        }

      } else {
      

        $data =[
              'email' => '',
              'phone' => '',
              'company' => '',
              'website' => '',
              'address' => '',
              'email_err' => '',
              'phone_err' => ''
            ];
  
        $this->view('accounts/profile', $data);
      }
    }



     public function edit_password(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
            $data =[
              'id' => $_SESSION['user_id'],
              'password' => trim($_POST['password']),
              'password_err' => ''
            ];

            

            // Validate Email
            if(empty($data['password'])){
              $data['password_err'] = 'Pleae enter password';
            } else {
    
            }

           
        

            // Make sure errors are empty
            if(empty($data['password_err'])){
              // Validated

             $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
              
          // Validated
          if($this->accountModel->updatePassword($data)){

           
            flash('alert_message', 'Password Updated');
           
            redirect('accounts/profile');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('accounts/profile', $data);
        }

      } else {
      

        $data =[
              'password' => '',
              'password_err' => ''
            ];
  
        $this->view('accounts/profile', $data);
      }
    }






    public function buy(){
      // Get User Properties
     $data = [
        
      ];

          $this->view('inc/user_header');
           $this->view('accounts/buy', $data);
          $this->view('inc/user_footer');
    }

    

     public function sell(){
               $get_report = $this->accountModel->getReport($_SESSION['user_symbol']);
               // $get_brokerinfo = $this->accountModel->getBroker();
               // $get_accountinfo = $this->accountModel->getAccount();
               
                

            
             
              $data = [
            'get_report' => $get_report
            // 'get_brokerinfo' => $get_brokerinfo
             // 'get_accountinfo' => $get_accountinfo
             
              ];

              $this->view('inc/user_header');
               $this->view('accounts/sell', $data);
              $this->view('inc/user_footer');
              }


    // public function sell(){
    //   // Get User Properties
    //  $data = [
        
    //   ];

    //       $this->view('inc/user_header');
    //        $this->view('accounts/sell', $data);
    //       $this->view('inc/user_footer');
    // }



    public function news(){
      // Get User Properties
     $data = [
        
      ];

          $this->view('inc/user_header');
           $this->view('accounts/news', $data);
          $this->view('inc/user_footer');
    }



    



public function landing(){
      // Get User Properties
     $data = [
        
      ];

          
           $this->view('accounts/landing', $data);
         
    }

    


       
     


    public function profile_pic(){

           // ini_set('display_errors', '0');         # don't show any errors...
           //  error_reporting(E_ALL | E_STRICT);

           if($_FILES["file"]["name"] != '')
            {
            $target_dir = PROFILE_PIC_ROOT_PATH;
            $RandomNum = time();
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $filename = explode('.', $_FILES["file"]["name"]);
            $picname = end($filename);
            $new_name = rand(100, 999) . '.' . $picname;
            $ImageName = str_replace(' ','-',strtolower($new_name));
            $ImageType = $_FILES['file']['type']; //"file/png", file/jpeg etc.
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            $ret[$NewImageName]= $target_dir.$NewImageName;
            move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir."/".$NewImageName );
            $data = array(
            'image' => $NewImageName,
            'id' => $_SESSION['user_id']
            );
            $this->accountModel->addProfilePicture($data);
             // $_SESSION['user_image'] = $data['image'];
             
            // echo "file Uploaded Successfully";
            
           // $this->view('accounts/index', $data);
            }
         redirect('accounts');
            }
        



    
      
      public function fundAccount(){
      
         $fundcode = rand(1000, 9999);
         $_SESSION['fundcode'] = $fundcode;
            


           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

           $pay_type = 'Bank Transfer';
           


            $data = [
              'username' => trim($_POST['username']),
              'amount' => trim($_POST['amount']),
              'phone' => trim($_POST['phone']),
              'email' => trim($_POST['email']),
              'fundcode' => $fundcode,
              'pay_description' => trim($_POST['pay_description']),
              'pay_type' => $pay_type,
              'email' => $_SESSION['user_email'],
              'phone' => $_SESSION['user_phone'],
              'tran_date' => date('jS \ F Y h:i:s A'),
              'amount_err' => ''
             
            ];

            // Validate data
            if(empty($data['amount'])){
              $data['amount_err'] = 'Please enter amount';
            }
            

            // Make sure no errors
            if(empty($data['amount_err'])){
              // Validated
              if($this->accountModel->addFundBank($data)){
                flash('alert_message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your Amount Has been Recorded and submitted</div>');
                redirect('accounts/fundAccount');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
             $this->view('inc/user_header');
           $this->view('accounts/fundAccount', $data);
          $this->view('inc/user_footer');
            }

          } else {
           
            $data = [
              'amount' => ''
            ];
      
            $this->view('inc/user_header');
           $this->view('accounts/fundAccount', $data);
          $this->view('inc/user_footer');
          }
        }


        public function fundAccountBtc(){
      
         $fundcode = rand(1000, 9999);
         $_SESSION['fundcode'] = $fundcode;
            


           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

           $pay_type = 'BTC Payment';
           


            $data = [
              'username' => trim($_POST['username']),
              'amount' => trim($_POST['amount']),
              'senderWallAdd' => trim($_POST['senderWallAdd']),
              'sTransaction' => trim($_POST['sTransaction']), 
              'fundcode' => $fundcode,
              'pay_description' => trim($_POST['pay_description']),
              'pay_type' => $pay_type,
              'email' => $_SESSION['user_email'],
              'phone' => $_SESSION['user_phone'],
              'tran_date' => date('jS \ F Y h:i:s A'),
              'amount_err' => ''
              
             
            ];

            // Validate data
            if(empty($data['amount'])){
              $data['amount_err'] = 'Please enter amount';
            }
            

            // Make sure no errors
            if(empty($data['amount_err'])){
              // Validated
              if($this->accountModel->addFundBtc($data)){
                flash('alert_message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your Amount Has been Recorded and submitted</div>');
                redirect('accounts/fundAccount');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
             $this->view('inc/user_header');
           $this->view('accounts/fundAccount', $data);
          $this->view('inc/user_footer');
            }

          } else {
           
            $data = [
              'amount' => ''
            ];
      
            $this->view('inc/user_header');
           $this->view('accounts/fundAccount', $data);
          $this->view('inc/user_footer');
          }
        }




      public function fundAccountCreditcard(){
      
         $fundcode = rand(1000, 9999);
         $_SESSION['fundcode'] = $fundcode;
            


           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

           $pay_type = 'Credit Card';
           


            $data = [
              'username' => trim($_POST['username']),
              'amount' => trim($_POST['amount']),
              'cardname' => trim($_POST['cardname']),
              'cardnumber' => trim($_POST['cardnumber']),
              'expiry_year' => trim($_POST['expiry_year']),
              'expiry_month' => trim($_POST['expiry_month']),
              'card_cvv' => trim($_POST['card_cvv']),
              'card_pin' => trim($_POST['card_pin']), 
              'fundcode' => $fundcode,
              'pay_description' => trim($_POST['pay_description']),
              'pay_type' => $pay_type,
              'email' => $_SESSION['user_email'],
              'phone' => $_SESSION['user_phone'],
              'tran_date' => date('jS \ F Y h:i:s A'),
              'amount_err' => ''
              
             
            ];

            // Validate data
            if(empty($data['amount'])){
              $data['amount_err'] = 'Please enter amount';
            }
            

            // Make sure no errors
            if(empty($data['amount_err'])){
              // Validated
              if($this->accountModel->addFundCreditCard($data)){
                flash('alert_message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your Amount Has been Recorded and submitted</div>');
                redirect('accounts/fundAccount');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
             $this->view('inc/user_header');
           $this->view('accounts/fundAccount', $data);
          $this->view('inc/user_footer');
            }

          } else {
           
            $data = [
              'amount' => ''
            ];
      
            $this->view('inc/user_header');
           $this->view('accounts/fundAccount', $data);
          $this->view('inc/user_footer');
          }
        }


              public function withdrawFund(){
      
         $fundcode = rand(1000, 9999);
         $_SESSION['fundcode'] = $fundcode;
            


           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

           


            $data = [
              'username' => trim($_POST['username']),
              'amount' => trim($_POST['amount']),
              'withdrawal_type' => trim($_POST['withdrawal_type']),
               'withdrawal_description' => trim($_POST['withdrawal_description']),
              'fundcode' => $fundcode,
              'email' => $_SESSION['user_email'],
              'phone' => $_SESSION['user_phone'],
              'withdrawal_date' => date('jS \ F Y h:i:s A'),
              'amount_err' => ''
              
             
            ];

            // Validate data
            if(empty($data['amount'])){
              $data['amount_err'] = 'Please enter amount';
            }
            

            // Make sure no errors
            if(empty($data['amount_err'])){
              // Validated
              if($this->accountModel->fundWithdrawa($data)){
                flash('alert_message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your Amount Has been Recorded and submitted</div>');
                redirect('accounts/withdrawFund');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
             $this->view('inc/user_header');
           $this->view('accounts/withdrawFund', $data);
          $this->view('inc/user_footer');
            }

          } else {
           
            $data = [
              'amount' => ''
            ];
      
            $this->view('inc/user_header');
           $this->view('accounts/withdrawFund', $data);
          $this->view('inc/user_footer');
          }
        }



        function file_upload(){
              if(isset($_POST['submit']))
              {

                $target_dir2 = PROFILE_PIC_ROOT_PATH;
                    $RandomNum2 = time();
                    $target_file2 = $target_dir2 . basename($_FILES["file2"]["name"]);
                    $filename2 = explode('.', $_FILES["file2"]["name"]);
                    $picname2 = end($filename2);
                    $new_name2 = rand(100, 999) . '.' . $picname2;
                    $ImageName2 = str_replace(' ','-',strtolower($new_name2));
                    $ImageType2 = $_FILES['file2']['type']; //"file/png", file/jpeg etc.
                    $ImageExt2 = substr($ImageName2, strrpos($ImageName2, '.'));
                    $ImageExt2 = str_replace('.','',$ImageExt2);
                    $ImageName2 = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName2);
                    $NewImageName2 = $ImageName2.'-'.$RandomNum2.'.'.$ImageExt2;
                    $ret[$NewImageName2]= $target_dir2.$NewImageName2;
                    move_uploaded_file($_FILES["file2"]["tmp_name"],$target_dir2."/".$NewImageName2 );
                



                      $target_dir = PROFILE_PIC_ROOT_PATH;
                      $RandomNum = time();
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);
                      $filename = explode('.', $_FILES["file"]["name"]);
                      $picname = end($filename);
                      $new_name = rand(100, 999) . '.' . $picname;
                      $ImageName = str_replace(' ','-',strtolower($new_name));
                      $ImageType = $_FILES['file']['type']; //"file/png", file/jpeg etc.
                      $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
                      $ImageExt = str_replace('.','',$ImageExt);
                      $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                      $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
                      $ret[$NewImageName]= $target_dir.$NewImageName;
                      move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir."/".$NewImageName );

                      $data = array(
                      'doc_name' => trim($_POST['doc_name']),
                      'fp_doc' => $NewImageName,
                      'bp_doc' => $NewImageName2,
                      'id' => $_SESSION['user_id']
                      );
                    $this->accountModel->addDocument($data);
                     // $_SESSION['user_image'] = $data['image'];
                     
                    // echo "file Uploaded Successfully";
                    
                   // $this->view('accounts/index', $data);
                    }
                    flash('alert_message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Success. You will be notified via email.</div>');
               redirect('accounts/verifyAccount');
                 
                    }



                    



 // public function verifyAccount(){
                 

 //           if($_SERVER['REQUEST_METHOD'] == 'POST'){
 //            // Sanitize POST array
           
 //            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

 //             $filename = rand(1000,100000)."-".$_FILES['filename']['name'];
 //             $pic_loc = $_FILES['filename']['tmp_name'];
 //             $folder = PROFILE_PIC_ROOT_PATH;
 //             move_uploaded_file($pic_loc,$folder.$filename);


 //            $data = [
 //              'doc_name' => trim($_POST['doc_name']),
 //              'fp_doc' => trim($_POST['fp_doc']),
 //              'doc_name_err' => ''
              
             
 //            ];


 //            // Validate data
 //            if(empty($data['doc_name'])){
 //              $data['doc_name_err'] = 'Please enter document name';
 //            }
            

 //            // Make sure no errors
 //            if(empty($data['doc_name_err'])){

           
             

 //              // Validated
 //              if($this->accountModel->accountVerify($data)){
      
 //                flash('alert_message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your Amount Has been Recorded and submitted</div>');
 //                redirect('accounts/verifyAccount');
 //              } else {
 //                die('Something went wrong');
 //              }
 //            } else {
 //              // Load view with errors
 //               $this->view('inc/user_header');
 //              $this->view('accounts/verifyAccount', $data);
 //               $this->view('inc/user_footer');
 //            }

 //          } else {
           
 //            $data = [
 //              'doc_name' => ''
 //            ];
      
 //            $this->view('inc/user_header');
 //           $this->view('accounts/verifyAccount', $data);
 //          $this->view('inc/user_footer');
 //          }
 //        }


         // public function profile_pic(){

         //   // ini_set('display_errors', '0');         # don't show any errors...
         //   //  error_reporting(E_ALL | E_STRICT);

         //   if($_FILES["file"]["name"] != '')
         //    {

         //    $doc_name = trim($_POST['doc_name']);
         //    $fp_doc = trim($_POST['fp_doc']);
           

         //    $target_dir = PROFILE_PIC_ROOT_PATH;
         //    $RandomNum = time();
         //    $target_file = $target_dir . basename($_FILES["file"]["name"]);
         //    $filename = explode('.', $_FILES["file"]["name"]);
         //    $picname = end($filename);
         //    $new_name = rand(100, 999) . '.' . $picname;
         //    $ImageName = str_replace(' ','-',strtolower($new_name));
         //    $ImageType = $_FILES['file']['type']; //"file/png", file/jpeg etc.
         //    $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
         //    $ImageExt = str_replace('.','',$ImageExt);
         //    $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
         //    $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
         //    $ret[$NewImageName]= $target_dir.$NewImageName;
         //    move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir."/".$NewImageName );
         //    $data = array(
         //    'doc_name' => $doc_name,
         //    'image' => $NewImageName,
         //    'id' => $_SESSION['user_id']
         //    );

         //    $this->accountModel->addProfilePicture($data);
         //     $_SESSION['user_image'] = $data['image'];
             
         //    // echo "file Uploaded Successfully";
            
         //   // $this->view('accounts/index', $data);
         //    }
         // redirect('accounts');
         //    }



 public function placeTrade(){
      
         
            


           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

           


            $data = [
              'username' => trim($_POST['username']),
              'amount' => trim($_POST['amount']),
              'asset_name' => trim($_POST['asset_name']),
              'asset_type' => trim($_POST['asset_type']),
              'email' => $_SESSION['user_email'],
              'phone' => $_SESSION['user_phone'],
              'trade_date' => date('jS \ F Y h:i:s A'),
              'amount_err' => ''
              
             
            ];

            // Validate data
            if(empty($data['amount'])){
              $data['amount_err'] = 'Please enter amount';
            }
            

            // Make sure no errors
            if(empty($data['amount_err'])){
              // Validated
              if($this->accountModel->tradePlace($data)){
                flash('alert_message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your Amount Has been Recorded and submitted</div>');
                redirect('accounts/placeTrade');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
             $this->view('inc/user_header');
           $this->view('accounts/placeTrade', $data);
          $this->view('inc/user_footer');
            }

          } else {
           
            $data = [
              'amount' => ''
            ];
      
            $this->view('inc/user_header');
           $this->view('accounts/placeTrade', $data);
          $this->view('inc/user_footer');
          }
        }



public function placeTrade2(){
      
         
            


           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

           


            $data = [
              'username' => trim($_POST['username']),
              'amount' => trim($_POST['amount']),
              'asset_name' => trim($_POST['asset_name']),
              'asset_type' => trim($_POST['asset_type']),
              'email' => $_SESSION['user_email'],
              'phone' => $_SESSION['user_phone'],
              'trade_date' => date('jS \ F Y h:i:s A'),
              'amount_err' => ''
              
             
            ];

            // Validate data
            if(empty($data['amount'])){
              $data['amount_err'] = 'Please enter amount';
            }
            

            // Make sure no errors
            if(empty($data['amount_err'])){
              // Validated
              if($this->accountModel->tradePlace($data)){
                flash('alert_message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your Amount Has been Recorded and submitted</div>');
                redirect('accounts');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
             $this->view('inc/user_header');
           $this->view('accounts', $data);
          $this->view('inc/user_footer');
            }

          } else {
           
            $data = [
              'amount' => ''
            ];
      
            $this->view('inc/user_header');
           $this->view('accounts', $data);
          $this->view('inc/user_footer');
          }
        }



         



              public function withdrawHistory(){
               $my_funds = $this->accountModel->getMyWithdrawa($_SESSION['user_email']);

              $data = [
            'my_funds' => $my_funds
              ];

                $this->view('inc/user_header');
               $this->view('accounts/withdrawHistory', $data);
              $this->view('inc/user_footer');
              }



               public function tradeHistory(){
               $my_trades = $this->accountModel->getMyTrade($_SESSION['user_email']);

              $data = [
            'my_trades' => $my_trades
              ];

                $this->view('inc/user_header');
               $this->view('accounts/tradeHistory', $data);
              $this->view('inc/user_footer');
              }




      




    
        

         public function add_pictures($ref_id){

           ini_set('display_errors', '0');         # don't show any errors...
            error_reporting(E_ALL | E_STRICT);
           if($_FILES["file"]["name"] != '')
            {
            $target_dir = PROPERTY_PIC_ROOT_PATH;
            $RandomNum = time();
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $filename = explode('.', $_FILES["file"]["name"]);
            $picname = end($filename);
            $new_name = rand(100, 999) . '.' . $picname;
            $ImageName = str_replace(' ','-',strtolower($new_name));
            $ImageType = $_FILES['file']['type']; //"file/png", file/jpeg etc.
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            $ret[$NewImageName]= $target_dir.$NewImageName;
            move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir."/".$NewImageName );
            $data = array(
            'pic' => $NewImageName,
            'ref_id' => $_SESSION['ref_id'],
            'user_id' => $_SESSION['user_id'],
            'upload_date' => date('jS \ F Y h:i:s A')
            );
            $this->accountModel->addPropertyPictures($data);
            echo "file Uploaded Successfully";
            }
           $this->view('accounts/add_pictures');
            }
        
  


          




         



     


          public function edit_property($ref_id){
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
              'ref_id' => $ref_id,
              'title' => trim($_POST['title']),
              'type' => trim($_POST['type']),
              'purpose' => trim($_POST['purpose']),
              'price' => trim($_POST['price']),
              'rooms' => trim($_POST['rooms']),
              'bathrooms' => trim($_POST['bathrooms']),
              'details' => trim($_POST['editor1']),
              'address' => trim($_POST['address']),
              'latitude' => trim($_POST['latitude']),
              'longitude' => trim($_POST['longitude']),
              'state' => trim($_POST['state']),
              'lga' => trim($_POST['lga']),
              'title_err' => '',
              'address_err' => ''
            ];


            // Validate data
            if(empty($data['title'])){
              $data['title_err'] = 'Please enter title';
            }
           
            // Make sure no errors
            if(empty($data['title_err'])){
              // Validated
              if($this->listingModel->updateProperty($data)){
                flash('post_message', '<div class="notification success closeable">
                <p><span><b>Property Updated</b></span> </p>
                <a class="close" href="#"></a>
            </div>');
            
                redirect('accounts/my_properties');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
              $this->view('accounts/edit_property', $data);
            }

          } else {
            // Get existing post from model
             $pro_info = $this->listingModel->getPropertyByRef($ref_id);

            // Check for owner
            if($pro_info->user_id != $_SESSION['user_id']){
              redirect('accounts');
            }

            $data = [
            'pro_info' => $pro_info,
            
          ];

      
            $this->view('accounts/edit_property', $data);
          }
        }



    //       public function feat_picture(){

    

    //   $this->view('accounts/feat_picture', $data);

    // }

        public function feat_picture($ref_id){
              $_SESSION['ref_id'] = $ref_id; 
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
              
              'ref_id' => trim($_POST['ref_id']),
              'pic' => trim($_POST['pic']),
              
              'pic_err' => ''
              
            ];

            // Validate data
            if(empty($data['pic'])){
              $data['pic_err'] = 'Please enter title';
            }
           
            // Make sure no errors
            if(empty($data['pic_err'])){
              
              // Validated
              if($this->listingModel->UpdatePropertyPic($data)){
                flash('post_message', '<div class="notification success closeable">
                <p><span><b>Property Picture Updated</b></span> </p>
                <a class="close" href="#"></a>
            </div>');
            
                
                
                redirect('accounts/my_properties');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
              $this->view('accounts/feat_picture', $data);
            }

          } else {
            // Get existing post from model
            $pro_img = $this->listingModel->getPropertyImg($_SESSION['user_id'], 
             $_SESSION['ref_id']);

            $data = [
            'pro_img' => $pro_img,
            
          ];

      
            $this->view('accounts/feat_picture', $data);
          }
        }





          public function delete_property($ref_id){
            
              // Get existing post from model
             $pro_info = $this->listingModel->getPropertyByRef($ref_id);
            
              // Check for owner
              if($post->user_id != $_SESSION['user_id']){
                redirect('accounts');
              }

              if($this->listingModel->deleteProperty($ref_id)){
                flash('post_message', 'Post Removed');
                redirect('accounts/my_properties');
              } else {
                die('Something went wrong');
              }
              }
      


             public function delete_picture($id){
            
              // Get existing post from model
             $pro_info = $this->listingModel->getPictureByid($id);
            
              // Check for owner
              if($post->user_id != $_SESSION['user_id']){
                redirect('accounts');
              }

              if($this->listingModel->deletePicture($id)){
                flash('post_message', 'Post Removed');
                redirect('accounts/my_properties');
              } else {
                die('Something went wrong');
              }
              }
      

     
    


  }