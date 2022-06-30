<?php
require_once "Modelo.php" ;


class ModeloLogin extends Modelo {
  
function traerContraseña($mail)
  {
    $conexion = $this->conexionSQL();
    $sql = 'SELECT * FROM usuarios WHERE mail = ?';
    $query = $conexion->prepare($sql);
    $query->execute([$mail]);
    $usuario = $query->fetch(PDO::FETCH_ASSOC);

    return $usuario;
  }
}
  ?>