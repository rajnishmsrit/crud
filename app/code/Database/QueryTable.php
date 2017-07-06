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

  function getColumns($table_name){
    $this->table_name = $table_name;
    $query=$this->link->prepare("select * from $this->table_name");
    $query->execute();
    return $query->fetchALL(PDO::FETCH_ASSOC);
  }

  function getColumnData($table_name, $idname, $idvalue){
    $this->table_name = $table_name;
    $query=$this->link->prepare("select * from $this->table_name where $idname=$idvalue");
    $query->execute();
    return $query->fetchALL();
  }

}

