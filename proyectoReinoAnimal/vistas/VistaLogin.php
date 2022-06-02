<?php

class VistaLogin {


    function mostrarLogin(){
        $smarty = new Smarty();
        $smarty->display('template/login.tpl');
    }

}
  ?>