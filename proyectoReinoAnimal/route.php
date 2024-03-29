<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once 'app/controladores/ControladorAnimal.php';
require_once 'app/controladores/ControladorLogin.php';
require_once 'app/controladores/ControladorEspecie.php';
require_once 'app/controladores/ControladorComentarios.php';
require_once 'app/controladores/Controlador.php';

$Controlador = new Controlador();

$controladorAnimal = new ControladorAnimal();
$vista = new VistaAnimal();
$controladorLogin = new ControladorLogin();
$controladorEspecie = new ControladorEspecie();

$controladorComentario = new ControladorComentarios();

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
        $Controlador->mostrarHome();
        break;
    case 'acceder':
        $controladorLogin->traerFormLogin();
        break;
    case 'loguearse':
        $controladorLogin->Login();
        break;
    case 'registrarse':
        $controladorLogin->form_registrarse("registro_vista");
        break;
    case 'confirm_registro':
        $controladorLogin->form_registrarse("registrarme");
        break;
    case 'animalesAdmin':
        $controladorLogin->mostrarAdminAnimal();
        break;
    case 'especiesAdmin':
        $controladorLogin->mostrarAdminEspecie();
        break;
    case 'seccion_admin':
        $controladorLogin->mostrar_administracion_usuarios();
        break;
    case 'noSerAdmin':
        $controladorLogin->Admin_a_User($params[1]);
        break;
    case 'hacerAdmin':
        $controladorLogin->User_a_Admin($params[1]);
        break;
    case 'borrarUsuario':
        $controladorLogin->borrar_Usuario($params[1]);
        break;
    case 'logout':
        $controladorLogin->desLoguearse();
        break;
    case 'borrarAnimal':
        $controladorAnimal->borrar($params[1]);
        break;
    case 'editarAnimal':
        $controladorAnimal->preparar($params[1]);
        break;
    case 'actualizarAnimal':
        $controladorAnimal->editarFila();
        break;
    case 'mostrarFormAnimales':
        $controladorAnimal->mostrarAgregarAnimales();
        break;
    case 'agregarAnimales':
        $controladorAnimal->agregarDatosTablaAnimal();
        break;
    case 'mostrarFormEspecies':
        $controladorEspecie->mostrarAgregarEspecies();
        break;
    case 'agregarEspecies':
        $controladorEspecie->AgregarEspecies();
        break;
    case 'borrarEspecie':
        $controladorEspecie->borrarEspecie($params[1]);
        break;
    case 'editarEspecie':
        $controladorEspecie->prepararEspecie($params[1]);
        break;
    case 'actualizarEspecie':
        $controladorEspecie->editarFilaEspecie();
        break;
    case 'apartadoComentarios':
        $controladorComentario->mostrarTodosLosComentarios();
        break;
    case 'comentarTabla':
        $controladorComentario->mostrarSeccionComentario($params[1]);
        break;
    default:
        echo ('404 Page not found');
        break;
};
