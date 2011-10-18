<?php

class database {

   protected $_mysql;


   public function __construct($host, $username, $password, $db) {
      $this->_mysql = new mysqli($host, $username, $password, $db) or die('There was a problem connecting to the database');
   }





   public function __destruct() 
   {
		$this->_mysql->close();
   }

}

