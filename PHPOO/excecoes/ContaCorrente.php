<?php

class ContaCorrente {
    private $titular;
    private $agencia;
    private $numero;
    private $saldo;
    public static $totalContas;
    public static $taxaOperacao;

    public function __construct($titular, $agencia, $numero, $saldo) {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;

        try {
            self::$taxaOperacao = intDiv(30, self::$totalContas);
        } catch(Error $error) {
            echo "Não é possível realizar divisão por zero";
            exit;
        }

        self::$totalContas++;
    }

    public static function claculaTaxaOperacao() {

    }

    public function sacar($valor) {
        $this->saldo = $this->saldo - $valor;
        return $this;
    }

    public function depositar($valor) {
        $this->saldo = $this->saldo + $valor;
        return $this;
    }

    public function transferir(float $valor, ContaCorrente $conta):ContaCorrente {
        $this->sacar($valor);
        $conta->depositar($valor);
        return $this;
    }

    public function __get($atributo) {
        validacao::verifyAtributo($atributo);
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        validacao::verifyAtributo($atributo);
        $this->$atributo = $valor;
    }


    private function formataSaldo() {
        return "R$ " .
            number_format(
                $this->saldo, 2, ",", "."
            );
    }

    public function getSaldo() {
        return $this->formataSaldo();
    }
}
