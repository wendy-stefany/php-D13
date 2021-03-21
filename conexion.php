<?php
  $servename="localhost";
  $username ="root";
  $db= "php-d13";
  $password="";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch (PDOException $e) {
    echo"Coneccion Failed". $e->getMessaje();
  }




 ?>
