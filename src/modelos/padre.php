<?php 

namespace Xelanid\Pdophp\modelos;

class Padre{
    
    private string $saludo;
    private string $despedida;
    private string $prueba;

    public function __construct(){
        $this->saludo = "Hola desde padre";
        $this->despedida = "Adios desde padre";
        $this->prueba = "Prueba";

    }

    protected function getSaludo(){
        return $this->saludo;
    }

    protected function getDespedida(){
        return $this->despedida;
    }

}