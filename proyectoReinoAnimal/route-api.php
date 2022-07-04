<?php
require_once 'app_Api/biblioteca/Router.php';
require_once 'app_Api/controladoresApi/apiControladorHome.php';
require_once 'app_Api/controladoresApi/apiControladorEspecie.php';
require_once 'app_Api/controladoresApi/apiControladorAnimal.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('home', 'GET', 'apiControladorHome', 'mostrarHome');
$router->addRoute('comentario', 'GET', 'apiControladorHome', 'mostrarComentarios');
$router->addRoute('comentario', 'POST', 'apiControladorHome', 'agregarComentario');
$router->addRoute('comentario/:ID', 'DELETE', 'apiControladorHome', 'borrarComentario');
$router->addRoute('comentario/resource', 'GET', 'apiControladorHome', 'ordenarComentarios');


//$router->addRoute('tareas/:ID', 'GET', 'ApiTaskController', 'obtenerTarea');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

?>