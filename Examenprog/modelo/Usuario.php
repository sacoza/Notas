<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Club Catarroja</title>
  </head>
  <body>
    <?php
class Usuario extends db
{
    function insertarusuario($id, $idCategoria, $nombre, $apellidos, $usuario, $pass, $email, $rol){
      $sql="INSERT INTO carrera (id, idCategoria, nombre, apellidos, usuario, pass, email, rol) VALUES ('.$id.', '".$idCategoria."', '".$nombre."', '".$apellidos."', '".$usuario."', '".$pass."', '".$email."', '".$rol."')";
  }
}
    ?>
  </body>
</html>
