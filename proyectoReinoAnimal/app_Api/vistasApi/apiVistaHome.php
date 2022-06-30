<?php
require_once "smarty/libs/Smarty.class.php";

class apiVistaHome
{
    public function response($animales,$status)
    {

        header("Content-Type: application/json");
        header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
        echo json_encode($animales);
       
    }
    public function verComentarios($comentarios,$status)
    {

        header("Content-Type: application/json");
        header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
        echo json_encode($comentarios);
       
    }
    private function _requestStatus($code)
    {
        $status = array(
            200 => "OK",
            404 => "Not found",
            500 => "Internal Server Error"
        );
        return (isset($status[$code])) ? $status[$code] : $status[500];
    }
}
