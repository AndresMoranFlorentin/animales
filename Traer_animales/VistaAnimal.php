<?php
require_once('smarty/libs/Smarty.class.php');

class Vista_Animal
{

    function Mostrar_animales()
    {

        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->display('Plantillas/intro.tpl');
    }
    function Mostrar_edicion($fila)
    {
        $smarty = new Smarty();

        $smarty->assign('fila', $fila);
        $smarty->display('Plantillas/PaginaEdicion.tpl');
    }
    function Mostrar_error()
    {

        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->display('Plantillas/error.tpl');
    }

    function Mostrar_Tabla($todo_lo_que_hay)
    {
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('animales', $todo_lo_que_hay);
        $smarty->display('Plantillas/intro.tpl');
        $smarty->display('Plantillas/formulario.tpl');
        $smarty->display('Plantillas/tabla.tpl');
    }
}
