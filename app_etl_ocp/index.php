<?php

require __DIR__ . '/vendor/autoload.php';

use App\Leitor;

// -------------- leitor de arquivos TXT --------------
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');
$arr_txt = $leitorTXT->lerArquivo();


// -------------- leitor de arquivos csv --------------
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$arr_csv = $leitorCSV->lerArquivo();

// -------------- merge entre TXT e CSV ---------------
$arr_merge = array_merge($arr_txt, $arr_csv);

echo '<pre>';
print_r($arr_merge);
echo '</pre>';
