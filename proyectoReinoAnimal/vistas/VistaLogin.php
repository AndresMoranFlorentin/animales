<?php
require_once "smarty/libs/Smarty.class.php";
class VistaLogin {


    function mostrarLogin(){
        $smarty = new Smarty();
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('template/login.tpl');
        $smarty->display('template/intro.tpl');
    }

}
  ?>