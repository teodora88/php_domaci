<?php

  $user = 'root';
  $password = '';
  $server = 'localhost';
  $database = 'php_domaci';

 $conn = new mysqli($server,$user,$password,$database);

 if($conn->connect_errno){
    exit('Greska sa povezivanjem: '. $conn->connect_error);
}

 ?>