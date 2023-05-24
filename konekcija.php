<?php

  $user = 'root';
  $password = '';
  $server = 'localhost';
  $database = 'torte';

 $conn = new mysqli($server,$user,$password,$database);

 if($conn->connect_errno){
    exit('Greska sa povezivanjem: '. $conn->connect_error);
}

 ?>