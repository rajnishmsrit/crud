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
          <a class="navbar-brand text-center" href="#">
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
      $table_name = "customers";
    }

    ?>

    <?php print $table_name;?>

    <?php
      $table = new QueryTable();
      $columns = $table->getColumns($table_name);
      print("<pre>");
      print_r($columns);

     ?>
  </body>
</html>

<script type="text/javascript">
</script>
