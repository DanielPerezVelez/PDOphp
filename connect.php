<?php

class DB{ //creación de clase DB con variables privadas
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){//asignación de valores a variables
        $this->host ='localhost';
        $this->db ='test';
        $this->user ='root';
        $this->password ='';
        $this->charset ='utf8mb4';
    }

    function connect(){//método para conectar a la Base de Datos
        try{
            $connection="mysql:host=" .$this->host . ";dbname=" .$this->db . ";charset=" . $this->charset;
            $options=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES=> false];
            $pdo= new PDO ($connection, $this->user, $this->password, $options);
            
            return $pdo;
        }catch(PDOException $e){
            print_r("Error connection: ". $e->getMessage());
        }
    }
}