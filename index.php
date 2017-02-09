<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Beneficios y gastos</title>
  </head>
  <body>
    <table class="menu">
      <tr>
        <td><a href="actoresTemp.php">ACTORES POR EPISODIO</a></td>
        <td><a href="actores.php">ACTORES</a></td>
      </tr>
    </table>

<h1>PLOT GAME OF THRONES </h1>
    <?php

    //Me conecto a la base de datos
    $conexion = new mysqli("localhost", "root", "", "gameofthrones");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      }else {
      }

        $resultado = $conexion->query("SELECT * FROM titles");


        while ($fila=$resultado->fetch_assoc()) {
          echo "<strong> Title: </strong> ".$fila["title"].  "<br>";
          echo "<strong> Plot: </strong> ".$fila["plot"].  "<br>";
          echo "<strong>Creators:</strong> ".$fila["creators"].  "<br>";
          echo "<strong>Season start: </strong> ".$fila["season_start"].  "<br>";
          echo "<strong>Season end: </strong> ".$fila["season_end"].  "<br>";
          echo "<strong>Seasons: </strong> ".$fila["seasons"].  "<br>";
          echo "<strong>Generes: </strong> ".$fila["generes"].  "<br>";

        }
    ?>


  </body>
</html>
