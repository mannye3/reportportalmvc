<?php
  class Account {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }





      public function updatePassword($data){
      $this->db->query('UPDATE clients_accounts SET password = :password  WHERE id = :id');
      // Bind values
      $this->db->bind(':password',  $data['password']);
      $this->db->bind(':id',  $data['id']);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


     public function updateUser($data){
      $this->db->query('UPDATE clients_accounts SET email = :email, phone = :phone, company = :company, website = :website, address = :address  WHERE id = :id');
      // Bind values
      $this->db->bind(':id',  $data['id']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':company', $data['company']);
      $this->db->bind(':website', $data['website']);
      $this->db->bind(':address', $data['address']);
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



public function getMsgById($id){
      $this->db->query('SELECT * FROM inbox_messages WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }





      public function Totalsent($sysmbol){
      $this->db->query('SELECT COUNT(id) AS totalmsgsent FROM messages ');

      // Bind Values
     

      $row = $this->db->single();
      
      if($this->db->rowCount() > 0){
        return $row;
      } else {
        return 0;
      }
    }




    public function Totalinbox($username){
      $this->db->query('SELECT SUM(num) AS totalmsginbox FROM inbox_messages WHERE receiver_username = :username AND read_status = 1 ');

      $this->db->bind(':username', $username);

     $results = $this->db->resultSet();

      return $results;
    }

      





    //Add New Properties
      public function SendMessage($data){
      
      $this->db->query('INSERT INTO messages (subject, message, sender_username, sender_email, sender_symbol, msg_date) VALUES(:subject, :message, :sender_username, :sender_email, :sender_symbol, :msg_date)');
    
      // Bind Values      
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':sender_username', $data['sender_username']);
      $this->db->bind(':sender_email', $data['sender_email']);
      $this->db->bind(':sender_symbol', $data['sender_symbol']);
      $this->db->bind(':msg_date', $data['msg_date']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }




    //Add New Properties
      public function SendMessageInbox($data){
      
      $this->db->query('INSERT INTO inbox_messages (subject, message, sender_username, sender_email, sender_symbol, receiver_username, msg_date) VALUES(:subject, :message, :sender_username, :sender_email, :sender_symbol, :receiver_username, :msg_date)');
    
      // Bind Values      
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':sender_username', $data['sender_username']);
       $this->db->bind(':receiver_username', $data['receiver_username']);
      $this->db->bind(':sender_email', $data['sender_email']);
      $this->db->bind(':sender_symbol', $data['sender_symbol']);
      $this->db->bind(':msg_date', $data['msg_date']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }







   





      public function getReport($symbol){ 
      $this->db->query('SELECT data.`TO ACCOUNT` AS BUYER_ACCOUNT , data.`TO MEMBER` AS TO_MEMBER , data.`FROM MEMBER` AS FROM_MEMBER , data.`VOLUME` AS VOLUME, data.`TRADE DATE` AS TRADE_DATE , data.`PRICE` AS PRICE    , smsNewAccount.SHAREHOLDERSNAME AS BUYER_NAME  ,
      data.`FROM ACCOUNT`  AS SELLER_ACCOUNT , smsNewAccount2.SHAREHOLDERSNAME AS SELLER_NAME
      FROM data
        INNER JOIN smsNewAccount ON data.`TO ACCOUNT` = smsNewAccount.ACCOUNTNUMBER
           INNER JOIN smsNewAccount2 ON data.`FROM ACCOUNT` = smsNewAccount2.ACCOUNTNUMBER
         WHERE data.SYMBOL=:symbol ORDER BY id DESC');

      
           // WHERE data.SYMBOL='SDCSCSPLC'

      // Bind Values
      $this->db->bind(':symbol', $symbol);

      $results = $this->db->resultSet();

      return $results;
    }


      public function SentMsg($symbol){
      $this->db->query('SELECT *  FROM messages WHERE sender_symbol = :symbol ORDER BY id DESC');

      // Bind Values
      $this->db->bind(':symbol', $symbol);

      $results = $this->db->resultSet();

      return $results;
    }



 public function InboxMsg($username){
      $this->db->query('SELECT *  FROM inbox_messages WHERE receiver_username = :username ORDER BY id DESC');

      // Bind Values
      $this->db->bind(':username', $username);

      $results = $this->db->resultSet();

      return $results;
    }


   public function getAccount2(){
      $this->db->query('SELECT *  FROM new_account');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }









  




    //Add New Properties
      public function addProperty($data){
      
      $this->db->query('INSERT INTO property (title, type, purpose, price, rooms, bathrooms, details, address, latitude, longitude, state, lga, fullname, email, phone, ref_id, upload_date, user_id) VALUES(:title, :type, :purpose, :price, :rooms, :bathrooms, :details, :address, :latitude, :longitude, :state, :lga, :fullname, :email, :phone, :ref_id, :upload_date, :user_id)');
    
      // Bind Values      
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':type', $data['type']);
      $this->db->bind(':purpose', $data['purpose']);
      $this->db->bind(':price', $data['price']);
      $this->db->bind(':rooms', $data['rooms']);
      $this->db->bind(':bathrooms', $data['bathrooms']);
      $this->db->bind(':details', $data['details']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':latitude', $data['latitude']);
      $this->db->bind(':longitude', $data['longitude']);
      $this->db->bind(':state', $data['state']);
      $this->db->bind(':lga', $data['lga']);
      $this->db->bind(':fullname', $data['fullname']);
      $this->db->bind(':email', $_SESSION['user_email']);
      $this->db->bind(':phone', $_SESSION['user_phone']);
      $this->db->bind(':ref_id', $data['ref_id']);
      $this->db->bind(':upload_date', $data['upload_date']); 
      $this->db->bind(':user_id', $_SESSION['user_id']);
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }








       // Update 
    public function addDocument($data){
      
      $this->db->query('UPDATE users SET fp_doc = :fp_doc, bp_doc= :bp_doc, doc_name = :doc_name WHERE id = :id');
      // Bind Values      
     
      $this->db->bind(':fp_doc', $data['fp_doc']);
      $this->db->bind(':bp_doc', $data['bp_doc']);
       $this->db->bind(':doc_name', $data['doc_name']);
       $this->db->bind(':id', $data['id']);
           

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }     
            
    }


  



   

    // public function addPost($data){
    //   $this->db->query('INSERT INTO posts (title, user_id, body) VALUES(:title, :user_id, :body)');
    //   // Bind values
    //   $this->db->bind(':title', $data['title']);
    //   $this->db->bind(':user_id', $data['user_id']);
    //   $this->db->bind(':body', $data['body']);

    //   // Execute
    //   if($this->db->execute()){
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }

    // public function updatePost($data){
    //   $this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
    //   // Bind values
    //   $this->db->bind(':id', $data['id']);
    //   $this->db->bind(':title', $data['title']);
    //   $this->db->bind(':body', $data['body']);

    //   // Execute
    //   if($this->db->execute()){
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }

    // public function getPostById($id){
    //   $this->db->query('SELECT * FROM posts WHERE id = :id');
    //   $this->db->bind(':id', $id);

    //   $row = $this->db->single();

    //   return $row;
    // }

    // public function deletePost($id){
    //   $this->db->query('DELETE FROM posts WHERE id = :id');
    //   // Bind values
    //   $this->db->bind(':id', $id);

    //   // Execute
    //   if($this->db->execute()){
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }
  }