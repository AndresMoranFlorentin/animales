<?php
require_once('smarty/libs/Smarty.class.php');

class Vista_Animal
{

    function Mostrar_animales()
    {

        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->display('template/intro.tpl');
    }
    function Mostrar_edicion($fila)
    {
        $smarty = new Smarty();

        $smarty->assign('fila', $fila);
        $smarty->display('template/PaginaEdicion.tpl');
    }
    function Mostrar_login(){
        $smarty = new Smarty();
        $smarty->display('template/login.tpl');
    }
    function Mostrar_error()
    {

        $smarty = new Smarty();
       // $smarty->assign('BASE_URL', BASE_URL);
        $smarty->display('template/error.tpl');
    }
    function mostrarTablaAdmin($matrixAnimales)
    {
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('animales', $matrixAnimales);
        $smarty->display('template/intro.tpl');
        $smarty->display('template/formulario.tpl');
        $smarty->display('template/tablaAdmin.tpl');
        $smarty->display('template/footer.tpl');

    }
    function mostrarTablaNoAdmin($matrixAnimales)
    { 
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('animales', $matrixAnimales);
        $smarty->display('template/intro.tpl');
        $smarty->display('template/tablaNoAdmin.tpl');
        $smarty->display('template/footer.tpl');
    }
}
