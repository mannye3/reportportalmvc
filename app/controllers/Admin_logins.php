<?php
  class Admin_logins extends Controller {
    public function __construct(){
      $this->admin_loginModel = $this->model('Admin_login');
    }

      public function index(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'email_err' => '',
          'password_err' => '',      
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Please enter password';
        }

        // Check for user/email
        if($this->admin_loginModel->findUserByEmail($data['email'])){
          // User found
        } else {
          // User not found
          $data['email_err'] = 'No user found';
        }



        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){
          // Validated
          // Check and set logged in user
          $loggedInUser = $this->admin_loginModel->login($data['email'], $data['password']);

          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);
          } else {
            $data['password_err'] = 'Password incorrect';

              $this->view('inc/login_header');
              $this->view('Admin_login/login', $data);
              $this->view('inc/login_footer');
          }
        } else {
          // Load view with errors
           $this->view('inc/login_header');
              $this->view('Admin_login/login', $data);
              $this->view('inc/login_footer');
        }


      } else {
        // Init data
        $data =[    
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => '',        
        ];

        // Load view
          $this->view('inc/login_header');
          $this->view('Admin_login/login', $data);
          $this->view('inc/login_footer');
      }
    }



    public function createUserSession($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['lname'] = $user->lname;
       $_SESSION['fname'] = $user->fname;
       $_SESSION['username'] = $user->username;
      $_SESSION['user_phone'] = $user->phone;
      $_SESSION['user_image'] = $user->image;
       $_SESSION['user_type'] = $user->type;
       $_SESSION['account_type'] = $user->account_type;
       $_SESSION['status'] = $user->status;
        $_SESSION['status'] = $user->status;
        $_SESSION['currency_type'] = $user->currency_type;
        $_SESSION['reg_date'] = $user->reg_date;
        $_SESSION['status '] = $user->status;


         

       
      redirect('admins');
    }

    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['fname']);
      unset($_SESSION['lname']);
       unset($_SESSION['username']);
      unset($_SESSION['user_phone']);
      session_destroy();
      redirect('users/login');
    }

public function email($email){

  $user_profile = $this->userModel->getUserDetail($email);

     $data = [
    'user_profile' => $user_profile
      ];


      $this->view('users/email', $data);
    }





        public function reset($email){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
            $data =[
              'email' => trim($_POST['email']),
              'password' => trim($_POST['password']),
              'password_err' => '',
            ];

            // Validate Email
            if(empty($data['password'])){
              $data['password_err'] = 'Pleae enter name';
            } 
            // Make sure errors are empty
            if(empty($data['password_err'])){
              // Validated
         $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          // Validated
          if($this->userModel->updateUserPassword($data)){
            flash('post_message', 'Password Updated Successfully');
            redirect('users/login');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('users/reset', $data);
        }

      } else {
      
        $user_profile = $this->userModel->getUserDetail($email);

        $data = [
         'user_profile' => $user_profile
           ];
  
        $this->view('users/reset', $data);
      }
    }

    
  }

 