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
    <form action="index.php" method="post">
            <h1>Iniciar Sesion</h1>

            <br>Usuario<br>
            <input type="text" name="usuario" value="">
            <br>Contraseña<br>
            <input type="password" name="pass" value="">
            <br>Repetir Contraseña<br>
            <input type="password" name="pass2" value="">
            <br><br>
            <button>Enviar</button>
      <?php
      include "modelo/carrera.php";
      $sql = new sql();

      $sql->insertarcarrera( $_POST["usuario"], $_POST["pass"], $_POST["pass2"]);
      $resultado=$sql->mostrarultimo($_POST["id"], $_POST["idCategoria"], $_POST["nombre"], $_POST["apellidos"], $_POST["usuario"], $_POST["pass"], $_POST["email"], $_POST["rol"]);
      $fila=$resultado->fetch_assoc();
      if ($resultado==null) {
      echo "OK";
      echo "Tiempo: " .$fila["usuario"] ."<br>";
      echo "Fecha: " .$fila["pass"] ."<br>";
      echo "Tiempo: " .$fila["pass2"] ."<br>";

      }else {
        if ($_POST['pass']==$_POST['pass2']) {
          $resultado=$usuario->insertarcarrera($_POST["id"], $_POST["idCategoria"], $_POST["nombre"], $_POST["apellidos"], $_POST["usuario"], $_POST["pass"], $_POST["email"], $_POST["rol"]);
          if ($resultado=null) {
            echo "Error";
        }
      }
    }
      ?>
    <?php
if (isset($_POST['usuario']) && isset($_POST['pass'])) {
  include 'usuario.php';
  include 'seguridad.php';
  $usuario=new Usuario();
  $sesion= new Seguridad();

  $registrado=$usuario->LoginUsuario($_POST['usuario']);
  if ($registrado!=null) {
    if ($registrado['pass']==sha1($_POST['pass'])) {
      echo "Usuario logueado";
      $sesion->addUsuario($registrado['usuario']);
      header('Location: miperfil.php');
    }else {
      echo "Las contraseñas no coinciden";
    }
  }else {
    echo "Usuario no encontrado";
  }
}
 ?>
    </div>
  </body>
</html>
