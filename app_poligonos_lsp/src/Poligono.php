<?php

namespace App;

class Poligono 
{

    protected $forma;

    public function setForma(object $forma): void 
    {
        $this->forma = $forma;
    }

    public function getForma(): object 
    {
        return $this->forma;
    }

    public function getArea()
    {
        return $this->getForma()->getAltura() * $this->getForma()->getLargura();
    }
}