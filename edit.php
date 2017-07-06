<?php

require 'vendor/autoload.php';

use App\Code\Database\Database;
use App\Code\Database\QueryTable;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="app/lib/bootstrap-3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="app/lib/custom/css/custom.css" />

    <script src="app/lib/jquery/jquery-1.10.2.js"></script>
    <script src="app/lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="app/lib/custom/js/custom.js"></script>

    <title>Crud Operation</title>
  </head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand text-center" href="index.php">
            Crud Operation
          </a>
        </div>
      </div>
    </nav>

    <?php
    session_start();
    if(isset($_SESSION) && isset($_SESSION['error'])){
      ?>
        <div class="alert alert-danger" role="alert">
          <?php
      print $_SESSION['error'];
      unset($_SESSION['error']);
      ?>
       </div>
      <?php
    }

    if(isset($_GET) && isset($_GET['table'])){
      $table_name = $_GET['table'];
    }else{
      //todo: set error
    }

    if(isset($_GET) && isset($_GET['idname']) && isset($_GET['idvalue'])){
      $idname = $_GET['idname'];
      $idvalue = $_GET['idvalue'];
    }else{
      //todo: set error
    }

    //print $table_name;
    //print "<br>$idname";
    //print "<br>$idvalue";

    $table = new QueryTable();
    $column = $table->getColumnData($table_name, $idname, $idvalue);
    print("<pre>");
    print_r($column);

    ?>

  </body>
</html>
