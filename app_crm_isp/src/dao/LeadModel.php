<?php

namespace App\dao;

use App\BD;
use App\interfaces\ContratoInterface;
use App\interfaces\NotificacaoInterface;
use App\components\Notificacao;

class LeadModel extends BD implements ContratoInterface, NotificacaoInterface
{
    public function salvar()
    {
        // logic to save the contract
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        // logic to send the notification
    }
}
