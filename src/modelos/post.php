<?php 

//Exportar la clase Post para usarla en otro lado
namespace Xelanid\Pdophp\modelos;
//Importar la clase UUID para usarla aquí
use Xelanid\Pdophp\utils\UUID;

class Post{

    private string $id;
    private array $likes;

    public function __construct( private string $mensaje){//Aqui dentro del() creé una propiedad $mensaje, requiriendola para instanciar la clase
        echo "Se creó un nuevo objeto de tipo Post \n";
        $this->id= UUID::generateId();
    }
    protected function saludo(){
        return "Hola usuario con id $this->id";
    }

    public function getId():String{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getMensaje(){
        return $this->mensaje;
    }

}