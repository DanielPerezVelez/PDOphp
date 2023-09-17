<?php 

namespace Xelanid\Pdophp\modelos;

class Hija extends Padre{

    public function __construct($saludo){
        parent::__construct();
    }

    public function getSaludoHija(){
        return $this->getSaludo();
    }

}