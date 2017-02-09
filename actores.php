<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actores juego de tronos</title>
  </head>
  <body>

<?php

//Me conecto a la base de datos
$conexion = new mysqli("localhost", "root", "", "gameofthrones");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
  }else {
}
?>


<h1>Actores</h1>
<table border=1>

<?php

$resultado = $conexion->query("SELECT * FROM cast");

echo "<tr>";
echo "<td>";
echo "<strong>Nombre</strong>";
echo "</td>";
echo "</tr>";
while ($fila=$resultado->fetch_assoc()) {
   echo "<tr>";
   echo "<td>";
    echo " ".$fila["name"].  "<br>";
    echo "</td>";
    echo "</tr>";
}
 ?>

</table>
  </body>
</html>
