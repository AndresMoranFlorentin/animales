<?php
require_once "smarty/libs/Smarty.class.php";

class VistaComentario
{

  function mostrarseccionComentario($id)
  {
    $smarty = new Smarty();
    $smarty->assign('BASE_URL', BASE_URL);
    $smarty->assign('id_animal', $id);
  //  $smarty->display('app/template/navegadorAdmin.tpl');
    $smarty->display('app/template/formAgregoCom.tpl');
  }
}