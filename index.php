<?php

require 'vendor/autoload.php';

use Xelanid\Pdophp\modelos\ImagePost;
use Xelanid\Pdophp\modelos\Padre;
use Xelanid\Pdophp\modelos\Hija;
use Xelanid\Pdophp\modelos\Post;

$objetoPadre = new Padre();

$objetoHija = new Hija();
echo $objetoHija->__construct();

// $objeto1 = new Post('Este es mi primer post');
// $postImagen = new ImagePost('Foto de mis vacaciones', 'playa.jpg');

// echo $objeto1->getMensaje();
// echo $postImagen->getMensajeImagePost();
