<?php

require __DIR__ . '/vendor/autoload.php';

use App\Mensageiro;
use App\Email;
use App\Sms;
use App\Whatsapp;


///// SEM DIP /////

/*
// -------- EMAIL -------- //
$mensageiro = new Mensageiro();
$mensageiro->setCanal('email');
echo $mensageiro->enviarToken() . '<br>';

// -------- SMS -------- //
$mensageiro2 = new Mensageiro();
$mensageiro2->setCanal('sms');
echo $mensageiro2->enviarToken() . '<br>';
*/

///// COM DIP /////
$mensageiro = new Mensageiro(new Email());
$mensageiro->enviarToken();
echo '<br>';

$mensageiro2 = new Mensageiro(new Sms());
$mensageiro2->enviarToken();
echo '<br>';

$mensageiro3 = new Mensageiro(new Whatsapp());
$mensageiro3->enviarToken();
echo '<br>';