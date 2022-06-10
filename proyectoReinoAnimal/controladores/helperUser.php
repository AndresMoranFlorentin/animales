<?php
require_once "modelos/ModeloLogin.php";
class helperUser
{


    function iniciarSesion($tabla_user)
    {
        $this->start();
        $_SESSION["logueado"] = true;
        $_SESSION["username"] = $tabla_user['email'];
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
