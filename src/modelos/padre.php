<?php 

namespace Xelanid\Pdophp\modelos;

class Padre{
    private string $saludo;
    private string $despedida;

    public function __construct(){
        $this->saludo = "Hola desde padre";
        $this->despedida = "Adios desde padre";

    }

    protected function getSaludo(){
        return $this->saludo;
    }

    protected function getDespedida(){
        return $this->despedida;
    }

}