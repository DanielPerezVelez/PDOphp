<?php
include_once 'connect.php';
class Prueba extends DB{//creación de sub-clase Prueba que hereda atributos de la clase padre DB
    private $result;
    
    public function showInfo(){//método para mostrar info de usuarios, usando la función connect()
        $query =$this->connect()->query('SELECT * FROM users');
        $this->result = $query->fetch(PDO::FETCH_OBJ)->last_name;
        return $this->result;
    }
}
