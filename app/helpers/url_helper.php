<?php
  // Simple page redirect
  function redirect($page){
    header('location: ' . URLROOT . '/' . $page);
  }


  function temp_redirect($page){
    header('location: ' . $page);
  }