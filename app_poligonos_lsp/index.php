<?php

require __DIR__. '/vendor/autoload.php';

use App\poligonos\Retangulo;
use App\poligonos\Quadrado;
use App\Poligono;

// QUADRADO
$quadrado = new Poligono();
$quadrado->setForma(new Quadrado());
$quadrado->getForma()->setAltura(5);
echo "Por poligono - Área do quadrado: " . $quadrado->getArea() . '<br>';


// RETANGULO
$retangulo = new Poligono();
$retangulo->setForma(new Retangulo());
$retangulo->getForma()->setAltura(5);
$retangulo->getForma()->setLargura(10);
echo "Por poligono - Área do retangulo: " . $retangulo->getArea() . '<br>';

// $retangulo = new Retangulo();
// $quadrado = new Quadrado();

// $retangulo->setAltura(5);
// $retangulo->setLargura(10);
// echo "Área do retângulo: " . $retangulo->getArea() . '<br>';

// $quadrado->setAltura(5);
// echo "Área do quadrado: " . $quadrado->getArea() . '<br>';