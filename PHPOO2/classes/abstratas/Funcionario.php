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
}