<?php

namespace App;

use App\Item;

class CarrinhoCompra {
    
    
    private $itens = [];

    public function __construct() {
        $this->itens = [];    
    }

    public function getItens() {
        return $this->itens;
    }

    public function adicionarItem(Item $item) {
        array_push($this->itens, $item);
        return true;
    }

    public function removerItem(Item $item) {
        $key = array_search($item, $this->itens);
        if ($key !== false) {
            unset($this->itens[$key]);
            return true;
        }
        return false;
    }

    public function validarCarrinho() {
        return count($this->itens) > 0;
    }


}