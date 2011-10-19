<?php

class database {

   protected $_mysql;


   public function __construct($host, $username, $password, $database) {
      $this->_mysql = new mysqli($host, $username, $password, $database) or die('There was a problem connecting to the database');
   }
   
   







}
 ?>
