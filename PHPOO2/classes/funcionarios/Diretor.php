<?php
/* Ao utilizar autoload e namespace o nome da classe e do diretório devem ser iguais */
/* namespace -> Como estamos utilizando um arquivo autoload,
 * apartir de agora as classes deverão especificar seus diretórios através do namespace*/
namespace classes\funcionarios;

use classes\abstratas\AutenticaSenha;

/* O PHP não possui herança multipla,
 * a classe deverá herdar a classe AutenticaSenha que por sua vez herda a classe Funcionario
 * fazendo uma herança em cascata */
class Diretor extends AutenticaSenha {

    /* A classe é obrigada a implementar o método getBonificacao,
     * pois o método é abstrato na classe Funcionario */
    public function getBonificacao() {
        return $this->salario * 0.5;
    }

    public function modifySalario($valor){
        $this->salario = $valor;
    }

}