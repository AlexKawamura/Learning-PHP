<?php

class contaCorrente {

    public $titular;
    public $agencia;
    public $numero;
    public $saldo;

    //CONSTRUTOR
    public function __construct($titular, $agencia, $numero, $saldo) {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

}