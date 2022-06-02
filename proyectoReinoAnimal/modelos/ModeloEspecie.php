<?php
require_once "Modelo.php" ;

class ModeloEspecie extends Modelo
{

    function traerEspecies()
    {
      $conexion =$this->conexionSQL();

      $sql = 'SELECT * FROM especies ';
      $resultado = $conexion->prepare($sql);
      $resultado->execute();
      $especie = $resultado->fetchAll(PDO::FETCH_NAMED);
  
      return $especie;
    }

}

