<?php

namespace App\dao;

use App\BD;
use App\interfaces\ContratoInterface;
use App\interfaces\LogInterface;
use App\interfaces\NotificacaoInterface;
use App\components\Log;
use App\components\Notificacao;

class UsuarioModel extends BD implements ContratoInterface, LogInterface, NotificacaoInterface
{
    public function salvar()
    {
        // logic to save the contract
    }

    public function registrarLog(Log $log)
    {
        // logic to register the log
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        // logic to send the notification
    }
}
