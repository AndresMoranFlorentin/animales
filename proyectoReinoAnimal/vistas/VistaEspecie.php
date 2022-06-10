<?php
require_once "smarty/libs/Smarty.class.php";

class VistaEspecie
{



  function mostrarEspecies($matrixEspecie,$habilito)
  {

    $smarty = new Smarty();
    $smarty->assign('BASE_URL', BASE_URL);
    $smarty->assign('especies', $matrixEspecie);
    $smarty->assign('habilito', $habilito);
    $smarty->display('template/pagAdminEspecie.tpl');
  }
  function mostrarFormularioAgregar($tipoDeForm,$especies)
  {
    $smarty = new Smarty();
    $smarty->assign('BASE_URL', BASE_URL);
    $smarty->assign('especies', $especies);
    $smarty->assign('tipoDeForm', $tipoDeForm);
    $smarty->display('template/formularioParaAgregar.tpl');
  }
  function mostrarErrorEjecucionBorrar($nombresEspecies)
  {

    $smarty = new Smarty();
    $smarty->assign('nombres', $nombresEspecies);
    $smarty->display('template/errorBorrarEspecie.tpl');
  }
  function mostrarEdicionEspecie($editar, $modeloEspecie)
  {
    $smarty = new Smarty();
    $smarty->assign('BASE_URL', BASE_URL);
    $smarty->assign('tipoDeEdicion', $editar);
    $smarty->assign('especie', $modeloEspecie);
    $smarty->display('template/PaginaEdicion.tpl');
  }
}
