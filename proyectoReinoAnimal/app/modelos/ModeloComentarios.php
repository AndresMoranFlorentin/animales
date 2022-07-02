<?php
require_once "Modelo.php";

class ModeloComentarios extends Modelo
{

function traerComentarios(){

    $conexion = $this->conexionSQL();

    $sql = 'SELECT * FROM comentarios';
    $resultado = $conexion->prepare($sql);
    $resultado->execute();
    $comentarios= $resultado->fetchAll(PDO::FETCH_NAMED);

    return $comentarios;

}
function traerComentario($id){
    $conexion = $this->conexionSQL();
    $sql = 'SELECT * FROM comentarios ' .
    'WHERE tabla_comentarios.id=?';
    $resultado = $conexion->prepare($sql);
    $resultado->execute([$id]);
    $comentario = $resultado->fetchAll(PDO::FETCH_NAMED);

    return $comentario[0];

}
function guardarComentario($comentario, $puntaje){

  $sql = "INSERT INTO comentarios (comentario, puntaje) 
                    VALUES (?,?)"; //nombres de las columnas de la tabla
    $conexion = $this->conexionSQL();
    $preparado = $conexion->prepare($sql);
    $preparado->execute([$comentario,$puntaje]);

}
function borrarComentario($id)
{
  $sql = "DELETE FROM comentarios WHERE id=?";
  $conexion = $this->conexionSQL();
  $preparado = $conexion->prepare($sql);
  $preparado->execute([$id]);
}
}