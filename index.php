<?php

require 'vendor/autoload.php';

use Xelanid\Pdophp\modelos\ImagePost;
use Xelanid\Pdophp\modelos\Padre;
use Xelanid\Pdophp\modelos\Hija;
use Xelanid\Pdophp\modelos\Post;

$objetoPadre = new Padre();
$objetoHija = new Hija();

$objetoHija->getSaludoHija();


// $objeto1 = new Post('Este es mi primer post');
// $postImagen = new ImagePost('Foto de mis vacaciones', 'playa.jpg');

// echo $objeto1->getMensaje();
// echo $postImagen->getMensajeImagePost();

// echo "\n";
// echo $objeto1->getId();
// $saludo = $objeto1->saludo();
// echo $saludo;
// echo "\n";
// echo $objeto1->saludo();
// $objeto1->setId('456');
// echo $objeto1->getId();