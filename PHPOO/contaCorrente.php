<?php

class contaCorrente {
    //PRIVATE: Não é mais possível acessa-lo de fora da classe,
    //apenas a própria classe pode alterá-lo.
    private $titular;
    public $agencia;
    private $numero;
    private $saldo;

    //CONSTRUTOR
    public function __construct($titular, $agencia, $numero, $saldo) {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    //MÉTODOS
    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        return $this; //Retorna a própria classe
    }

    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        return $this; //Retorna a própria classe
    }

    //GETTERS
    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    //SETTERS
    public function setNumero($numero) {
        return $this->numero = $numero;
    }

}