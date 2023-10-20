<?php

namespace App;

use App\interfaces\MensagemInterface;

class Whatsapp implements MensagemInterface {

    public function enviar(): void
    {
        echo 'Whatsapp: Seu token é 555-333';
    }
}