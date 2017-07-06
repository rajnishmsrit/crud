<?php

namespace App\Code\Database;

use App\Code\Database\Database;
use \PDO;

class QueryTable
{
  public $link;
  private $database = "crud";

  function __construct()
  {
    $db_connection = new Database();
    $this->link = $db_connection->connect();
    return $this->link;
  }

  function getColumns($table){
    $this->table = $table;
    $query=$this->link->prepare("select * from $this->table");
    $query->execute();
    return $query->fetchALL(PDO::FETCH_ASSOC);
  }

}

