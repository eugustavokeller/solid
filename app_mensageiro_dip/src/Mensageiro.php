<?php

namespace App;

use App\interfaces\MensagemInterface;

class Mensageiro {

    private MensagemInterface $canal;

    public function __construct(MensagemInterface $canal) 
    {
        $this->canal = $canal;
    }

    public function getCanal(): MensagemInterface
    {
        return $this->canal;
    }

    public function setCanal(MensagemInterface $canal)
    {
        $this->canal = $canal;
    }

    public function enviarToken(): void
    {

        $this->getCanal()->enviar();

        /*
        $classe = 'App\\' . ucfirst($this->canal);
        $canal = new $classe();
        $canal->enviar();
        */
    }
}