<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Club Catarroja</title>
  </head>
  <body>
    <?php
class Carrera extends db
{

    function insertarcarrera($id, $carrera, $fecha, $idusuario, $tiempo){
      $sql="INSERT INTO carrera (id, carrera, fecha, idusuario, tiempo) VALUES ('.$id.', '.$carrera.', '.$fecha.', '.$idusuario.', '.$tiempo.')";
  }
}
    ?>
  </body>
</html>
