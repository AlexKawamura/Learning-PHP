<?php
namespace classes\funcionarios;

use classes\abstratas\Funcionario;

//extends -> Herança
class Designer extends Funcionario {
    public function modifySalario($valor){
        $this->salario = $valor;
    }
}
