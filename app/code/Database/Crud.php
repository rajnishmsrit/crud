<?php

namespace App\Code\Database;

use App\Code\Database\Database;

class Crud
{
  public $link;

  function __construct()
  {
    $db_connection = new Database();
    $this->link = $db_connection->connect();
    return $this->link;
  }

  function getData(){
    $query=$this->link->prepare("select * from customers");
    $query->execute();
    return $query->fetchAll();
  }

}

