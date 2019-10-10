<?php
  class Users extends Controller {
    public function __construct(){
      $this->userModel = $this->model('User');
    }

      public function index(){
      // Check for POST 
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'username' => trim($_POST['username']),
          'password' => trim($_POST['password']),
          'username_err' => '',
          'password_err' => '',      
        ];

        // Validate Email
        if(empty($data['username'])){
          $data['username_err'] = 'Pleae enter email';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Please enter password';
        }

        // Check for user/email
        if($this->userModel->findUserByUsername($data['username'])){
          // User found
        } else {
          // User not found
          $data['username_err'] = 'No user found';
        }

        // Make sure errors are empty
        if(empty($data['username_err']) && empty($data['password_err'])){
          // Validated
          // Check and set logged in user
          $loggedInUser = $this->userModel->login($data['username'], $data['password']);

          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);
          } else {
            $data['password_err'] = 'Password incorrect';

              $this->view('inc/login_header');
              $this->view('users/login', $data);
              $this->view('inc/login_footer');
          }
        } else {
          // Load view with errors
           $this->view('inc/login_header');
              $this->view('users/login', $data);
              $this->view('inc/login_footer');
        }


      } else {
        // Init data
        $data =[    
          'username' => '',
          'password' => '',
          'username_err' => '',
          'password_err' => '',        
        ];

        // Load view
          $this->view('inc/login_header');
          $this->view('users/login', $data);
          $this->view('inc/login_footer');
      }
    }


    public function register(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data =[
          'fname' => trim($_POST['fname']),
          'lname' => trim($_POST['lname']),
          'username' => trim($_POST['username']),
          'email' => trim($_POST['email']),
          'zipcode' => trim($_POST['zipcode']),
          'password' => trim($_POST['password']),
          'phone' => trim($_POST['phone']),
          'account_type' => trim($_POST['account_type']),
          'country' => trim($_POST['country']),
          'currency_type' => trim($_POST['currency_type']),
          'reg_date' => date('jS \ F Y h:i:s A'),
          'fname_err' => '',
          'lname_err' => '',
          'username_err' => '',
          'zipcode' => '',
          'email_err' => '',
          'password_err' => '',
          'phone_err' => '',
          'account_type_err' => '',
          'country_err' => '',
          'currency_type_err' => ''
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        } else {
          // Check email
          if($this->userModel->findUserByEmail($data['email'])){
            $data['email_err'] = 'Email is already taken';
          }
        }

        // Validate Phone
        if(empty($data['phone'])){
          $data['phone_err'] = 'Pleae enter phone';
        } else {
          // Check email
          if($this->userModel->findUserByPhone($data['phone'])){

              $data['phone_err'] = 'Phone number is already taken';
           

          }
        }

    

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['phone_err'])){
          // Validated
          
          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

          // Register User

          // if(sendMail_LOCAL_Registration($data)){
          //   flash_success('register_success', 'Check your email and comfirm the email address used');
          //   redirect('users/register');
          // }


          if($this->userModel->register($data)){
           flash('register_success', '<div class="notification success closeable">
                <p><span>You are registered and can log in</span> </p>
                <a class="close" href="#"></a>
            </div>');
            redirect('users/login');
          } 
          else {
            die('Something went wrong');
          }

        } else {
          // Load view with errors
         $this->view('inc/login_header');
          $this->view('users/register', $data);
          $this->view('inc/login_footer');
        }

      } else {
        // Init data
        $data =[
          'fname' => '',
          'lname' => '',
          'username' => '',
          'email' => '',
          'password' => '',
          'phone' => '',
          'country' => '',
          'account_type' => '',
          'currency_type' => '',
          'fname_err' => '',
          'lname_err' => '',
          'username' => '',
          'zipcode' => '',
          'email_err' => '',
          'country_err' => '',
          'password_err' => '',
          'phone_err' => '',
          'account_type_err' => '',
          'currency_type_err' => ''
        ];

        // Load view
        $this->view('inc/login_header');
          $this->view('users/register', $data);
          $this->view('inc/login_footer');
      }
    }

  


      public function forget_password(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'email_err' => '',     
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        }

       
        // Check for user/email
        if($this->userModel->findUserByEmail($data['email'])){
          // User found
        } else {
          // User not found
          $data['email_err'] = 'No user found';
        }



        // Make sure errors are empty
        if(empty($data['email_err'])){

           if($this->userModel->forgetPassword($data['email'])){
           flash('register_success', '<div class="notification success closeable">
                <p><span>check your email for the reset link</span> </p>
                <a class="close" href="#"></a>
            </div>');
            redirect('users/email/'.$data['email'].'');
          } 

        } else {
          // Load view with errors
          $this->view('users/forget_password', $data);
        }


      } else {
        // Init data
        $data =[    
          'email' => '',
          'email_err' => ''
                
        ];

        // Load view
        $this->view('users/forget_password', $data);
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


         

       
      redirect('accounts');
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

 