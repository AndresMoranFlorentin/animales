<?php
require_once "vistas/VistaAnimal.php";
require_once "modelos/ModeloAnimal.php";
//echo "LLegaste hasta el controlador y el id es =".$id." ";

class Controlador_Animal
{

    private $modelo;
    private $vista;

    public function __construct()
    {
        $this->modelo = new Modelo_animal();
        $this->vista = new Vista_Animal();
    }


    
}