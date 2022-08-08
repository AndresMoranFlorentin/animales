<?php
require_once "smarty/libs/Smarty.class.php";

class VistaEspecie
{

  function mostrarEspecies($matrixEspecie,$habilito,$permiso)
  {
    $smarty = new Smarty();
    $smarty->assign('BASE_URL', BASE_URL);
    $smarty->assign('especies', $matrixEspecie);
    $smarty->assign('habilito', $habilito);
    $smarty->assign('permiso_logueado', $permiso);
    $smarty->display('app/template/pagAdminEspecie.tpl');
  }

  function mostrarFormularioAgregar($tipoDeForm,$especies,$permiso)
  {
    $smarty = new Smarty();
    $smarty->assign('BASE_URL', BASE_URL);
    $smarty->assign('especies', $especies);
    $smarty->assign('tipoDeForm', $tipoDeForm);
    $smarty->assign('permiso_logueado',$permiso);
    $smarty->display('app/template/formularioParaAgregar.tpl');
  }

  function mostrarErrorEjecucionBorrar($nombresEspecies,$permiso)
  {

    $smarty = new Smarty();
    $smarty->assign('BASE_URL', BASE_URL);
    $smarty->assign('nombres', $nombresEspecies);
    $smarty->assign('permiso_logueado',$permiso);
    $smarty->display('app/template/errorBorrarEspecie.tpl');
  }

  function mostrarEdicionEspecie($editar, $modeloEspecie, $permiso)
  {
    $smarty = new Smarty();
    $smarty->assign('BASE_URL', BASE_URL);
    $smarty->assign('tipoDeEdicion', $editar);
    $smarty->assign('especie', $modeloEspecie);
    $smarty->assign('permiso_logueado', $permiso);
    $smarty->display('app/template/PaginaEdicion.tpl');
  }
}
