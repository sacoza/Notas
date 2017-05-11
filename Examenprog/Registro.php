<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<link rel="stylesheet" href="./css/estilos.css">
  </head>
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
  <body>
    <form action="Usuario.php" method="post">
            <h1>REGISTRATE</h1>

            <br>ID<br>
            <input type="text" name="id" value="">
            <br>idCategoria<br>
            <input type="text" name="idCategoria" value="">
            <br>Nombre<br>
            <input type="text" name="nombre" value="">
            <br>Apellidos<br>
            <input type="text" name="apellidos" value="0">
            <br>Usuario<br>
            <input type="text" name="usuario" value="">
            <br>Contraseña<br>
            <input type="text" name="pass" value="">
            <br>Email<br>
            <input type="text" name="email" value="0">
            <br>Rol<br>
            <input type="text" name="rol" value="">
            <br><br>
            <button>Enviar</button>
      <?php
      include "modelo/usuario.php";
      $sql = new sql();

      $sql->insertarusuario($_POST["id"], $_POST["idCategoria"], $_POST["nombre"], $_POST["apellidos"], $_POST["usuario"], $_POST["pass"], $_POST["email"], $_POST["rol"]);
      $resultado=$sql->mostrarultimo($_POST["id"], $_POST["idCategoria"], $_POST["nombre"], $_POST["apellidos"], $_POST["usuario"], $_POST["pass"], $_POST["email"], $_POST["rol"]);
      $fila=$resultado->fetch_assoc();
      if ($resultado==null) {
      echo "OK";
      echo "<br><br>";
      echo "ID: " .$fila["id"] ."<br>";
      echo "Carrera: " .$fila["idCategoria"] ."<br>";
      echo "Fecha: " .$fila["nombre"] ."<br>";
      echo "Tiempo: " .$fila["apellidos"] ."<br>";
      echo "Tiempo: " .$fila["usuario"] ."<br>";
      echo "Fecha: " .$fila["pass"] ."<br>";
      echo "Tiempo: " .$fila["email"] ."<br>";
      echo "Tiempo: " .$fila["rol"] ."<br>";

      }else {
      echo "Error";
      echo "<br><br>";
      echo "ID: " .$fila["id"] ."<br>";
      echo "Carrera: " .$fila["idCategoria"] ."<br>";
      echo "Fecha: " .$fila["nombre"] ."<br>";
      echo "Tiempo: " .$fila["apellidos"] ."<br>";
      echo "Tiempo: " .$fila["usuario"] ."<br>";
      echo "Fecha: " .$fila["pass"] ."<br>";
      echo "Tiempo: " .$fila["email"] ."<br>";
      echo "Tiempo: " .$fila["rol"] ."<br>";
      }
      ?>
  </body>
</html>
