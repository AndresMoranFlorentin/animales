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
    function borrarFilaEspecie($id){

      $sql = "DELETE FROM especies WHERE id_especie=?";
      $conexion = $this->conexionSQL();
      $preparado = $conexion->prepare($sql);
      $preparado->execute([$id]);
    
    }
       function traerIdIgualEspecie($id){
        $conexion =$this->conexionSQL();

        $sql = 'SELECT  a.nombre FROM animales AS a , especies AS e  WHERE a.id_especie = e.id_especie  AND a.id_especie= ? ';
        $resultado = $conexion->prepare($sql);
        $resultado->execute([$id]);
        $coincidencia = $resultado->fetchAll(PDO::FETCH_NAMED);
    
        return $coincidencia;

       }
}

