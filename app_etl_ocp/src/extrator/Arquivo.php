<?php

namespace App\Extrator;

class Arquivo
{

    private $dados = array();

    public function setDados(string $nome, string $cpf, string $email): void
    {
        $this->dados[] = array(
            // iconv('enconding atual', 'enconding desejado', $string)
            'nome' => iconv('ISO-8859-1', 'UTF-8', $nome),
            'cpf' => $cpf,
            'email' => $email
        );

        // alternative 1
        // $this->dados[] = compact('nome', 'cpf', 'email');

        // alternative 2
        // array_push($this->dados, [
        //   'nome' => $nome,
        //   'cpf' => $cpf, 
        //   'email' => $email
        // ]);
    }

    public function getDados(): array
    {
        return $this->dados;
    }
    
}
