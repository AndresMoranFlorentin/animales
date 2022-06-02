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
    function mostrarEdicionAnimal($fila,$especie)
    {
        $smarty = new Smarty();
        $smarty->assign('especie',$especie);
        $smarty->assign('animal', $fila);
        $smarty->display('template/PaginaEdicion.tpl');
    }
    
    function mostrarError()
    {

        $smarty = new Smarty();
       // $smarty->assign('BASE_URL', BASE_URL);
        $smarty->display('template/error.tpl');
    }
    function mostrarTablaAdmin($matrixAnimales)
    {
        $habilitarAdmin='HABILITO ADMIN';
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('animales', $matrixAnimales);
        $smarty->assign('habilitarAdmin', $habilitarAdmin);
        $smarty->display('template/intro.tpl');
        $smarty->display('template/formulario.tpl');
        $smarty->display('template/tabla.tpl');
        $smarty->display('template/footer.tpl');

    }
    function mostrarTablaNoAdmin($matrixAnimales)
    {   $habilitarAdmin='NO HABILITO';
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('animales', $matrixAnimales);
        $smarty->assign('habilitarAdmin', $habilitarAdmin);
        $smarty->display('template/intro.tpl');
        $smarty->display('template/tabla.tpl');
        $smarty->display('template/footer.tpl');
    }
}
