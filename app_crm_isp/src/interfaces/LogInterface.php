<?php

namespace App\interfaces;

use App\components\Log;

interface LogInterface
{
    public function registrarLog(Log $log);
}
