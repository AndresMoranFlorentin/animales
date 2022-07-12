<?php
require_once "smarty/libs/Smarty.class.php";

class VistaComentario
{

  function mostrarseccionComentario($id,$permiso)
  {
    $smarty = new Smarty();
    $smarty->assign('BASE_URL', BASE_URL);
    $smarty->assign('id_animal', $id);
    $smarty->assign('permiso_logueo',$permiso);
    $smarty->display('app/template/apartadoFormComentarios.tpl');
  }
  function mostrarApartadoComentarios(){

    $smarty=new Smarty();
    $smarty->assign('BASE_URL', BASE_URL);
    $smarty->display('app/template/seccionEspecialComentarios.tpl');

  }
}