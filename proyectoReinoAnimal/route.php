<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
require_once 'controladores/ControladorAnimal.php';
require_once 'controladores/ControladorLogin.php';
$controlador = new Controlador_Animal();
$vista = new Vista_Animal();
$controladorLogin = new ControladorLogin();
$controladorEspecie=New ControladorEspecie();
/*session_start();
print_r($_SESSION);*/
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $controlador->mostrarAnimalesAccesoPublico();
        break;
    case 'acceder':
        $controladorLogin->traerFormLogin();
        break;
    case 'loguearse':
        $controladorLogin->Login();
        break;
    case 'animalesAdmin':
        $controladorLogin->mostrarAdminAnimal();
        break;
    case 'especiesAdmin':
        $controladorLogin->mostrarAdminEspecie();
        break;
    case 'borrar':
        $controlador->borrar($params[1]);
        break;
    case 'editar':
        $controlador->preparar($params[1]);
        break;
    case 'actualizar':
        $controlador->editarFila();
        break;
    case 'agregar':
        $controlador->agregarDatosTablaAnimal();
        break;
    case 'borrarEspecie':
        $controladorEspecie->borrarEspecie($params[1]);
        break;
    case 'editarEspecie':
        $controlador->preparar($params[1]);
        break;
    case 'actualizarEspecie':
        $controlador->editarFila();
        break;
    case 'agregar':
        $controlador->agregarDatosTablaAnimal();
        break;
    default:
        echo ('404 Page not found');
        break;
};
