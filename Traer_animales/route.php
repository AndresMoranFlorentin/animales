<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
require_once 'ControladorAnimal.php';
$controlador = new Controlador_Animal();
$vista = new Vista_Animal();

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
        $controlador->MostrarAnimalesAccesoPublico();
        break;
    case 'acceder':
        $controlador->Traer_form_login();
        break;
    case 'loguearse':
        $controlador->Login();
        break;
    case 'borrar':
        $controlador->Borrar($params[1]);
        break;
    case 'editar':
        $controlador->Preparar($params[1]);
        break;
    case 'actualizar':
        $controlador->Editar_Fila();
        break;
    case 'agregar':
        $controlador->agregar_datos_a_tabla_animal();
        break;
    default:
        echo ('404 Page not found');
        break;
};
