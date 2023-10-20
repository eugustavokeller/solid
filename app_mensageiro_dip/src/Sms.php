<?php

namespace App;

use App\interfaces\MensagemInterface;

class Sms implements MensagemInterface {

    public function enviar(): void
    {
        echo 'SMS: Seu token é 555-333';
    }
}