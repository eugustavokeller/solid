<?php

require __DIR__ . '/vendor/autoload.php';

use App\dao\UsuarioModel;
use App\dao\LeadModel;
use App\dao\ContratoModel;

$usuarioModel = new UsuarioModel();
$leadModel = new LeadModel();
$contratoModel = new ContratoModel();

print_r($contratoModel);
echo '<br>';

print_r($leadModel);
echo '<br>';

print_r($usuarioModel);
echo '<br>';
