<?php
require_once "Modelo.php";

class ModeloComentarios extends Modelo
{

function traerComentarios(){

    $conexion = $this->conexionSQL();

    $sql = 'SELECT * FROM tabla_comentarios';
    $resultado = $conexion->prepare($sql);
    $resultado->execute();
    $comentarios= $resultado->fetchAll(PDO::FETCH_NAMED);

    return $comentarios;

}
function traerComentario($id){
    $conexion = $this->conexionSQL();
    $sql = 'SELECT * FROM tabla_comentarios ' .
    'WHERE tabla_comentarios.id=?';
    $resultado = $conexion->prepare($sql);
    $resultado->execute([$id]);
    $animal = $resultado->fetchAll(PDO::FETCH_NAMED);

    return $animal[0];

}
function borrarComentario($id)
{
  $sql = "DELETE FROM tabla_comentarios WHERE id_animales=?";
  $conexion = $this->conexionSQL();
  $preparado = $conexion->prepare($sql);
  $preparado->execute([$id]);
}
}