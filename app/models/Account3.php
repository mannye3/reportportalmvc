<?php
  class Account3 {
    private $db;

    public function __construct(){
      $this->db = new Database2;
    }




public function getProperties($date2){


      $this->db->query('SELECT market_report.`Security`,COUNT(*),SUM(`Qty`),(`Price`),SUM(`Qty`*`Price`),MAX(`Price`),MIN(`Price`),MAX(`Qty`),MIN(`Qty`)
        FROM market_report
       WHERE  `Date`= :date2
        GROUP BY market_report.`Security`');
      $this->db->bind(':date2', $date2);

      

    $results = $this->db->resultSet();

    return $results;

 
  }



 


  }