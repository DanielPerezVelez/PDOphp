<?php 

namespace Xelanid\Pdophp\modelos;

class Hija extends Padre{

    private string $info;

    public function __construct(){
        parent::__construct();
        $this->info = "Esta es la info";
        return $this->getSaludoHija();
    }

    private function getSaludoHija(){
        $getSaludo = $this->getSaludo();
        $getSaludoHija = $getSaludo . " a través de hija";
        return $getSaludoHija;
    }

}