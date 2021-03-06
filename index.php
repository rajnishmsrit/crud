<?php

require 'vendor/autoload.php';

use App\Code\Database\Database;
use App\Code\Database\QueryDatabase;

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


    $crud = new QueryDatabase();
    //print("<pre>");
    //print_r($crud->getData());
    //print("</pre>");

    ?>

    <div>
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="col-md-4">
          Database
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

         <?php
            foreach ($crud->getTables() as $key => $value) {
              print("<li><a href='crud.php?table=$value[0]'>$value[0]</a></li>");
            }
          ?>

        </ul>
      </div>
    </div>
  </body>
</html>


<script type="text/javascript">
</script>
