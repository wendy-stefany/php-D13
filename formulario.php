<?php
  include ('conexion.php');
  if (!empty($_POST['nombre'])) {
    $nombre    = $_POST['nombre'];
    $apellido  = $_POST['apellido'];
    $habilidad = $_POST['habilidad'];
  }

  $sql ="insert into colaboradores(nombre, apellido, habilidad) values ('$nombre','$apellido','$habilidad')";

  $conn ->exec($sql);
   header('Location: index.php');
   exit;
?>
