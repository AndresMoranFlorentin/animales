<?php

require_once "app/vistas/VistaComentario.php";
require_once "app/controladores/helperUser.php";
require_once "app/controladores/Controlador.php";

class ControladorComentarios extends Controlador
{

  private $vista;
  private $helperUser;

  public function __construct()
  {
    $this->vista = new VistaComentario();
    $this->helperUser = new helperUser();
  }

  function comentarItem($id)
  {
    if ($this->helperUser->checklogueo()) {
      $permiso = 'usuario';
      $this->vista->mostrarSeccionComentario($id, $permiso);
    } else {
      header('location: ' . BASE_URL . 'home');
    }
  }

  function mostrarSeccionComentario($id)
  {
    $permiso = $this->esAdmin_o_Usuario();
    $this->vista->mostrarseccionComentario($id, $permiso);
  }

  function mostrarTodosLosComentarios()
  {
    $permiso=$this->esAdmin_o_Usuario();
    $this->vista->mostrarApartadoComentarios($permiso);
   
  }
}
