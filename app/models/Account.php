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



// public function getMsgById($id){
//       $this->db->query('SELECT * FROM inbox_messages WHERE id = :id');
//       $this->db->bind(':id', $id);

//       $row = $this->db->single();

//       return $row;
//     }



    public function getMsgByCode($msg_code){
      $this->db->query('SELECT * FROM inbox_messages WHERE msg_code = :msg_code');
      $this->db->bind(':msg_code', $msg_code);

      $row = $this->db->single();

      return $row;
    }




    public function getMsgByCodeSent($msg_code){
      $this->db->query('SELECT * FROM messages WHERE msg_code = :msg_code');
      $this->db->bind(':msg_code', $msg_code);

      $row = $this->db->single();

      return $row;
    }


    public function updateMsgStatus($msg_code, $read){
       $this->db->query('UPDATE inbox_messages SET read_status = :read WHERE msg_code = :msg_code');
      // Bind values
      $this->db->bind(':msg_code', $msg_code);
      $this->db->bind(':read', $read);
     
     

   // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




 public function Totalsent($symbol){
      $this->db->query('SELECT SUM(num) AS totalmsgsent FROM messages WHERE sender_symbol = :symbol  ');

      $this->db->bind(':symbol', $symbol);

     $results = $this->db->resultSet();

      return $results;
    }




      


    public function Totalinbox($symbol){
      $this->db->query('SELECT SUM(num) AS totalmsginbox FROM inbox_messages WHERE receiver_symbol = :symbol AND read_status = 1 ');

      $this->db->bind(':symbol', $symbol);

     $results = $this->db->resultSet();

      return $results;
    }

      





    //Add New Properties
      public function SendMessage($data){
      
      $this->db->query('INSERT INTO messages (subject, message, sender_username, sender_email, sender_symbol, receiver_symbol, msg_date, msg_code) VALUES(:subject, :message, :sender_username, :sender_email, :sender_symbol, :receiver_symbol, :msg_date, :msg_code)');
    
      // Bind Values      
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':sender_username', $data['sender_username']);
      $this->db->bind(':sender_email', $data['sender_email']);
      $this->db->bind(':sender_symbol', $data['sender_symbol']);
      $this->db->bind(':receiver_symbol', $data['receiver_symbol']);
      $this->db->bind(':msg_date', $data['msg_date']);
      $this->db->bind(':msg_code', $data['msg_code']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }


    //Add New Properties
      public function ReplyMessage($data){
      
      $this->db->query('INSERT INTO messages (subject, message, sender_username, sender_email, sender_symbol, receiver_username, receiver_symbol , receiver_email ,  msg_date, msg_code) VALUES(:subject, :message, :sender_username, :sender_email, :sender_symbol, :receiver_username, :receiver_symbol , :receiver_email ,  :msg_date, :msg_code)');
    
      // Bind Values      
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':sender_username', $data['sender_username']);
      $this->db->bind(':sender_email', $data['sender_email']);
      $this->db->bind(':sender_symbol', $data['sender_symbol']);
      $this->db->bind(':receiver_username', $data['receiver_username']);
      $this->db->bind(':receiver_symbol', $data['receiver_symbol']);
      $this->db->bind(':receiver_email', $data['receiver_email']);
      $this->db->bind(':msg_date', $data['msg_date']);
      $this->db->bind(':msg_code', $data['reply_msg_code']);
      


     
    

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
      
      $this->db->query('INSERT INTO inbox_messages (subject, message, sender_username, sender_email, sender_symbol, receiver_symbol, msg_date, msg_code) VALUES(:subject, :message, :sender_username, :sender_email, :sender_symbol, :receiver_symbol,  :msg_date, :msg_code)');
    
      // Bind Values      
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':sender_username', $data['sender_username']);
      $this->db->bind(':sender_email', $data['sender_email']);
      $this->db->bind(':sender_symbol', $data['sender_symbol']);
      $this->db->bind(':receiver_symbol', $data['receiver_symbol']);
      $this->db->bind(':msg_date', $data['msg_date']);
      $this->db->bind(':msg_code', $data['msg_code']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }



    //Add New Properties
      public function AdminSendMessageInbox($data){
      
      $this->db->query('INSERT INTO inbox_messages (subject, message, sender_username, sender_email, sender_symbol, receiver_symbol, msg_date, msg_code) VALUES(:subject, :message, :sender_username, :sender_email, :sender_symbol, :receiver_symbol,  :msg_date, :msg_code)');
    
      // Bind Values      
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':sender_username', $data['sender_username']);
      $this->db->bind(':sender_email', $data['sender_email']);
      $this->db->bind(':sender_symbol', $data['sender_symbol']);
      $this->db->bind(':receiver_symbol', $data['receiver_symbol']);
      $this->db->bind(':msg_date', $data['msg_date']);
      $this->db->bind(':msg_code', $data['msg_code']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }



    //Add New Properties
      public function ReplyMessageInbox($data){
      
      $this->db->query('INSERT INTO inbox_messages (subject, message, sender_username, sender_email, sender_symbol, receiver_username, receiver_symbol , receiver_email ,  msg_date, msg_code) VALUES(:subject, :message, :sender_username, :sender_email, :sender_symbol, :receiver_username, :receiver_symbol , :receiver_email , :msg_date, :msg_code)');
    
      // Bind Values      
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':sender_username', $data['sender_username']);
      $this->db->bind(':sender_email', $data['sender_email']);
      $this->db->bind(':sender_symbol', $data['sender_symbol']);
      $this->db->bind(':receiver_username', $data['receiver_username']);
      $this->db->bind(':receiver_symbol', $data['receiver_symbol']);
      $this->db->bind(':receiver_email', $data['receiver_email']);
      $this->db->bind(':msg_date', $data['msg_date']);
      $this->db->bind(':msg_code', $data['reply_msg_code']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }




 public function deleteMessageinbox($msg_code){
      $this->db->query('DELETE FROM inbox_messages WHERE msg_code = :msg_code');
      // Bind values
      $this->db->bind(':msg_code', $msg_code);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function deleteMessagesent($msg_code){
      $this->db->query('DELETE FROM messages WHERE msg_code = :msg_code');
      // Bind values
      $this->db->bind(':msg_code', $msg_code);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
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



 public function InboxMsg($symbol){
      $this->db->query('SELECT *  FROM inbox_messages WHERE receiver_symbol = :symbol ORDER BY id DESC');

      // Bind Values
      $this->db->bind(':symbol', $symbol);

      $results = $this->db->resultSet();

      return $results;
    }


   public function GetallNews(){
      $this->db->query('SELECT *  FROM blog ORDER BY id DESC');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }



  public function getNewsById($id){
      $this->db->query('SELECT * FROM blog WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }





    public function CloseDeal($symbol){
      $this->db->query('SELECT `Close Price` AS   Close_Price, `Date` AS Close_Date  FROM general_market_summary WHERE Security = :symbol');
      $this->db->bind(':symbol', $symbol);

      $results = $this->db->resultSet();

    return $results;

 
  }



public function Deals($symbol){
      $this->db->query('SELECT  `Daily Volume` AS Daily_Volume, `Date` AS Volume_Date  FROM general_market_summary WHERE Security = :symbol');
      $this->db->bind(':symbol', $symbol);

      $results = $this->db->resultSet();

    return $results;

 
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