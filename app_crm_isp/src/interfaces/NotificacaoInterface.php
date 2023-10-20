<?php

namespace App\interfaces;

use App\components\Notificacao;

interface NotificacaoInterface
{
    public function enviarNotificacao(Notificacao $notificacao);
}
