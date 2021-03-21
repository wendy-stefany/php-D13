    <head>
        <meta charset='utf-8' >
        <link rel="stylesheet" type="text/css" href="css.css" >
 <title>Alta Colaborador</title>

    </head>
<body>
</br>
  <h2>Alta Colaborador</h2>
<div>
  <form action="formulario.php" method="post">
				<input name="nombre" type="text" placeholder="Nombre" maxlength="30" pattern="[a-zA-Z0-9]+" required autofocus/>
				<input name="apellido" type="text" placeholder="Apellido" required />
				<textarea name="habilidad" placeholder="Habilidades" rows="6" required></textarea>
				<button id="alta" name="alta" type="submit" class="btn">Dar de alta</button>
</form>
  <div>
    <?php
      $sql ="SELECT * FROM  colaboradores";//esta
      $conn ->exec($sql);
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

  </body>
