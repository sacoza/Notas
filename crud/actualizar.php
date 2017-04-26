<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>
  <form class="" action="insertarActualizar.php" method="post">
    <h3>ACTUALIZAR EQUIPO</h3>
    Nombre<br>
    <input type="text" name="Nombre" value=<?=$_GET["Nombre"]?>><br>
    Ciudad<br>
    <input type="text" name="Ciudad" value=<?=$_GET["Ciudad"]?>><br>
    Conferencia<br>
    <input type="text" name="Conferencia" value=<?=$_GET["Conferencia"]?>><br>
    Division<br>
    <input type="text" name="Division" value=<?=$_GET["Division"]?>><br>
    <br>
    <button>Enviar</button>
  </body>
</html>
