<?php
namespace classes\abstratas;

class Funcionario {
    public $nome;
    public $cpf;
    //protected -> Permite as classes que herdam a classe Funcionario realize manipulações
    protected $salario;

    public function __construct($cpf, $salario) {
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function getBonificacao() {
        return $this->salario * 0.5;
    }

    public function aumentarSalario() {
        return $this->salario *= 1.5;
    }
}