<?php
require_once('smarty/libs/Smarty.class.php');

class Vista_Animal
{

    function mostrarAnimales()
    {

        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->display('template/intro.tpl');
    }
    function mostrarEdicionAnimal($fila)
    {
        $smarty = new Smarty();

        $smarty->assign('fila', $fila);
        $smarty->display('template/PaginaEdicion.tpl');
    }
    function mostrarLogin(){
        $smarty = new Smarty();
        $smarty->display('template/login.tpl');
    }
    function mostrarError()
    {

        $smarty = new Smarty();
       // $smarty->assign('BASE_URL', BASE_URL);
        $smarty->display('template/error.tpl');
    }
    function mostrarTablaAdmin($matrixAnimales)
    {
        $habilitarBotonesTabla='SI';
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('animales', $matrixAnimales);
        $smarty->assign('botones', $habilitarBotonesTabla);
        $smarty->display('template/intro.tpl');
        $smarty->display('template/formulario.tpl');
        $smarty->display('template/tabla.tpl');
        $smarty->display('template/footer.tpl');

    }
    function mostrarTablaNoAdmin($matrixAnimales)
    {   $habilitarBotonesTabla='NO';
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('animales', $matrixAnimales);
        $smarty->assign('botones', $habilitarBotonesTabla);
        $smarty->display('template/intro.tpl');
        $smarty->display('template/tabla.tpl');
        $smarty->display('template/footer.tpl');
    }
}
