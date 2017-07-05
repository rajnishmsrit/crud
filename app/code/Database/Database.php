<?php

namespace App\Code\Database;

use \PDO;

class Database
{

  protected $conn;
  private $host="localhost";
  private $database="crud";
  private $username="crud";
  private $password="crud";

  function connect(){
    try{
      $this->conn = new PDO("mysql:dbname=$this->database;host=127.0.0.1", $this->username, $this->password);
    }
    catch(PDOException $e)
    {
      echo 'Connection failed: ' . $e->getMessage();
    }
    return $this->conn;
  }

}
