<?php

require 'vendor/autoload.php';

use App\Code\Database\Database;
use App\Code\Database\Crud;

$data = new Crud();
print("<pre>");
print_r($data->getData());

echo "Hello World" ;

?>
