<?php

class dbinsercion
{

  Private $host="localhost";
  Private $user="root";
  Private $pass="root";
  Private $name="nba";
Protected $nombre;
Protected $ciudad;
Protected $conferencia;
Protected $division;

  Private $conexion;
  Private $error=false;

    function __construct()
    {
  $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->name);
    if ($this->conexion->connect_errno) {
    $this->error=true;
    }
  }
  //comprobar error
  function hayerror(){
    return $this->error;
    }

//Función para insertar

function insertarEquipo($nombre,$ciudad,$conferencia,$division){
$sqlinsercion="INSERT INTO equipos (Nombre,Ciudad,Conferencia,Division) VALUES ('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";
echo $sqlinsercion;
if (!$this->conexion->query($sqlinsercion));
}
function mostrarultimo($nombre,$ciudad,$conferencia,$division){
$resultado=$this->conexion->query("SELECT * from equipos where Nombre='".$nombre."'");
return $resultado;
}
function EliminarEquipo($nombre){
$sqleliminar="DELETE FROM equipos WHERE Nombre='".$nombre."'";
echo "$sqleliminar";
}
public function actualizarUsuario($nombre,$ciudad,$conferencia,$division){
      $insert_sql="UPDATE equipos SET Nombre='".$nombre."', Ciudad='".$ciudad."', Conferencia='".$conferencia."', Division='".$division."' WHERE Nombre='".$nombre."'";
}
}
?>
