<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actores por temporada</title>
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


<h1>Actores por temporada</h1>

<table border="1">

<?php

$resultado2 = $conexion->query("SELECT * FROM season_ep");

echo "<tr>";
echo "<td>";
echo "<strong>Nombre</strong>";
echo "</td>";
echo "<td>";
echo "<strong>Temporada</strong>";
echo "</td>";
echo "</tr>";
while ($fila=$resultado2->fetch_assoc()) {
  echo "<tr>";
  echo "<td>";
   echo " ".$fila["name"].  "<br>";
   echo "</td>";
   echo "<td>";
   echo " ".$fila["season"].  "<br>";
   echo "</td>";
   echo "</tr>";

}
 ?>

</table>
  </body>
</html>
