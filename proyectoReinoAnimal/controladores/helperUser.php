<?php
require_once "vistas/VistaLogin.php";
require_once "modelos/ModeloLogin.php";
class helperUser
{



    function iniciarSesion($tabla_user)
    {
        session_start();
        $_SESSION["logueado"] = true;
        $_SESSION["username"] = $tabla_user['email'];
    }
    function logout()
    {
        session_start();
        session_destroy();
    }
    function cerrarSesion()
    {
        unset($_SESSION["logueado"]);
    }

    function checklogueo()
    {
    
        if (isset($_SESSION["logueado"])) {

            return $_SESSION["logueado"];
        }
        return false;
    }
}
