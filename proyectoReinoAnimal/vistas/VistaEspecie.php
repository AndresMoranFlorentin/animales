<?php
require_once "smarty/libs/Smarty.class.php" ;

class VistaEspecie {



    function mostrarEspecies($matrixEspecie){

         $smarty=New Smarty();
         $smarty->assign('BASE_URL', BASE_URL);
         $smarty->assign('especies', $matrixEspecie);
         $smarty->display('template/formulario.tpl');
         $smarty->display('template/pagAdminEspecie.tpl');

    }
   function mostrarErrorEjecucionBorrar($nombresEspecies){

    $smarty=New Smarty();
    $smarty->assign('nombres', $nombresEspecies);
    $smarty->display('template/errorBorrarEspecie.tpl');

   }

}