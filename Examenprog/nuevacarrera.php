<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Club Catarroja</title>
    <link rel="stylesheet" href="./css/estilos.css">
  </head>
  <body>
    <!--MENU-->
    <div class="menu">
      <nav>
        <ul>
          <li><a href="index.php"><img src="./img/logo.png" alt=""></a></li>
          <li><a href="nuevacarrera.php">Nueva Carrera</a></li>
          <li><a href="#">Listar Carreras</a></li>
          <li><a href="Registro.php">Registro</a></li>
        </ul>
      </nav>
    </div>
    <!--MENU-->
    <!--MENU-->
    <div class="contenido">
<form action="nuevacarrera.php" method="post">
      <h1>INSERTAR CARRERA</h1>
      <br>ID<br>
      <input type="text" name="id" value="">
      <br>Carrera<br>
      <input type="text" name="carrera" value="">
      <br>Fecha<br>
      <input type="text" name="fecha" value="">
      <br>idusuario<br>
      <input type="text" name="idusuario" value="0">
      <br>Tiempo<br>
      <input type="text" name="tiempo" value="">
      <br><br>
      <button>Enviar</button>
<?php
include "modelo/carrera.php";
$sql = new sql();

$sql->insertarcarrera($_POST["id"],$_POST["carrera"],$_POST["fecha"],$_POST["idusuario"],$_POST["tiempo"]);
$resultado=$sql->mostrarultimo($_POST["id"],$_POST["carrera"],$_POST["fecha"],$_POST["idusuario"],$_POST["tiempo"]);
$fila=$resultado->fetch_assoc();
if ($resultado==null) {
echo "datos insertados";
echo "<br><br>";
echo "ID: " .$fila["id"] ."<br>";
echo "Carrera: " .$fila["carrera"] ."<br>";
echo "Fecha: " .$fila["fecha"] ."<br>";
echo "Tiempo: " .$fila["idusuario"] ."<br>";
echo "Tiempo: " .$fila["tiempo"] ."<br>";

}else {
echo "Error";
echo "<br><br>";
echo "ID: " .$fila["id"] ."<br>";
echo "Carrera: " .$fila["carrera"] ."<br>";
echo "Fecha: " .$fila["fecha"] ."<br>";
echo "Tiempo: " .$fila["idusuario"] ."<br>";
echo "Tiempo: " .$fila["tiempo"] ."<br>";
}
?>
    </div>
  </body>
</html>
