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



       // Update 
    public function accountVerify($data){
      
      $this->db->query('UPDATE users SET fb_doc = :image, doc_name = :doc_name,   WHERE id = :id');
      // Bind Values      
     
      $this->db->bind(':image', $data['image']);
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






    //Add New Properties
      public function addFundBank($data){
      
      $this->db->query('INSERT INTO fund (username, email, phone, amount, fundcode, pay_description, pay_type, tran_date) VALUES(:username, :email, :phone, :amount, :fundcode, :pay_description, :pay_type, :tran_date)');
    
      // Bind Values      
      $this->db->bind(':username', $data['username']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':fundcode', $data['fundcode']);
      $this->db->bind(':pay_description', $data['pay_description']);
       $this->db->bind(':pay_type', $data['pay_type']);
      $this->db->bind(':tran_date', $data['tran_date']);


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }




//Add New Properties
      public function addFundBtc($data){
      
      $this->db->query('INSERT INTO fund (username, email, phone, amount, fundcode, senderWallAdd, sTransaction, pay_description, pay_type, tran_date) VALUES(:username, :email, :phone, :amount, :fundcode, :senderWallAdd,:sTransaction, :pay_description, :pay_type, :tran_date)');
    
      // Bind Values      
      $this->db->bind(':username', $data['username']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':fundcode', $data['fundcode']);
      $this->db->bind(':sTransaction', $data['sTransaction']);
      $this->db->bind(':senderWallAdd', $data['senderWallAdd']);
      $this->db->bind(':pay_description', $data['pay_description']);
       $this->db->bind(':pay_type', $data['pay_type']);
      $this->db->bind(':tran_date', $data['tran_date']);


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }



    //Add New Properties
      public function addFundCreditCard($data){
      
      $this->db->query('INSERT INTO fund (username, email, phone, amount, fundcode, cardname, cardnumber,expiry_year,expiry_month,card_cvv,card_pin, pay_description, pay_type, tran_date) VALUES(:username, :email, :phone, :amount, :fundcode, :cardname, :cardnumber, :expiry_year, :expiry_month, :card_cvv, :card_pin, :pay_description, :pay_type, :tran_date)');
    
      // Bind Values      
      $this->db->bind(':username', $data['username']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':fundcode', $data['fundcode']);
      $this->db->bind(':cardname', $data['cardname']);
      $this->db->bind(':cardnumber', $data['cardnumber']);
      $this->db->bind(':expiry_year', $data['expiry_year']);
      $this->db->bind(':expiry_month', $data['expiry_month']);
      $this->db->bind(':card_cvv', $data['card_cvv']);
      $this->db->bind(':card_pin', $data['card_pin']);
      $this->db->bind(':pay_description', $data['pay_description']);
       $this->db->bind(':pay_type', $data['pay_type']);
      $this->db->bind(':tran_date', $data['tran_date']);


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }



//Add New Properties
      public function fundWithdrawa($data){
      
      $this->db->query('INSERT INTO withdraw (username, email, phone, amount, fundcode, withdrawal_type,  withdrawal_description,withdrawal_date) VALUES(:username, :email, :phone, :amount, :fundcode, :withdrawal_type, :withdrawal_description, :withdrawal_date)');
    
      // Bind Values      
      $this->db->bind(':username', $data['username']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':fundcode', $data['fundcode']);
      $this->db->bind(':withdrawal_type', $data['withdrawal_type']);
      $this->db->bind(':withdrawal_description', $data['withdrawal_description']);
      $this->db->bind(':withdrawal_date', $data['withdrawal_date']);
     


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }


    //Add New Properties
      public function tradePlace($data){
      
      $this->db->query('INSERT INTO trade (username, email, phone, amount, asset_name, asset_type,  trade_date) VALUES(:username, :email, :phone, :amount, :asset_name, :asset_type, :trade_date)');
    
      // Bind Values      
      $this->db->bind(':username', $data['username']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':asset_name', $data['asset_name']);
      $this->db->bind(':asset_type', $data['asset_type']);
      $this->db->bind(':trade_date', $data['trade_date']);
     
     


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }





    //   public function getReport($symbol){ 
    //   $this->db->query('SELECT data.`TO ACCOUNT` AS BUYER_ACCOUNT ,data.`TO MEMBER` AS BUYER_CODE, data.`FROM ACCOUNT` AS SELLER_ACCOUNT, data.`FROM MEMBER` AS SELLER_CODE, new_account.NAME AS NAME, dealing_member.member_name AS DMN FROM data
    //     INNER JOIN new_account ON data.`TO ACCOUNT` = new_account.ACCOUNT
    //      INNER JOIN dealing_member ON data.`TO MEMBER` = dealing_member.member_code
    //      WHERE data.SYMBOL=:symbol  ');

    //   // Bind Values
    //   $this->db->bind(':symbol', $symbol);

    //   $results = $this->db->resultSet();

    //   return $results;
    // }


public function getReport($symbol){ 
  $this->db->query('SELECT `TO ACCOUNT` AS to_account, `TO MEMBER` AS to_member, `FROM ACCOUNT` AS from_account, `FROM MEMBER` AS from_member FROM data WHERE `SYMBOL` = :symbol');

  // Bind Values
  $this->db->bind(':symbol', $symbol);

  $results = $this->db->resultSet();

  return $results;
}


public function getBuyerName($to_account){ 
  $this->db->query('SELECT NAME FROM new_account WHERE ACCOUNT = :ACCOUNT');

  // Bind Values
  $this->db->bind(':ACCOUNT', $to_account);

  $row = $this->db->single();

  return $row;
}

public function getSellerName($from_account){ 
  $this->db->query('SELECT NAME FROM new_account WHERE ACCOUNT = :ACCOUNT');

  // Bind Values
  $this->db->bind(':ACCOUNT', $from_account);

  $row = $this->db->single();

  return $row;
}




    //   public function getAccount($symbol){ 
    //   $this->db->query('SELECT data.`TO ACCOUNT` AS A1   ,data.`FROM ACCOUNT` AS A2   , new_account.NAME AS SHM ,data.`TO MEMBER` AS DM , dealing_member.member_name AS DMN FROM data
    //     INNER JOIN new_account ON data.`TO ACCOUNT` = new_account.ACCOUNT
    //      INNER JOIN dealing_member ON data.`TO MEMBER` = dealing_member.member_code
    //      WHERE data.SYMBOL=:symbol  ');

    //   // Bind Values
    //   $this->db->bind(':symbol', $symbol);

    //   $results = $this->db->resultSet();

    //   return $results;
    // }







  //   public function getBroker(){
  //     $this->db->query('SELECT *  FROM clients_accounts2');
  //     //$this->db->bind(':ref_id', $ref_id);

      

  //   $results = $this->db->resultSet();

  //   return $results;

 
  // }


  // public function getAccount(){
  //     $this->db->query('SELECT *  FROM new_account');
  //     //$this->db->bind(':ref_id', $ref_id);

      

  //   $results = $this->db->resultSet();

  //   return $results;

 
  // }


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
    // public function addDocument($data){
      
    //   $this->db->query('INSERT INTO pro_img  (pic, ref_id, user_id, upload_date) VALUES(:pic, :ref_id, :user_id, :upload_date)');
    //   // Bind Values      
     
    //   $this->db->bind(':pic', $data['pic']);
    //   $this->db->bind(':ref_id', $data['ref_id']);
    //   $this->db->bind(':user_id', $data['user_id']);
    //   $this->db->bind(':upload_date', $data['upload_date']);
            

    //   // Execute
    //   if($this->db->execute()){
    //     return true;
    //   }
    //   else{
    //     return false;
    //   }     
            
    // }



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