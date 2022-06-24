<?php
require_once 'app_Api/biblioteca/Router.php';
require_once 'app_Api/controladoresApi/apiControladorHome.php';
require_once 'app_Api/controladoresApi/apiControladorEspecie.php';
require_once 'app_Api/controladoresApi/apiControladorAnimal.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('home', 'GET', 'apiControladorHome', 'mostrarHome');
$router->addRoute('Especie', 'POST', 'apiControladorEspecie', 'generarNuevaEspecies');
$router->addRoute('Animal/:ID', 'DELETE', 'apiControladorAnimal', 'borrarAnimal');
//$router->addRoute('tareas/:ID', 'GET', 'ApiTaskController', 'obtenerTarea');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

?>