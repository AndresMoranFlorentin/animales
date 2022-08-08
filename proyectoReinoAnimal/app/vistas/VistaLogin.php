<?php
require_once "smarty/libs/Smarty.class.php";
class VistaLogin {

    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function mostrarLogin(){
        
        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->display('app/template/login.tpl');
    }
  function registro_user(){

        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->display('app/template/form_registro.tpl');
  }
  function mostrar_seccion_Admin($usuario,$permiso_logueado)
  {
    $this->smarty->assign('BASE_URL',BASE_URL);
    $this->smarty->assign("los_usuarios",$usuario);
    $this->smarty->assign("permiso_logueado", $permiso_logueado);
    $this->smarty->display('app/template/permisosAdmin.tpl');
  }
}
