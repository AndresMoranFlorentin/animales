<?php
require_once 'app_Api/biblioteca/Router.php';
require_once 'app_Api/controladoresApi/apiControlador.php';
require_once 'app_Api/controladoresApi/apiControladorAnimal.php';
require_once 'app_Api/controladoresApi/apiControladorComentarios.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('home', 'GET', 'apiControlador', 'mostrarHome');
$router->addRoute('comentario', 'GET', 'apiControladorComentarios', 'mostrarComentarios');
$router->addRoute('comentario/:ID', 'GET', 'apiControladorComentarios', 'traerComentario');
$router->addRoute('comentario', 'POST', 'apiControladorComentarios', 'agregarComentario');
$router->addRoute('comentario/:ID', 'DELETE', 'apiControladorComentarios', 'borrarComentario');
$router->addRoute('comentario/:ID/orden/:orden', 'GET', 'apiControladorComentarios', 'ordenarComentarios');
$router->addRoute('comentario/:ID/puntuacion/:puntuacion', 'GET', 'apiControladorComentarios', 'filtrarPuntuacion');
$router->addRoute('animal/accion/:accion/palabra/:palabra', 'GET', 'apiControladorAnimal', 'encontrarPalabraNombre');
//$router->addRoute('comentario/:orden', 'GET', 'apiControladorHome', 'ordenarDescen');


//$router->addRoute('tareas/:ID', 'GET', 'ApiTaskController', 'obtenerTarea');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

?>