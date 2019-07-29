<?php
namespace classes\funcionarios;

use classes\abstratas\Funcionario;

/* extends -> Herança */
class Designer extends Funcionario {

    public function modifySalario($valor){
        $this->salario = $valor;
    }

    /* A classe é obrigada a implementar o método getBonificacao,
    * pois o método é abstrato na classe Funcionario */
    public function getBonificacao() {
        return $this->salario * 0.5;
    }
    /* Polimorfismo, sobrescreve o método de mesmo nome da classe Funcionario */
    public function aumentarSalario() {
        return $this->salario *= 0.3;
    }
}
