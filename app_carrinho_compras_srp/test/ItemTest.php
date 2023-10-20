<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{


    public function testEstadoInicialItem()
    {
        $item = new Item();

        // assertEquals (first value is expected, second value is actual)
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGetAndSetDescricao()
    {
        $descricao =  'Cadeira de plastico';

        $item = new Item();

        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

    /**
     * @dataProvider dataValores
     */
    public function testGetAndSetValor()
    {
        $valor =  10.5;

        $item = new Item();

        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    public function testItemValido()
    {
        $item = new Item();

        // submeter um item valido para o teste retornar ok
        $item->setDescricao('Cadeira de plastico');
        $item->setValor(10.5);
        $this->assertEquals(true, $item->itemValido());

        // submeter um item invalido para o teste retornar false (descricao)
        $item->setDescricao('');
        $item->setValor(10.5);
        $this->assertEquals(false, $item->itemValido());

        // submeter um item invalido para o teste retornar false (valor)
        $item->setDescricao('Cadeira de plastico');
        $item->setValor(0);
        $this->assertEquals(false, $item->itemValido());

        // submeter um item invalido para o teste retornar false (descricao e valor)
        $item->setDescricao('');
        $item->setValor(0);
        $this->assertEquals(false, $item->itemValido());

    }

    public function dataValores() 
    {
        return [
            [100],
            [-2],
            [0],
            [5]
        ];
    }
}
