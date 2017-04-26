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

$dbinsercion->actualizarUsuario($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);

if ($dbinsercion==true) {


$resultado=$dbinsercion->mostrarultimo($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);
  $fila=$resultado->fetch_assoc();
  echo "Nombre: ".$fila["Nombre"]."</br>";
  echo "Ciudad: ".$fila["Ciudad"]."</br>";
  echo "Conferencia: ".$fila["Conferencia"]."</br>";
  echo "Division: ".$fila["Division"]."</br>";

}else {
  echo "Hay un error";
}

  echo "<a href='actualizar.php?Nombre=".$fila["Nombre"]."&Ciudad=".$fila["Ciudad"]."&Conferencia=".$fila["Conferencia"]."&Division=".$fila["Division"].">Actualizar Registro</a>";
?>
  </body>
</html>
