<?php
  class Admins extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('admin_logins');
      }

      $this->adminModel = $this->model('Admin');
      // $this->listingModel = $this->model('listing');
      $this->utilityModel = $this->model('Utility');
    }

      public function index(){
      // Get User Properties
      // $total_funds = $this->adminModel->Totalfunds($_SESSION['user_symbol']);

            

      // $data = [
      //       'total_funds' => $total_funds
      //         ];

              

          $this->view('inc/user_header');
           $this->view('admin/index', $data);
          $this->view('inc/user_footer');
    }


     public function profile(){
      $total_funds = $this->adminModel->Totalfunds($_SESSION['user_email']);

            

      $data = [
            'total_funds' => $total_funds
              ];

          $this->view('inc/user_header');
           $this->view('admin/profile', $data);
          $this->view('inc/user_footer');
    }


     public function users(){
      $allusers = $this->adminModel->getUsers();

            

      $data = [
            'allusers' => $allusers
              ];

          $this->view('inc/user_header');
           $this->view('admin/users', $data);
          $this->view('inc/user_footer');
    }



    public function compose(){
      
            $msg_code= rand(100000,999999);

          $receiver_symbol = 'ADMINCODE';

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array

            
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          
            $data = [
              'sender_email' => $_SESSION['user_email'],
              'sender_username' => $_SESSION['username'],
              'sender_symbol' => $_SESSION['user_symbol'],
              'receiver_symbol' => $receiver_symbol,
              'subject' => trim($_POST['subject']),
              'message' => trim($_POST['editor1']),
              'msg_code' => $msg_code,
              'msg_date' => date('jS \ F Y h:i:s A'),
              'subject_err' => '',
              'message_err' => ''
             
            ];

            // Validate data
            if(empty($data['message'])){
              $data['message_err'] = 'Message Field is Empty';
            }
            

            // Make sure no errors
            if(empty($data['message_err'])){
              // Validated
              if($this->adminModel->SendMessage($data)){

                    if($this->adminModel->SendMessageInbox($data)){
                    flash('alert_message', 'Message Sent');
                    redirect('admin/compose');
                  } 
              } 

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
             $this->view('inc/user_header');
           $this->view('admin/compose', $data);
          $this->view('inc/user_footer');
            }

          } else {
             $total_sent = $this->adminModel->Totalsent($_SESSION['user_symbol']);
             $total_inbox = $this->adminModel->Totalinbox($_SESSION['user_symbol']);
              $load_users = $this->utilityModel->getUsers();
           
            $data = [
              'message' => '',
              'total_sent' => $total_sent,
               'total_inbox' => $total_inbox,
               'load_users' => $load_users
            ];


      
            $this->view('inc/user_header');
           $this->view('admin/compose', $data);
          $this->view('inc/user_footer');
          }
        }






public function reply($msg_code){
      
             $reply_msg_code= rand(100000,999999);

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



          
            $data = [
              'sender_email' => $_SESSION['user_email'],
              'sender_username' => $_SESSION['username'],
              'sender_symbol' => $_SESSION['user_symbol'],
              'subject' => trim($_POST['subject']),
              'message' => trim($_POST['editor1']),
              'receiver_username' => trim($_POST['receiver_username']),
              'receiver_symbol' => trim($_POST['receiver_symbol']),
              'receiver_email' => trim($_POST['receiver_email']),
              'reply_msg_code' => $reply_msg_code,
              'msg_date' => date('jS \ F Y h:i:s A'),
              'subject_err' => '',
              'message_err' => ''
             
            ];

            // Validate data
            if(empty($data['message'])){
              $data['message_err'] = 'Message Field is Empty';
            }
            

            // Make sure no errors
            if(empty($data['message_err'])){
              // Validated
              if($this->adminModel->ReplyMessage($data)){

                    if($this->adminModel->ReplyMessageInbox($data)){
                    flash('alert_message', 'Message Sent');
                    redirect('admin/inbox');
                  } 
              } 

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
             $this->view('inc/user_header');
           $this->view('admin/reply', $data);
          $this->view('inc/user_footer');
            }

          } else {
             $total_sent = $this->adminModel->Totalsent($_SESSION['user_symbol']);
             $total_inbox = $this->adminModel->Totalinbox($_SESSION['user_symbol']);
             $reply_msg = $this->adminModel->getMsgByCode($msg_code);

             
           
            $data = [
              'message' => '',
              'total_sent' => $total_sent,
               'total_inbox' => $total_inbox,
               'reply_msg' => $reply_msg
            ];
      
            $this->view('inc/user_header');
            $this->view('admin/reply', $data);
            $this->view('inc/user_footer');
          }
        }





        public function admin_compose(){
      
           $msg_code= rand(100000,999999);

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

             

          
            $data = [
              
              'sender_email' => $_SESSION['user_email'],
              'sender_username' => $_SESSION['username'],
              'sender_symbol' => $_SESSION['user_symbol'],
              'receiver_symbol' => trim($_POST['receiver_symbol']),
              'subject' => trim($_POST['subject']),
              'message' => trim($_POST['message']),
              'msg_code' => $msg_code,
              'msg_date' => date('jS \ F Y h:i:s A'),
              'subject_err' => '',
              'message_err' => ''
             
            ];

            // Validate data
            if(empty($data['message'])){
              $data['message_err'] = 'Message Field is Empty';
            }
            

            // Make sure no errors
            if(empty($data['message_err'])){
              // Validated
              if($this->adminModel->AdminSendMessageInbox($data)){
                flash('alert_message', 'Message Sent');
                redirect('admin/admin_compose');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
             $this->view('inc/user_header');
           $this->view('admin/admin_compose', $data);
          $this->view('inc/user_footer');
            }

          } else {
             $total_sent = $this->adminModel->Totalsent($_SESSION['user_symbol']);
             $load_users = $this->utilityModel->getUsers();
           
            $data = [
              'message' => '',
              'total_sent' => $total_sent,
              'load_users' => $load_users
            ];
      
            $this->view('inc/user_header');
           $this->view('admin/admin_compose', $data);
          $this->view('inc/user_footer');
          }
        }


    



      public function inbox(){
            $total_sent = $this->adminModel->Totalsent($_SESSION['user_symbol']);
            $inbox = $this->adminModel->InboxMsg($_SESSION['user_symbol']);
            $total_inbox = $this->adminModel->Totalinbox($_SESSION['user_symbol']);

                  

             $data = [
              'inbox' => $inbox,
              'total_sent' => $total_sent,
              'total_inbox' => $total_inbox
                  
              
            ];
         

          $this->view('inc/user_header');
           $this->view('admin/inbox', $data);
          $this->view('inc/user_footer');
    }









    public function sent(){
      $sent = $this->adminModel->SentMsg($_SESSION['user_symbol']);
       $total_sent = $this->adminModel->Totalsent($_SESSION['user_symbol']);
        $total_inbox = $this->adminModel->Totalinbox($_SESSION['user_symbol']);

            

      $data = [
            'sent' => $sent,
             'total_sent' => $total_sent,
              'total_inbox' => $total_inbox
              ];

          $this->view('inc/user_header');
           $this->view('admin/sent', $data);
          $this->view('inc/user_footer');
    }





      public function open_message($msg_code){
          $read = 0;
         $open_msg = $this->adminModel->getMsgByCode($msg_code);
      $view_pro = $this->adminModel->updateMsgStatus($msg_code,$read);
      $total_sent = $this->adminModel->Totalsent($_SESSION['user_symbol']);
      $total_inbox = $this->adminModel->Totalinbox($_SESSION['user_symbol']);



      $data = [
        'open_msg' => $open_msg,
        'total_sent' => $total_sent,
        'total_inbox' => $total_inbox
            
        
      ];

      $this->view('inc/user_header');
      $this->view('admin/open_message', $data);
      $this->view('inc/user_footer');
    }



public function open_message_sent($msg_code){
          
         $open_msg = $this->adminModel->getMsgByCodeSent($msg_code);

      $total_sent = $this->adminModel->Totalsent($_SESSION['user_symbol']);
      $total_inbox = $this->adminModel->Totalinbox($_SESSION['user_symbol']);



      $data = [
        'open_msg' => $open_msg,
        'total_sent' => $total_sent,
        'total_inbox' => $total_inbox
            
        
      ];

      $this->view('inc/user_header');
      $this->view('admin/open_message_sent', $data);
      $this->view('inc/user_footer');
    }






  }