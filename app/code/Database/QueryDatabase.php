<?php

namespace App\Code\Database;

use App\Code\Database\Database;

class QueryDatabase
{
  public $link;
  private $database = "crud";

  function __construct()
  {
    $db_connection = new Database();
    $this->link = $db_connection->connect();
    return $this->link;
  }

  function getTables(){
    $query=$this->link->prepare("show tables from $this->database");
    $query->execute();
    return $query->fetchAll();
  }

}

