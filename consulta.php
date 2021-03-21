<?php
  include ('conexion.php');
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Colaboradores de proyecto</title>
    <link rel="stylesheet" type="text/css" href="css.css" >
  	<h2>Colaboradores de proyecto</h2>

<?php
  $sql ="SELECT * FROM  colaboradores";//esta
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo "<table>
          <tr><td># Colaborador</td><td>Nombre</td><td>Apellido</td><tr>";
      foreach ($stmt -> $fetchAll() as $filas) {
        echo"<trtr class=bg1><td>".$filas["id"]."</td>";
        echo"<trtr class=bg1><td>".$filas["nombre"]."</td>";
        echo"<trtr class=bg1><td>".$filas["apellido"]."</td></tr>";
        echo"<trtr class=bg1><td>".$filas["habilidad"]."</td></tr>";

      }
      echo"</table>";


  ?>
  <br><br>
  <div>
    <button  class= "button" onclick="location.href='index.php'">Back</button>
  </div>
  <head>
  </html>
