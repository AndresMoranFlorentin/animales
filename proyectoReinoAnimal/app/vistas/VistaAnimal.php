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
    function mostrarEdicionAnimal($fila,$especie,$editar,$permiso)
    {
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('especie',$especie);
        $smarty->assign('animal', $fila);
        $smarty->assign('permiso_logueado',$permiso);
        $smarty->assign('tipoDeEdicion', $editar);
        $smarty->display('app/template/PaginaEdicion.tpl');
    }
    
    function mostrarError($permiso)
    {

        $smarty = new Smarty($permiso);
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('permiso_logueado', $permiso);
        $smarty->display('app/template/error.tpl');
    }
    
    function mostrarTablaAdmin($matrixAnimales, $admin,$usuarios)
    {
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('animales', $matrixAnimales);
        $smarty->assign('los_usuarios', $usuarios);
        $smarty->assign('permiso_logueado', $admin);
        $smarty->display('app/template/pagAdminAnimal.tpl');

    }
    
    function mostrarFormularioAgregar($tipoDeForm,$especies,$permiso){
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('tipoDeForm', $tipoDeForm);
        $smarty->assign('especies', $especies);
        $smarty->assign('permiso_logueado', $permiso);
        $smarty->display('app/template/formularioParaAgregar.tpl');


    }
    function mostrarTablaNoAdmin()
    {  
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->display('app/template/template_vue/tabla_animal.tpl');
    }
    
    function vistaComentario($id){
        $smarty=new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('id_animal',$id);
        $smarty->display('app/template/formAgregoCom.tpl');
    }
}
