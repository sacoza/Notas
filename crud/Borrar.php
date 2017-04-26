<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar Usuario</title>
  </head>
  <body>
  <?php
  //Incluir la clase de conexion
  include "dbinsercion.php";
  $dbinsercion = new dbinsercion();
  //insertar un usuario
  $resultadoBorrar=$dbinsercion->EliminarEquipo($_POST["Nombre"]);
  //Devolver el usuario insertado
    echo "Equipo ".$_GET["Nombre"]." borrado";

  ?>
  </body>
</html>
