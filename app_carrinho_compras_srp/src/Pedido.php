<?php

namespace App;

use App\CarrinhoCompra;

class Pedido
{
    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    public function __construct()
    {
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->status = 'ABERTO';
        $this->valorPedido = 0;
    }

    public function getCarrinhoCompra()
    {
        return $this->carrinhoCompra;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    public function confirmar() 
    {
        if($this->carrinhoCompra->validarCarrinho()) {
            $this->setStatus('CONFIRMADO');
            return true;
        }
        return false;
    }
}
