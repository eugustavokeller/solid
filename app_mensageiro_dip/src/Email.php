<?php

namespace App;

use App\interfaces\MensagemInterface;

class Email implements MensagemInterface {

    public function enviar(): void
    {
        echo 'E-mail: Seu token é 555-333';
    }
}