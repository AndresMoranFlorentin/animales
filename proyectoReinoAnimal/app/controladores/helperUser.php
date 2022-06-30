<?php
require_once "app/modelos/ModeloLogin.php";
class helperUser
{


    function iniciarSesion($tabla_user)
    {
        $this->start();
        $_SESSION["logueado"] = true;
        $_SESSION["username"] = $tabla_user['mail'];
        $_SESSION["rol"] = $tabla_user['rol'];
    }

    function es_Admin()
    {
        $this->start();
        
        if (isset($_SESSION["rol"]) && $_SESSION["rol"]=="administrador") {

            return true;
        }

        return false;
    }
    function es_Usuario()
    {
        $this->start();
        
        if (isset($_SESSION["rol"]) && $_SESSION["rol"]=="usuario") {

            return true;
        }

        return false;
    }
    function start()
    {

        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }
    function logout()
    {
        $this->start();
        session_destroy();
    }

    function checklogueo()
    {
        $this->start();

        if (isset($_SESSION["logueado"])) {

            return true;
        }

        return false;
    }
}
