<?php
require_once('smarty/libs/Smarty.class.php');

class VistaAnimal
{

    function mostrarAnimales()
    {

        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->display('app/template/intro.tpl');
    }
    function mostrarEdicionAnimal($fila,$especie,$editar)
    {
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('especie',$especie);
        $smarty->assign('animal', $fila);
        $smarty->assign('tipoDeEdicion', $editar);
        $smarty->display('app/template/PaginaEdicion.tpl');
    }
    
    function mostrarError()
    {

        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->display('app/template/error.tpl');
    }
    function mostrarTablaAdmin($matrixAnimales)
    {
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('animales', $matrixAnimales);
        $smarty->display('app/template/pagAdminAnimal.tpl');
        $smarty->display('app/template/footer.tpl');

    }
    function mostrarFormularioAgregar($tipoDeForm,$especies){
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('tipoDeForm', $tipoDeForm);
        $smarty->assign('especies', $especies);
        $smarty->display('app/template/formularioParaAgregar.tpl');


    }
    function mostrarTablaNoAdmin($matrixAnimales)
    {  
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('animales', $matrixAnimales);
        $smarty->display('app/template/intro.tpl');
        $smarty->display('app/template/tabla.tpl');
        $smarty->display('app/template/footer.tpl');
    }
}
