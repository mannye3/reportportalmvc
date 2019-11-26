<?php
  class Livetrade {
    private $db;

    public function __construct(){
      $this->db = new Database2;
    }




public function getProperties($date2){


      $this->db->query('SELECT market_report.`Security`,COUNT(*) AS countall,SUM(`Qty`) AS totVol,(`Price`),SUM(`Qty`*`Price`) AS totVal,MAX(`Price`) AS maxprice,MIN(`Price`) AS minprice,MAX(`Qty`) AS maxqty,MIN(`Qty`) AS minqty
        FROM market_report
       WHERE  `Date`= :date2
        GROUP BY market_report.`Security`');
      $this->db->bind(':date2', $date2);

      

    $results = $this->db->resultSet();

    return $results;

 
  }



 


  }