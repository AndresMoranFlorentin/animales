<?php
require_once "Modelo.php";


class ModeloLogin extends Modelo
{

  function traerContraseña($mail)
  {
    $conexion = $this->conexionSQL();
    $sql = 'SELECT * FROM usuarios WHERE mail = ?';
    $query = $conexion->prepare($sql);
    $query->execute([$mail]);
    $usuario = $query->fetch(PDO::FETCH_ASSOC);

    return $usuario;
  }
  function traer_Usuarios()
  {

    $conexion = $this->conexionSQL();
    $sql = 'SELECT * FROM usuarios';
    $query = $conexion->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_NAMED);

    return $usuarios;
  }
  function serUser_o_admin($usuario, $id)
  {
    $conexion = $this->conexionSQL();
    $sql = 'UPDATE usuarios SET rol=? WHERE id_usuario=?';
    $query = $conexion->prepare($sql);
    $query->execute([$usuario, $id]);
  }
  function borrarUser($id)
  {

    $conexion = $this->conexionSQL();
    $sql = 'DELETE FROM usuarios  WHERE id_usuario=?';
    $query = $conexion->prepare($sql);
    $query->execute([$id]);
  }
}
