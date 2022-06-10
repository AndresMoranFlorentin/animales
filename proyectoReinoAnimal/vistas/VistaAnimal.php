<?php
require_once('smarty/libs/Smarty.class.php');

class VistaAnimal
{

    function mostrarAnimales()
    {

        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->display('template/intro.tpl');
    }
    function mostrarEdicionAnimal($fila,$especie,$editar)
    {
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('especie',$especie);
        $smarty->assign('animal', $fila);
        $smarty->assign('tipoDeEdicion', $editar);
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
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('animales', $matrixAnimales);
        $smarty->display('template/pagAdminAnimal.tpl');
        $smarty->display('template/footer.tpl');

    }
    function mostrarFormularioAgregar($tipoDeForm,$especies){
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('tipoDeForm', $tipoDeForm);
        $smarty->assign('especies', $especies);
        $smarty->display('template/formularioParaAgregar.tpl');


    }
    function mostrarTablaNoAdmin($matrixAnimales)
    {  
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('animales', $matrixAnimales);
        $smarty->display('template/intro.tpl');
        $smarty->display('template/tabla.tpl');
        $smarty->display('template/footer.tpl');
    }
}
