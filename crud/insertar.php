<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

include "dbinsercion.php";
$dbinsercion = new dbinsercion();

$dbinsercion->insertarEquipo($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);
$resultado=$dbinsercion->mostrarultimo($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);
$fila=$resultado->fetch_assoc();
echo "<br><br>";
echo "Nombre: " .$fila["Nombre"] ."<br>";
echo "Ciudad: " .$fila["Ciudad"] ."<br>";
echo "Conferencia: " .$fila["Conferencia"] ."<br>";
echo "Division: " .$fila["Division"] ."<br>";
echo "<a href=actualizar.php?Nombre=".$fila["Nombre"]."&Ciudad=".$fila["Ciudad"]."&Conferencia=".$fila["Conferencia"]."&Division=".$fila["Division"].">Actualizar Registro</a></br>";
echo "<a href=Borrar.php?'Nombre=".$fila["Nombre"]."'>Borrar</a>";

?>
  </body>
</html>
