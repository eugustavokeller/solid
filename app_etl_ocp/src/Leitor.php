<?php

namespace App;

class Leitor
{

    private $arquivo;
    private $diretorio;

    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    public function getArquivo(): string
    {
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio): void
    {
        $this->diretorio = $diretorio;
    }

    public function setArquivo(string $arquivo): void
    {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo(): array
    {   

        $caminho = $this->getDiretorio() . '/' . $this->getArquivo();
        $extensao = explode('.', $this->getArquivo())[1];

        $classe = 'App\Extrator\\' . ucfirst($extensao);

        $arquivo = new $classe();

        return $arquivo->lerArquivo($caminho);

        // Alternative 1
        // return call_user_func_array(
        //     array(new $classe(), 'lerArquivo'),
        //     array($caminho)
        // );


        // $caminho = $this->getDiretorio() . '/' . $this->getArquivo();
    
        // $arquivo = new Arquivo();
        
        // $extensao = explode('.', $this->getArquivo())[1];

        // if($extensao == 'txt') $arquivo->lerArquivoTXT($caminho);
        // else if($extensao == 'csv') $arquivo->lerArquivoCSV($caminho);

        // return $arquivo->getDados();
    }
}
