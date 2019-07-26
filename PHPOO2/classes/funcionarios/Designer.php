<?php
namespace classes\funcionarios;

use classes\abstratas\Funcionario;

//extends -> Herança
class Designer extends Funcionario {

    public function modifySalario($valor){
        $this->salario = $valor;
    }

    //Polimorfismo, sobrescreve o método de mesmo nome da classe Funcionario
    public function aumentarSalario() {
        return $this->salario *= 0.3;
    }
}
